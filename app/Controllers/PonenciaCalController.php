<?php

namespace App\Controllers;

use App\Models\MainModel;

class PonenciaCalController extends BaseController
{
    
    public function __construct()
    {
        $this->MainModel = new MainModel();
        date_default_timezone_set('America/Monterrey');
        $date = date('Y-m-d H:i:s');
    }
    
    
    public function index()
    {
        return view('Calificar-Ponencias/index');
    }
    
    public function validar_Datos_Calificacion(){ //AQUI SE VALIDA SI EXISTE EL GAFETE Y LA PONENCIA
        $gafete = $this->request->getPost('clave_gafete');
        $clave_ponencia = $this->request->getPost('codigo_ponencia');
        
        $condicion = ['clave_gafete' => $gafete];
        $participante = $this->MainModel->getAllOneRow('participantes_congresos', $condicion);// CAMBIAR DE participantes_congresos_prueba A participantes_congresos
        
        $condicion = ['clave_ponencia' => $clave_ponencia];
        $ponencia = $this->MainModel->getAllOneRow('ponencias', $condicion); // CAMBIAR DE ponencias_prueba A ponencias
        
        if($participante == "" || $ponencia == ""){ //SI NO EXISTE EL GAFETE O LA CLAVE DE PONENCIA RETURNARA UN MENSAJE DICIENDO QUE NO COINCIDEN LOS DATOS EN LA BASE DE DATOS
            $resultado = "No_existen_datos";
        }
        else{   //SI EXISTEN EN LA BASE DE DATOS VERIFICARA SI EL USUARIO YA A CALIFICADO LA PONENCIA
        
            $condiciones = ['gafete' => $gafete, 'ponencia'=> $clave_ponencia];
            $calificacion = $this->MainModel->getAll('calificaciones', $condiciones); // CAMBIAR DE calificaciones_prueba A calificaciones
            
            if(!empty($calificacion)){ //SI LA PONENCIA YA SE A CALIFICADO RETORNARA UN MENSAJE DE PONENCIA CALIFICADA
                $resultado = "Ponencia_califiacada";
            }else{ // SI NO A SIDO CALIFICADA SE VERIFICARA SI ES LA PRIMERA VES QUE SE CALIFICA LA PONENCIA 
                
                $condiciones = ['gafete' => $gafete];
                $calificaciones = $this->MainModel->getAll('calificaciones', $condiciones); // CAMBIAR DE calificaciones_prueba A calificaciones
                
                if(count($calificaciones) >= 1){ // YA EXISTE UNA PONENCIA CALIFICADA
                    $resultado = "Calificar_ponencia";
                }else{ // ES LA PRIMERA VES QUE EL PARTICIPANTE CALIFICA UNA PONENCIA, SE MOSTRARA EL MODAL DE CORREO ELECTRONICO
                    $resultado = "Calificar_ponencia_1";  
                }
            }
        }
        
        
        return json_encode($resultado);
    }
    
