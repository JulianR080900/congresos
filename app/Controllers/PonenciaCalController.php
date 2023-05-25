<?php

namespace App\Controllers;

use App\Models\MainModel;

class PonenciaCalController extends BaseController
{

    public $MainModel;
    public $current_date;
    private $current_red; #QUITAR VALORES
    private $current_sede; #QUITAR VALORES
    private $maxRevisiones;
    public $db_serv;
    public $currentAnio;
    
    public function __construct(){
        $this->MainModel = new MainModel();
        date_default_timezone_set('America/Monterrey');
        $this->current_date = date('Ymd');
        $this->currentAnio = date('Y');
        $this->db_serv = \Config\Database::connect();

        if($this->current_date == '20230523' || $this->current_date == '20230524' || $this->current_date == '20230525' || $this->current_date == '20230526'){
            $this->current_red = 'Releg';
            $this->current_sede = 'UAQ';
            $this->maxRevisiones = 5;
        }else if($this->current_date == '20231115' || $this->current_date == '20231117'){
            $this->current_red = 'Relayn';
        }else if($this->current_date == '20231209' || $this->current_date == '20231209'){
            $this->current_red = 'Relen_Relep';
        }else{
            http_response_code(404);
            exit;
        }

        
    }
    
    
    public function index(){

        if(empty($this->current_red)){
            http_response_code(404);
            exit;
        }
        
        $data = [
            'red' => $this->current_red,
            'sede' => $this->current_sede
        ];

        return view('calificar/index',$data)
        .view('templates/footer');

    }

    public function verificar(){
        #vamos a verificar los datos
        $gafete = $_POST['gafete'];
        $ponencia = $_POST['ponencia'];

        $condicion = ['clave_gafete' => $gafete];
        $info_gafete = $this->MainModel->getAllOneRow('participantes_congresos', $condicion);// CAMBIAR DE participantes_congresos_prueba A participantes_congresos
        
        $condicion = ['clave_ponencia' => $ponencia];
        $info_ponencia = $this->MainModel->getAllOneRow('ponencias', $condicion); // CAMBIAR DE ponencias_prueba A ponencias

        if(empty($info_gafete) || empty($info_ponencia)){
            http_response_code(404);
            $mensaje = 'Información no encontrada. Favor de revisar los datos ingresados';
            echo $mensaje;
            exit;
        }

        if($info_gafete['submission_id'] == $info_ponencia['submission_id']){
            http_response_code(501);
            $mensaje = 'No puede calificar su ponencia';
            echo $mensaje;
            exit;
        }

        
        if($info_gafete['anio'] != date('Y')){
            http_response_code(502);
            $mensaje = 'El gafete no corresponde con el año del congreso';
            echo $mensaje;
            exit;
        }

        #comprobamos si la ponencia ya la califico wtf pq no entra

        $condiciones = [
            'gafete' => $gafete, 
            'ponencia'=> $ponencia
        ];

        if($this->MainModel->exist('calificaciones', $condiciones)){
            http_response_code(503);
            $mensaje = 'Esta ponencia ya ha sido calificada.';
            echo $mensaje;
            exit;
        }

        #COMPROBAMOS SI LA CLAVE DE LA PONENCIA PERTENECE A LA RED

        if($this->current_red != $info_ponencia['red']){
            http_response_code(504);
            $mensaje = 'Esta ponencia no pertenece a la red del congreso actual.';
            echo $mensaje;
            exit;
        }

        #PASO TODAS LAS PRUEBAS, AHORA VAMOS A TRAERNOS TODOS LAS PONENCIAS QUE YA HAYA CALIFICADO

        echo json_encode(true);
        exit;
        
    }

    public function evaluacion(){

         #vamos a verificar los datos
         $gafete = $_POST['clave_gafete'];
         $ponencia = $_POST['codigo_ponencia'];
 
         $condicion = ['clave_gafete' => $gafete];
         $info_gafete = $this->MainModel->getAllOneRow('participantes_congresos', $condicion);// CAMBIAR DE participantes_congresos_prueba A participantes_congresos
         
         $condicion = ['clave_ponencia' => $ponencia];
         $columnas = ['ponente','nombre','id','submission_id','claveCuerpo'];
         $info_ponencia = $this->MainModel->getColumnsOneRow($columnas,'ponencias', $condicion); // CAMBIAR DE ponencias_prueba A ponencias

         #OBTENEMOS LAS ENCUESTAS QUE YA SE CALIFICARON

         $condiciones = [
            'gafete' => $gafete,
            #'anio' => date('Y'),
            #'red' => $this->current_red
         ];

         $columnas = ['ponencia', 'posicion'];

         $ponencias_evaluadas = $this->MainModel->getAllColums($columnas,'calificaciones',$condiciones);

         foreach($ponencias_evaluadas as $key=>$p){
            #vamos a obtener la informacion de la ponencia
            $columnas = ['nombre'];
            $condiciones = ['clave_ponencia' => $p['ponencia']];

            $ponencia_c = $this->MainModel->getColumnsOneRow($columnas,'ponencias',$condiciones);

            if(empty($ponencia_c)){
                http_response_code(500);
                exit;
            }

            $ponencias_evaluadas[$key]['nombre_ponencia'] = $ponencia_c['nombre'];
         }

        array_multisort(array_column($ponencias_evaluadas, 'posicion'), SORT_ASC, $ponencias_evaluadas);

        $data = [
            'ponencias' => $ponencias_evaluadas,
            'gafete' => $gafete,
            'nombre_gafete' => $info_gafete['nombre'],
            'ponencia_actual' => $info_ponencia,
            'sede' => $this->current_sede,
            'red' => $this->current_red,
            'clavePonencia' => $ponencia
        ];

        return view('calificar/evaluacion',$data)
        .view('templates/footer');
    }