    public function validarCorreo() //SE EJECUTA ESTA FUNCION AL REALIZAR EL SUBMIT EN EL MODAL DEL CORREO, ESTO PASA CUANDO ES LA PRIMERA VES QUE EL PARTICIPANTE CALIFICARA UNA PONENCIA Y VERIFICARA SI EXISTE EL CORREO EN LA BASE DE DATOS
    {
        $correo = $this->request->getPost('correo');
        $clave_gafete = $this->request->getPost('gafete');
        

        $condicionCorreo = array("correo" => $correo);
        $usuario = $this->MainModel->getAllOneRow('usuarios', $condicionCorreo);
        
        if (empty($usuario)) { // SI NO EXISTE RETRONARA EL SIGUIENTE MENSAJE
        
            $resultado = "NoExisteCorreo";
            
        } else { // SI EXISTE TOMARA EL USUARIO Y LO INSERTARA EN LA COLUMNA DE USUARIO EN LA TABLA DE PARTICIPANTES DONDE EL GAFETE SEA IGUAL AL QUE SE OBTUVO 
        
            $data = ['usuario' => $usuario['usuario']];
            $condiciones = ['clave_gafete' => $clave_gafete];
            $this->MainModel->updateRow('participantes_congresos',$condiciones,$data); // CAMBIAR DE participantes_congresos_prueba A participantes_congresos
            $resultado = "success";
        }
        
        return json_encode($resultado);
    }
    
    
    public function calificaciones() //SE CREA LA SESSION CON LOS DATOS DEL PARTICIPANTE
    {
        $gafete = $this->request->getPost('clave_gafete');
        $codigo_ponencia = $this->request->getPost('codigo_ponencia');
        // $correo = $this->request->getPost('correoOculto');

        // $MainModel = new MainModel();

        $condiciones_participantes = array('clave_gafete' => $gafete);
        $participante = $this->MainModel->getAllOneRow('participantes_congresos', $condiciones_participantes); // CAMBIAR DE participantes_congresos_prueba A participantes_congresos

        $condiciones_ponencia = array("clave_ponencia" => $codigo_ponencia);
        $ponencia = $this->MainModel->getAllOneRow('ponencias', $condiciones_ponencia); // CAMBIAR DE ponencias_prueba A ponencias
        
        $data = [
            'gafete' => $gafete,
            'ponencia' => $codigo_ponencia,
            'nombre_ponencia' => $ponencia["nombre"],
            // 'correo' => $correo,
            'usuario' => $participante["usuario"],
            'red' => $participante["red"],
            'claveCuerpo' => $participante["claveCuerpo"],
            'nombre_congreso' => $ponencia["nombre_congreso"]
        ];

        $session = session();
        $session->set($data);

        return view('Calificar-Ponencias/calificaciones');
    }
    
    public function ordenamiento()
    {
        $optradio1 = $this->request->getPost('optradio1');
        $optradio2 = $this->request->getPost('optradio2');
        $optradio3 = $this->request->getPost('optradio3');
        $optradio4 = $this->request->getPost('optradio4');

        //========= seleccionamos todas las ponencias calificadas del usuario 
        $condiciones = array('gafete' => session('gafete'));
        $ordenar_ponenciaCA = "'posicion','ASC'";
        $ponenciasCA = $this->MainModel->getAllOneRowOrderLimit('calificaciones', $condiciones, $ordenar_ponenciaCA, 10); // CAMBIAR DE calificaciones_prueba A calificaciones

        $data = [
            'calificacion1' => $optradio1,
            'calificacion2' => $optradio2,
            'calificacion3' => $optradio3,
            'calificacion4' => $optradio4
        ];

        $session = session();
        $session->set($data);
        
        $arrayPonencias = [];
            $i = 0;
            foreach($ponenciasCA as $p){
                $condicionesPonencias = array('clave_ponencia' => $ponenciasCA[$i]['ponencia']);
                $res_ponencias = $this->MainModel->getAllOneRow('ponencias', $condicionesPonencias); // CAMBIAR DE ponencias_prueba A ponencias

                array_push($arrayPonencias, $res_ponencias);

                $i++;
            }
            
            $data = [
                'res' => $arrayPonencias,
            ];

        return view('Calificar-Ponencias/ordenamiento', $data);
    }
    