    public function insertEvaluacion(){

        #$gafete = 'O36SML';
        #$ponencia = '45GTJ';

        $ponencia = $_POST['clavePonencia'];
        $gafete = $_POST['gafete'];

        $condiciones = ['clave_gafete' => $gafete];
        $columnas = ['usuario', 'claveCuerpo','nombre'];
        $infoGafete = $this->MainModel->getColumnsOneRow($columnas,'participantes_congresos',$condiciones);

        if(empty($infoGafete)){
            http_response_code(501);
            echo 'Ha ocurrido un eror. Intente mas tarde. La clave de la ponencia es: <b>'.$ponencia.'</b>';
            exit;
        }

        if(empty($infoGafete['usuario'])){
            http_response_code(404);
            echo 'No se ha encontrado su usuario. Contacte al equipo REDESLA. La clave de la ponencia es: <b>'.$ponencia.'</b>';
            exit;
        }

        $condiciones = ['ponencia' => $ponencia, 'gafete' => $gafete];
        if($this->MainModel->exist('calificaciones', $condiciones)){
            http_response_code(504);
            echo 'Esta ponencia ya ha sido calificada.';
            exit;
        }


        foreach($_POST['ordenamiento'] as $key=>$o){
            $condiciones = [
                'nombre' => $o
            ];

            $infoPonencia = $this->MainModel->getAllOneRow('ponencias',$condiciones);

            if(empty($infoPonencia)){
                http_response_code(500);
                echo 'Ha ocurrido un eror. Intente mas tarde. La clave de la ponencia es: <b>'.$ponencia.'</b>';
                exit;
            }

            #VAMOS A COMPROBAR SI YA LA CALIFICO

            $condiciones = ['ponencia' => $infoPonencia['clave_ponencia'], 'gafete' => $gafete];

            if(!$this->MainModel->exist('calificaciones', $condiciones)){
                //SI NO EXISTE LA CALIFICACION SE INSERTARA

                $dataCalificacion = [
                    'usuario' => $infoGafete['usuario'],
                    'gafete' => $gafete,
                    'posicion' => intval($key+1),
                    'calificacion1' => $_POST['tipo_metodologia'],
                    'calificacion2' => $_POST['evaluaciones'][1],
                    'calificacion3' => $_POST['evaluaciones'][2],
                    'calificacion4' => $_POST['evaluaciones'][3],
                    'ponencia' => $infoPonencia['clave_ponencia'],
                    'red' => $this->current_red,
                    'claveCuerpo' => $infoGafete['claveCuerpo'],
                    'anio' => date('Y'),
                    'fecha' => date('Y-m-d H:i:s'),
                ];

                
                if(!$this->MainModel->insertarRegistro('calificaciones', $dataCalificacion)){
                    http_response_code(502);
                    echo 'Ha ocurrido un eror. Intente mas tarde. La clave de la ponencia es: <b>'.$ponencia.'</b>';
                    exit;
                }

                $dataComentario = [
                    'claveGafete' => $gafete,
                    'usuario' => $infoGafete['usuario'],
                    'clavePonencia' => $ponencia,
                    'comentario' => $_POST['comentarios']
                ];

                if(!$this->MainModel->insertarRegistro('comentarios', $dataComentario)){
                    http_response_code(505);
                    echo 'Ha ocurrido un eror. Intente mas tarde. La clave de la ponencia es: <b>'.$ponencia.'</b>';
                    exit;
                }
                
                
            }else{
                #ya existe la ponencia en calificaciones, solo actualizamos la posicion

                $condicionesUpdate = ['ponencia' => $infoPonencia["clave_ponencia"]];
                $dataUpdate = ['posicion' => intval($key+1)];
                
                
                if(!$this->MainModel->generalUpdate('calificaciones', $dataUpdate, $condicionesUpdate)){
                    http_response_code(503);
                    echo 'Ha ocurrido un eror. Intente mas tarde. La clave de la ponencia es: <b>'.$ponencia.'</b>';
                    exit;
                }
                
            }

        }

        #Ahora vamos a ver cuantas ponencias ha calificado

        $condiciones = ['gafete' => $gafete, 'anio' => date('Y')];

        $c_revisiones = $this->MainModel->count('calificaciones',$condiciones); #1

        $porcentaje_asistencia = ($c_revisiones*100) / $this->maxRevisiones; # 5 es el 100%, cuanto es $c_revisiones

        $porcentaje_asistencia = round($porcentaje_asistencia);

        $porcentaje = $porcentaje_asistencia >= 100 ? 100 : $porcentaje_asistencia;

        #verificamos si tiene la constancia

        $tabla = 'constancia_'.ucfirst($this->current_red);

        $condiciones = [
            'usuario' => $infoGafete['usuario'],
            'tipo_constancia' => 'Asistencia',
            'redCueAca' => $infoGafete['claveCuerpo'],
            'red' => ucfirst($this->current_red),
            'anio' => date('Y')
        ];

        if(!$this->MainModel->exist($tabla,$condiciones)){
            #NO EXISTE LA CONSTANCIA, LA VAMOS A INSERTAR
            $dataConstancia = $condiciones;
            $dataConstancia['nombre'] = $infoGafete['nombre'];
            $dataConstancia['porcentaje'] = $porcentaje;
            $dataConstancia['fecha_registro'] = date('Y-m-d H:i:s');
            if(!$this->MainModel->insertarRegistro($tabla, $dataConstancia)){
                http_response_code(506);
                echo 'Ha ocurrido un eror. Intente mas tarde. La clave de la ponencia es: <b>'.$ponencia.'</b>';
                exit;
            }

            $columnas = ['id'];
            $id = $this->MainModel->getColumnsOneRow($columnas,$tabla,$dataConstancia);

            #ACTUALIZAMOS EL FOLIO
            $folio_completo = $id['id'].'PA-'.$this->current_red.'-'.$this->currentAnio;

            $dataUpdate = [
                'folio' => $id['id'],
                'folio_completo' => $folio_completo
            ];

            $condiciones = [
                'id' => $id['id']
            ];

            if(!$this->MainModel->generalUpdate($tabla,$dataUpdate,$condiciones)){
                http_response_code(508);
                echo 'Ha ocurrido un eror. Intente mas tarde. La clave de la ponencia es: <b>'.$ponencia.'</b>';
                exit;
            }

        }else{
            #EXISTE LA CONSTANCIA, SO... VAMOS A ACTUALIZAR LA INFO
            $dataUpdate = [
                'porcentaje' => $porcentaje
            ];
            
            $condiciones = [
                'usuario' => $infoGafete['usuario'],
                'tipo_constancia' => 'Asistencia',
                'redCueAca' => $infoGafete['claveCuerpo'],
                'red' => ucfirst($this->current_red),
                'anio' => date('Y')
            ];
            
            if(!$this->MainModel->generalUpdate($tabla,$dataUpdate,$condiciones)){
                http_response_code(507);
                echo 'Ha ocurrido un eror. Intente mas tarde. La clave de la ponencia es: <b>'.$ponencia.'</b>';
                exit;
            }
        }

        $return = [
            'title' => 'Éxito',
            'mensaje' => 'Ponencia calificada correctamente'
        ];

        echo json_encode($return);
        exit;
    }