    public function calificar_ponencia()
    {   
                            
        $arrayPonencia = [];
        $i = 1;
        
        foreach($_POST['posiciones'] as $p){ //SE RECORRERAN TODAS LAS CALIFICACIONES PARA ACTUALIZAR SUS POSICIONES Y SE INSERTARA LA NUEVA CALIFICACION
            $condicion = ["nombre" =>$p];
            $ponencia = $this->MainModel->getAllOneRow('ponencias', $condicion); //CAMBIAR DE ponencias_prueba A ponencias
            
            $condiciones = ['ponencia' => $ponencia["clave_ponencia"], 'gafete' =>session('gafete')];
            $calificacion = $this->MainModel->getAllOneRow('calificaciones', $condiciones); // CAMBIAR DE calificaciones_prueba A calificaciones
            
            if(empty($calificacion)){ //SI NO EXISTE LA CALIFICACION SE INSERTARA
            
                $condiciones_calificaciones = [
                    'usuario' => session('usuario'),
                    'gafete' => session('gafete'),
                    'posicion' => $i,
                    'calificacion1' => session('calificacion1'),
                    'calificacion2' => session('calificacion2'),
                    'calificacion3' => session('calificacion3'),
                    'calificacion4' => session('calificacion4'),
                    'ponencia' => session('ponencia'),
                    'red' => session('red'),
                    'claveCuerpo' => session('claveCuerpo'),
                    'anio' => date('Y'),
                    'fecha' => date('Y-m-d H:i:s')
                ];
                //DESCOMENTAR ESTA LINEA
                $insertar_calificacion = $this->MainModel->insertarRegistro('calificaciones', $condiciones_calificaciones); //CAMBIAR DE calificaciones_prueba A calificaciones
                
                $condiciones = ['gafete' => session('gafete')];
                $count = $this->MainModel->countRow('calificaciones', $condiciones); //CAMBIAR DE calificaciones_prueba A calificaciones
                
                switch(session('red')){ // AQUI SE OTROGARA LA CONSTANCIA A CADA RED DEPENDIENDO DE LA CANTIDAD DE PONENCIAS CALIFICADAS
                    case 'Relayn':
                        
                        if($count == 6){// SI EL PARTICIPANTE ES DE LA RED DE RELEEM Y TIENE 2 PONENCIAS CALIFICADAS ENTRA EN LA CONDICION Y SE LE OTORGA UNA CONSTANCIA EN LA TABLA DE CONSTANCIAS RELEEM
                            $data = ["usuario" => session('usuario')];
                            $usuario = $this->MainModel->getAllOneRow("usuarios",$data);
                            
                            $data = [
                                'usuario' => session('usuario'),
                                'nombre' => $usuario["nombre"]." ".$usuario["ap_paterno"]." ".$usuario["ap_materno"],
                                'tipo_constancia' => 'Asistencia',
                                'redCueAca' => session('claveCuerpo'),
                                'red' => session('red'),
                                'anio' => date('Y'),
                                'fecha_registro' => date('Y-m-d H:i:s')
                            ];

                            //DESCOMENTAR LINEA
                            $constancia = $this->MainModel->insertarRegistro('constancia_Relayn', $data); //DESCOMENTAR ESTO
                            
                        }
                        break;
                    case 'Relep':
                        $porcentaje = ( ($count * 100) / 5);
                        
                        if($porcentaje <= 100){
                            //VAMOS A VERIFICAR SI TIENE LA CONSTANCIA YA INGRESADA
                            $condiciones = [
                                'tipo_constancia' => 'Asistencia',
                                'usuario' => session('usuario'),
                                'anio' => date('Y'),
                                'red' => session('red'),
                                'redCueAca' => session('claveCuerpo')
                                ];
                            $existe = $this->MainModel->countRow('constancia_Relep',$condiciones);
                            
                            if($existe == 0){
                                //CREAMOS SU CONSTANCIA
                                $data = ["usuario" => session('usuario')];
                                $usuario = $this->MainModel->getAllOneRow("usuarios",$data);
                                $data = [
                                    'usuario' => session('usuario'),
                                    'nombre' => $usuario["nombre"]." ".$usuario["ap_paterno"]." ".$usuario["ap_materno"],
                                    'tipo_constancia' => 'Asistencia',
                                    'redCueAca' => session('claveCuerpo'),
                                    'red' => session('red'),
                                    'anio' => date('Y'),
                                    'fecha_registro' => date('Y-m-d H:i:s'),
                                    'porcentaje' => $porcentaje
                                ];
                                $last_id = $this->MainModel->generalInsertLastID('constancia_Relep', $data);
                                #Actualizamos su folio
                                $data = [
                                    'folio' => $last_id
                                    ];
                                $condiciones = [
                                    'tipo_constancia' => 'Asistencia',
                                    'usuario' => session('usuario'),
                                    'anio' => date('Y'),
                                    'red' => session('red'),
                                    'redCueAca' => session('claveCuerpo')
                                    ];
                                $this->MainModel->updateRow('constancia_Relep',$condiciones,$data);
                                
                            }else{
                                //ACTUALIZAMOS SU CONSTANCIA
                                $data = [
                                    'porcentaje' => $porcentaje
                                    ];
                                $condiciones = [
                                    'tipo_constancia' => 'Asistencia',
                                    'usuario' => session('usuario'),
                                    'anio' => date('Y'),
                                    'red' => session('red'),
                                    'redCueAca' => session('claveCuerpo')
                                    ];
                                $this->MainModel->updateRow('constancia_Relep',$condiciones,$data);
                            }
                            
                        }
                        
                        break;
                    case 'Relen':
                        $porcentaje = ( ($count * 100) / 5);
                        
                        if($porcentaje <= 100){
                            //VAMOS A VERIFICAR SI TIENE LA CONSTANCIA YA INGRESADA
                            $condiciones = [
                                'tipo_constancia' => 'Asistencia',
                                'usuario' => session('usuario'),
                                'anio' => date('Y'),
                                'red' => session('red'),
                                'redCueAca' => session('claveCuerpo')
                                ];
                            $existe = $this->MainModel->countRow('constancia_Relen',$condiciones);
                            
                            if($existe == 0){
                                //CREAMOS SU CONSTANCIA
                                $data = ["usuario" => session('usuario')];
                                $usuario = $this->MainModel->getAllOneRow("usuarios",$data);
                                $data = [
                                    'usuario' => session('usuario'),
                                    'nombre' => $usuario["nombre"]." ".$usuario["ap_paterno"]." ".$usuario["ap_materno"],
                                    'tipo_constancia' => 'Asistencia',
                                    'redCueAca' => session('claveCuerpo'),
                                    'red' => session('red'),
                                    'anio' => date('Y'),
                                    'fecha_registro' => date('Y-m-d H:i:s'),
                                    'porcentaje' => $porcentaje
                                ];
                                $last_id = $this->MainModel->generalInsertLastID('constancia_Relen', $data);
                                #Actualizamos su folio
                                $data = [
                                    'folio' => $last_id
                                    ];
                                $condiciones = [
                                    'tipo_constancia' => 'Asistencia',
                                    'usuario' => session('usuario'),
                                    'anio' => date('Y'),
                                    'red' => session('red'),
                                    'redCueAca' => session('claveCuerpo')
                                    ];
                                $this->MainModel->updateRow('constancia_Relen',$condiciones,$data);
                                
                            }else{
                                //ACTUALIZAMOS SU CONSTANCIA
                                $data = [
                                    'porcentaje' => $porcentaje
                                    ];
                                $condiciones = [
                                    'tipo_constancia' => 'Asistencia',
                                    'usuario' => session('usuario'),
                                    'anio' => date('Y'),
                                    'red' => session('red'),
                                    'redCueAca' => session('claveCuerpo')
                                    ];
                                $this->MainModel->updateRow('constancia_Relen',$condiciones,$data);
                            }
                            
                        }
                        
                        break;
                }
                
            }else{ //SI YA EXISTE CALIFICACION SOLO SE ACTUALIZARA SU NUEVA POSICION 
                $condicion = ['ponencia' => $calificacion["ponencia"]];
                $data = ['posicion' => $i];
                $actualizar_posicion = $this->MainModel->updateRow('calificaciones', $condicion, $data); //CAMBIAR DE calificaciones_prueba A calificaciones //DESCOMENTAR ESTO
            }
            $i++;
        }
        
        $condiciones_comentarios = [
            'claveGafete' => session('gafete'),
            'usuario' => session('usuario'),
            'clavePonencia' => session('ponencia'),
            'comentario' => $_POST["comentario"]
        ];
        
        
        $insertComentario = $this->MainModel->insertarRegistro('comentarios', $condiciones_comentarios); //DESCOMENTAR ESTO // // CAMBIAR DE comentarios_prueba A comentarios
        
        session_destroy();
        
        return view('Calificar-Ponencias/ponencia_calificada');

    }
    
    public function podium($red,$anio){ 
        
        $array = [
            'red' =>$red,
            'anio' =>$anio
            ];
            
        return view('Podium/index',$array);
    }
    
    public function getcalificacionesPonencias(){
        $condiciones = [
                "red" => $_POST["red"],
                "anio" => $_POST["anio"]
                ];
        
        $data = [];
        $calificaciones = $this->MainModel->promedio_calificaciones('calificaciones',$condiciones);
        
        $posicion = 1;
        $i = 0;
        foreach($calificaciones as $c){
            // if($i<= 3){
            // }
            $condicion = ["clave_ponencia"=> $c["ponencia"]];
            $ponencia = $this->MainModel->getAllOneRow('ponencias',$condicion);
            $calificacion = [
                'posicion' => $posicion,
                'ponencia' => $c["ponencia"],
                'nombre'=>$ponencia["nombre"],
                'promedio'=>$c["promedio"],
                'id_ponencia'=>$ponencia["id"]
                ];
            
            $data["calificaciones"][$i] = $calificacion;
            $i++;
            $posicion++;
        }
        
        return json_encode($data);
    }
    
    public function verificarFecha(){
        $fecha = $_POST["fecha"];
        
        $condiciones = [
            'red' => $_POST["red"],
            'anio' => $_POST["anio"]];
        
        if(empty($fecha)){
             $resultado = $this->MainModel->lastUpdateGeneral('calificaciones', "fecha",$condiciones);
             $data["resultado"] = "actualizacion";
             $data["fecha"] = $resultado[0]["fecha"];
        }else{
            $resultado = $this->MainModel->fechaMayorQueGeneral('calificaciones',$fecha,$condiciones);
            
            if (empty($resultado)) { // SI EL ESULTADO ES IGUAL A VACIO QUIERE DECIR QUE NO HAY ACTUALIZACIONES
                $data["resultado"] = "No_existe_actualizacion";
            } else { // SI EL RESULTADO NO ESTA VACIO RETORNAREMOS LA ULTIMA FECHA DE LAS CALIFICACIONES AGREGADAS
                $data["resultado"] = "actualizacion";
                $data["fecha"] = $resultado[0]["fecha"];
            }
        }
        
        
        
        return json_encode($data);
    }
    