    public function podium($red,$anio){ 
        $data = [
            'red' => $red,
            'anio' => $anio
        ];
            
        return view('Podium/index',$data);
    }

    public function getListadoPodium($red,$anio){

        $valor_buscado = $this->request->getGet('search')['value']; #VALOR DEL INPUT DE BUSCAR

        $columnas = [
            'id', 'nombre', 'submission_id', 'publication_id','clave_ponencia', 'nombre_congreso'
        ];

        //sin grado ni usuario

        $sql_count = "SELECT count(id) as total FROM ponencias";
        $sql_data = "SELECT * FROM ponencias";

        $condicion = "";

        if (!empty($valor_buscado)) {
            foreach ($columnas as $key => $val) {
                if ($columnas[$key] == 'id') {
                    #$condicion .= " WHERE ".$val." LIKE '%".$valor_buscado."%'";
                    $condicion .= ' WHERE (red = "' . $red . '" AND anio="'.$anio.'") AND ( ' . $val . " LIKE '%" . $valor_buscado . "%'";
                } else {
                    $condicion .= " OR " . $val . " LIKE '%" . $valor_buscado . "%'";
                }
            }
        }

        $sql_count = empty($condicion) ? $sql_count . ' WHERE red = "' . $red . '" AND anio = "'.$anio.'"' : $sql_count . $condicion . ')';

        $sql_data =  !empty($condicion) ? $sql_data . $condicion . ')' : $sql_data . ' WHERE red = "' . $red . '" AND anio = "'.$anio.'"';

        $total_count = $this->db_serv->query($sql_count)->getRow();

        /*
        $sql_count = $sql_count . $condicion;
        $sql_data = $sql_data . $condicion;

        $total_count = $this->db_serv->query($sql_count)->getRow();
        */

        $sql_data .= " ORDER BY " . $columnas[$this->request->getGet('order')[0]['column']] . " " . $this->request->getGet('order')[0]['dir'] . " LIMIT " . $this->request->getGet('start') . ", " . $this->request->getGet('length') . "";

        $data = $this->db_serv->query($sql_data)->getResult(); //es un objeto

        $array = json_decode(json_encode($data), true); //lo convertimos a un array

        foreach ($array as $key => $a) {

            $condiciones = ['ponencia' => $a['clave_ponencia']];
            $prom_2 = $this->MainModel->promedio('calificaciones','calificacion2',$condiciones); $prom_2 = round($prom_2['calificacion2'],2); //PROMEDIO DE LA CALIFICACION 2
            $prom_3 = $this->MainModel->promedio('calificaciones','calificacion3',$condiciones); $prom_3 = round($prom_3['calificacion3'],2); //PROMEDIO DE LA CALIFICACION 3
            $prom_4 = $this->MainModel->promedio('calificaciones','calificacion4',$condiciones); $prom_4 = round($prom_4['calificacion4'],2); //PROMEDIO DE LA CALIFICACION 4
            $c_cal = $this->MainModel->count('calificaciones',$condiciones);

            $prom_general = $prom_2+$prom_3+$prom_4;
            $prom_general = $prom_general / 3;
            $prom_general = round($prom_general,2);

            if($c_cal < 5){
                $multiplo = 0.10;
            }else if($c_cal < 10){
                $multiplo = 0.20;
            }else{
                $multiplo = 0.22;
            }


            $relevancia = $c_cal == 0 ? 0 : $prom_general*$multiplo;


            $array[$key] = [
                'submission_id' => $a['submission_id'],
                'nombre' => $a['nombre'],
                'publication_id' => $a['publication_id'],
                'promedio_general' => $prom_general,
                'prom_2' => $prom_2,
                'prom_3' => $prom_3,
                'prom_4' => $prom_4,
                'c_calificaciones' => $c_cal,
                'nombre_congreso' => $a['nombre_congreso'],
                'relevancia' => $relevancia
            ];

        }


        array_multisort(array_column($array, 'relevancia'), SORT_DESC, $array);

        $data = json_decode(json_encode($array), FALSE);

        $json_data = [
            'draw' => intval($this->request->getGet('draw')),
            'recordsTotal' => $total_count->total,
            'recordsFiltered' => $total_count->total,
            'data' => $data
        ];

        echo json_encode($json_data);
    }