    public function comentarios($ponencia){
        $condicion = [
            'clavePonencia' => $ponencia
            ];
            
        $comentarios = $this->MainModel->getAllTable('comentarios',$condicion);
        
        if(empty($comentarios)){
            
            return redirect()->to(base_url());
            
        }else{
            
            $condicion = [
            'clave_ponencia' => $ponencia];
            
            $ponencia = $this->MainModel->getAllOneRow('ponencias',$condicion);
            
            $array["red"] = $ponencia["red"];
            $array["nombre"] = $ponencia["nombre"];
            $array["comentarios"] = $comentarios;
            
            return view('Podium/comentarios',$array);
        }
    }
    
    
    public function verificar_constancias(){//ESTA FUNCION VERIFICARA SI YA SE OTORGO UNA CONSTANCIA a los participantes 
    
      $calificaciones = $this->MainModel->constancia_relayn();
      
      foreach($calificaciones as $c){
          
          $condicion = ["usuario"=>$c["usuario"]];
          $constancia = $this->MainModel->getAllOneRow('constancia_Relayn',$condicion);
          
          if(empty($constancia)){
              echo "no cuenta con constancia ";
              echo $c["usuario"];
              echo '<br>';
          }
      
        //   echo '<pre>';
        //   print_r($constancia);
        //   echo '</pre>';
      }
    
    
        
    }
    
}