    public function verPonencia($submission_id){
        $condiciones = ['submission_id' => $submission_id];
        $columnas = ['clave_ponencia','red','anio','nombre'];
        $clave_ponencia = $this->MainModel->getColumnsOneRow($columnas,'ponencias',$condiciones);

        if(empty($clave_ponencia)){
            return redirect()->back();
        }

        $condiciones = ['clavePonencia' => $clave_ponencia['clave_ponencia']];
        $comentarios = $this->MainModel->getAll('comentarios',$condiciones);

        if(empty($comentarios)){
            return redirect()->back();
        }

        foreach($comentarios as $key=>$c){

            $condiciones = ['usuario' => $c['usuario']];
            $columnas = ['profile_pic','nombre', 'ap_paterno', 'ap_materno'];
            $user_info = $this->MainModel->getColumnsOneRow($columnas,'usuarios',$condiciones);

            if(empty($user_info)){
                continue;
            }

            if($user_info['profile_pic'] == '' || $user_info['profile_pic'] === null || empty($user_info['profile_pic'])){
                $profile_pic = 'avatar.png';
            }else{
                $profile_pic = $user_info['profile_pic'];
            }

            $data['comentarios'][$key] = [
                'comentario' => $c['comentario'],
                'profile_pic' => $profile_pic,
                'nombre' => $user_info['nombre'].' '.$user_info['ap_paterno'].' '.$user_info['ap_materno']
            ];
        }

        $data['red'] = $clave_ponencia['red'];
        $data['anio'] = $clave_ponencia['anio'];
        $data['nombre'] = $clave_ponencia['nombre'];

        return view('Podium/comentarios',$data);

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
