<?php

namespace App\Controllers;

use App\Models\MainModel;
// use App\ThirdParty\FPDF;
use App\ThirdParty\FPDF\FPDF;
use App\Models\IquatroModel;

class MainController extends BaseController
{
    public $MainModel;
    
    public function __construct()
    {
        // parent::__construct();
        // $this->load->model('MainModel');
        $this->MainModel = new MainModel();
        date_default_timezone_set('America/Monterrey');
        $date = date('Y-m-d H:i:s');
         $db = db_connect('iquatro');
         $this->IquatroModel = new IquatroModel($db);
    }





    public function index()
    {
        return view('landing/index');
    }

    public function general(){        
        if (session('clave_gafete') !== null) {
            return redirect()->to(base_url('/datos_generales'));
        } else {
            return view('calificar/index');
        }
    }

    public function validarGafete()
    {
        $gafete = $this->request->getPost('clave');

        $condiciones = array("clave_gafete" => $gafete);
        $resultado = $this->MainModel->getAllOneRow('participantes_congresos', $condiciones);

        if (empty($resultado)) {
            return json_encode("NoExisteGafete");
        } else {
            return json_encode($resultado);
        }
    }


    public function verificarCodigo()
    {
        $codigo = $this->request->getPost('clave');

        $resultado = $this->MainModel->getAllOneRow(
            'participantes_congresos', 
            array("clave_gafete" => $codigo)
        );

        $correo = "";
        if($resultado['usuario'] !== ""){
            $condicion = ["usuario" => $resultado['usuario']];
            $correo_usuario = $this->MainModel->getAllOneRow('usuarios', $condicion);
            //Establecer correo si el usuario existe
            $correo = $correo_usuario['correo'];
        }

        if($resultado["oyente"] === 1) {
            $data = [
                "logueado" => "Si",
                "clave_gafete" => $resultado['clave_gafete'],
                "red" => $resultado['red'],
                "nombre" => $resultado["nombre"],
                //"nombre_ponencia" => $nombre_ponencia["nombre"],
                "congreso" => "Oyente ".$resultado["red"]." ".$resultado["anio"],
                "oyente" => $resultado["oyente"],
                "anio" => $resultado["anio"],
                "claveCuerpo" => $resultado["claveCuerpo"],
                "correo" => $correo
            ];
        }
        else{
            $nombre_ponencia = $this->MainModel->getAllOneRow(
                'ponencias', 
                array("publication_id" => $resultado["publication_id"], "red" => $resultado["red"])
            );
            //Establecer el nombre de ponencia siempre y cuando exista el nombre de ponencia
            if(!empty($nombre_ponencia)) {
                $data = [
                    "logueado" => "Si",
                    "clave_gafete" => $resultado['clave_gafete'],
                    "red" => $resultado['red'],
                    "nombre" => $resultado["nombre"],
                    "nombre_ponencia" => $nombre_ponencia["nombre"],
                    "congreso" => $nombre_ponencia["nombre_congreso"],
                    "oyente" => $resultado["oyente"],
                    "anio" => $resultado["anio"],
                    "claveCuerpo" => $resultado["claveCuerpo"],
                    "correo" => $correo
                ];
            }
            else {
                $data = [
                    "logueado" => "Si",
                    "clave_gafete" => $resultado['clave_gafete'],
                    "red" => $resultado['red'],
                    "nombre" => $resultado["nombre"],
                    "nombre_ponencia" => "Inexistente",
                    "congreso" => $resultado["red"]." ".$resultado["anio"],
                    "oyente" => $resultado["oyente"],
                    "anio" => $resultado["anio"],
                    "claveCuerpo" => $resultado["claveCuerpo"],
                    "correo" => $correo
                ];
            }
        }
        
        $session = session();
        $session->set($data);
        return redirect()->to(base_url('/datos_generales'));
    }

    public function logout(){
        $session = session();
        $session->destroy();

        return redirect()->to(base_url());
    }


    public function home()
    {
        if (session('clave_gafete') !== null) {
            return view('calificar/inicio');
        } else {
            return redirect()->to(base_url());
        }
    }



    public function imprimirPDF()
    {
        $red = session("red");
        $anio = session("anio");

        if (session('clave_gafete') !== null) {
            $clave = session('clave_gafete');
            $nombre = session('nombre');
            $pdf = new FPDF();
            
            if ($red == "Releem" &&  $anio == "2022") {
                $pdf->AddPage('P', array(800, 800), '0');
                $pdf->Image(base_url('public/img/gafetes/' . $red . '/' . $anio . '/' . 'Gafete RELEEM 22.jpg'), 0, -1, 800, 800);
                $pdf->SetTextColor(0, 0, 0);
                $pdf->Ln(350);
                $pdf->SetFont('Arial', 'B', 90);
                $pdf->Cell(1);
                $pdf->MultiCell(0, 9, utf8_decode($nombre), 0, 'C');
                $pdf->Ln(160);
                $pdf->SetFont('Arial', 'B', 90);
                $pdf->Cell(1);
                $pdf->MultiCell(0, 9, $clave, 0, 'C');
            }else if($red == "Relep" && $anio == "2022"){
                $pdf->AddPage('P', array(900, 1280), '0');
                $pdf->Image(base_url('public/img/gafetes/' . $red . '/' . $anio . '/' . 'Gafete RELEP 22.jpg'), 0, -1, 900, 1280);
                $pdf->SetTextColor(0, 0, 0);
                $pdf->Ln(390);
                $pdf->SetFont('Arial', 'B', 110);
                $pdf->Cell(1);
                $pdf->MultiCell(0, 9, utf8_decode($nombre), 0, 'C');
                $pdf->Ln(200);
                $pdf->SetFont('Arial', 'B', 90);
                $pdf->Cell(1);
                $pdf->MultiCell(0, 9, $clave, 0, 'C');
                
            }else if($red == "Relen" && $anio == "2022"){
                $pdf->AddPage('P', array(900, 1280), '0');
                $pdf->Image(base_url('public/img/gafetes/' . $red . '/' . $anio . '/' . 'Gafete.jpg'), 0, -1, 900, 1280);
                $pdf->SetTextColor(0, 0, 0);
                $pdf->Ln(390);
                $pdf->SetFont('Arial', 'B', 110);
                $pdf->Cell(1);
                $pdf->MultiCell(0, 9, utf8_decode($nombre), 0, 'C');
                $pdf->Ln(200);
                $pdf->SetFont('Arial', 'B', 90);
                $pdf->Cell(1);
                $pdf->MultiCell(0, 9, $clave, 0, 'C');
            }else if($red == "Relayn" && $anio == "2022"){
                $pdf->AddPage('P', array(118, 165), '0');
                $pdf->Image(base_url('public/img/gafetes/' . $red . '/' . $anio . '/' . 'Gafete.jpg'), 0, -1, 118, 165);
                $pdf->SetTextColor(0, 0, 0);
                $pdf->Ln(50);
                $pdf->SetFont('Arial', 'B', 14);
                $pdf->Cell(1);
                $pdf->MultiCell(0, 9, utf8_decode($nombre), 0, 'C');
                $pdf->Ln(25);
                $pdf->SetFont('Arial', 'B', 14);
                $pdf->Cell(1);
                $pdf->MultiCell(0, 9, $clave, 0, 'C');
            }
            $this->response->setHeader('Content-Type', 'application/pdf');
            $pdf->Output("gafete.pdf", 'I');
        } else {
            return redirect()->to(base_url());
        }
    }







    public function index_calificar()
    {
        return view('calificar_ponencia/index');
    }
    
    public function index_calificar_ponencia($ponencia){
        $array["ponencia"] = $ponencia;
        return view('calificar_ponencia/index',$array);
    }


    public function validadDatosCalificar()
    {
        $gafete = $this->request->getPost('clave_gafete');
        $ponencia = $this->request->getPost('codigo_ponencia');

        $MainModel = new MainModel();

        $condiciones_gafete = array("clave_gafete" => $gafete);
        $res_gafete = $MainModel->getAllOneRow('participantes_congresos', $condiciones_gafete);

        $condiciones_ponencia = array("clave_ponencia" => $ponencia);
        $res_ponencia = $MainModel->getAllOneRow('ponencias', $condiciones_ponencia);

        if ($res_gafete == NULL || $res_gafete == ""|| $res_ponencia == NULL || $res_ponencia = "") {
            echo json_encode('datosVacios'); // gafete o ponencia no se encuentra en la base de datos
        } else {
            
            
            $condicionCali = array("gafete" => $gafete);
            $calificaciones = $this->MainModel->getAllOneRow('calificaciones',$condicionCali);
            
            $verificarPonencia = array("gafete" => $gafete, "ponencia" => $ponencia);
            $verificar_ponencia = $this->MainModel->getAllOneRow('calificaciones',$verificarPonencia);
            
            // echo json_encode($calificaciones);
            if($res_gafete['usuario'] == ""){
                echo json_encode('CalificacionVacia');  
            }else if($calificaciones["ponencia"] == $ponencia || !empty($verificar_ponencia)){
                echo json_encode('ponencia_calificada');   
            }else{
                $usuario = $res_gafete['usuario'];
                $condicionCorreo = array("usuario" => $usuario);
                $res_correo = $MainModel->getAllOneRow('usuarios', $condicionCorreo);
                $correo = $res_correo['correo'];
                echo json_encode($correo); // existen registros 
            }

            /*$condicionCali = array("gafete" => $gafete);
            $res_calificaciones = $MainModel->getAllOneRow('calificaciones', $condicionCali);

            if (empty($res_calificaciones)) {

                echo json_encode('CalificacionVacia'); // no existen registros con el gafete
            } else if ($res_calificaciones["ponencia"] == $ponencia) {
                echo json_encode('ponencia_calificada'); // ya se califico la ponencia 

            } else {

                $usuario = $res_calificaciones["usuario"];
                $condicionCorreo = array("usuario" => $usuario);
                $res_correo = $MainModel->getAllOneRow('usuarios', $condicionCorreo);
                $correo = $res_correo['correo'];
                echo json_encode($correo); // existen registros 
            }*/
            
            
        }
    }

    public function validarCorreo()
    {
        $correo = $this->request->getPost('correo');
        $clave_gafete = $this->request->getPost('clave_gafete');

        $MainModel = new MainModel();
        $condicionCorreo = array("correo" => $correo);
        $res_correo = $MainModel->getAllOneRow('usuarios', $condicionCorreo);

        if (empty($res_correo)) {
            return json_encode("NoExisteCorreo");
        } else {
            //Se actualiza la tabla de participantes_congreso para poder guardarlo ahi
            $data = ['usuario' => $res_correo['usuario']];
            $condiciones = ['clave_gafete' => $clave_gafete];
            $this->MainModel->updateRow('participantes_congresos',$condiciones,$data);
            return json_encode('success');
        }
    }

    public function congreso($red)
    {
        //AQUI MOSTRAREMOS LA VISTA DEL CONGRESO CORRESPONDIENTE
        if (session('clave_gafete') !== null) {
            $data = ['asistencia_virtual' => 1, 'fecha' => date('Y-m-d H:i:s') ];
            $MainModel = new MainModel();
            $condiciones = ['clave_gafete' => session('clave_gafete'), 'anio' => session('anio'), 'claveCuerpo' => session('claveCuerpo')];
            $MainModel->updateRow('participantes_congresos',$condiciones,$data);
            
            //return redirect()->to(base_url("congreso/(any)"));
            return view($red . "/2022" . "/entrada-congreso-".strtolower($red));
            //return view($red . "/2022" . "/index");


        } else {
            return redirect()->to(base_url());
        }
    }

    public function sala_general()
    {
        //MOSTRAMOS LA SALA GENERAL DEL CONGRESO DE CADA RED
        if (session('clave_gafete') !== null) {
            //return view(session('red') . "/" . date("Y") . "/sala_general");
            return view(session('red') . "/" . "2022" . "/sala_general");
        } else {
            return redirect()->to(base_url());
        }
    }

    public function vive_chiapas()
    {
        if (session('clave_gafete') !== null) {
            return view(session('red') . "/" . "2022" . "/vive_chiapas");
        } else {
            return redirect()->to(base_url());
        }
    }





    public function calificacion()
    {

        $gafete = $this->request->getPost('clave_gafete');
        $ponencia = $this->request->getPost('codigo_ponencia');
        $correo = $this->request->getPost('correoOculto');

        $MainModel = new MainModel();

        $condiciones_participantes = array('clave_gafete' => $gafete);
        $res_participantes = $MainModel->getAllOneRow('participantes_congresos', $condiciones_participantes);

        $condiciones_ponencia = array("clave_ponencia" => $ponencia);
        $res_ponencia = $MainModel->getAllOneRow('ponencias', $condiciones_ponencia);

        $condiciones_usuario = array("correo" => $correo);
        $res_usuario = $MainModel->getAllOneRow('usuarios', $condiciones_usuario);

        $data = [
            'gafete' => $gafete,
            'ponencia' => $ponencia,
            'nombre_ponencia' => $res_ponencia["nombre"],
            'correo' => $correo,
            'usuario' => $res_usuario["usuario"],
            'red' => $res_participantes["red"],
            'claveCuerpo' => $res_participantes["claveCuerpo"],
            'nombre_congreso' => $res_ponencia["nombre_congreso"]
        ];

        $session = session();
        $session->set($data);

        return view('calificar_ponencia/calificar');
    }


    public function ordenamiento()
    {
        $optradio1 = $this->request->getPost('optradio1');
        $optradio2 = $this->request->getPost('optradio2');
        $optradio3 = $this->request->getPost('optradio3');
        $optradio4 = $this->request->getPost('optradio4');

        //========= seleccionamos todas las ponencias calificadas del usuario 
        $condiciones = array('gafete' => session('gafete'));
        $MainModel = new MainModel();
        $ordenar_ponenciaCA = "'posicion','ASC'";
        $ponenciasCA = $MainModel->getAllOneRowOrderLimit('calificaciones', $condiciones, $ordenar_ponenciaCA, 10);

        $data = [
            'calificacion1' => $optradio1,
            'calificacion2' => $optradio2,
            'calificacion3' => $optradio3,
            'calificacion4' => $optradio4

        ];

        $session = session();
        $session->set($data);

        if (empty($ponenciasCA)) {
            $arrayPonencias = [];
            $i = 0;
            foreach($ponenciasCA as $p){
                $condicionesPonencias = array('clave_ponencia' => $ponenciasCA[$i]['ponencia']);
                $res_ponencias = $MainModel->getAllOneRow('ponencias', $condicionesPonencias);

                array_push($arrayPonencias, $res_ponencias);

                $i++;
            }
            
            $data = [
                'res' => $arrayPonencias,
            ];

            return view('calificar_ponencia/ordenamiento', $data);
            /*
            $data = [
                'usuario' => session('usuario'),
                'gafete' => session('gafete'),
                'posicion' => 1,
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

            $MainModel = new MainModel();
            $resPosicion = $MainModel->insertarRegistro('calificaciones', $data);as

            return redirect()->to(base_url('agregar-registro'));
            */
        } else {
            
            $arrayPonencias = [];
            $i = 0;
            foreach($ponenciasCA as $p){
                $condicionesPonencias = array('clave_ponencia' => $ponenciasCA[$i]['ponencia']);
                $res_ponencias = $MainModel->getAllOneRow('ponencias', $condicionesPonencias);

                array_push($arrayPonencias, $res_ponencias);

                $i++;
            }
            
            $data = [
                'res' => $arrayPonencias,
            ];

            return view('calificar_ponencia/ordenamiento', $data);
  
        }
    }

    public function posicionCalificacion()
    {   
        
        // echo '<pre>';
        // echo print_r($_POST);
        // echo '</pre>';
                            
        $arrayPonencia = [];
        $i = 1;
        foreach ($_POST['posiciones'] as $r) {
            $MainModel = new MainModel();
            $condiciones_ponencia = ['nombre' => $r];
            $res_ponencias = $MainModel->getAllOneRow('ponencias', $condiciones_ponencia); // TOMAMOS TODA LA INFORMACION DE LA PONENCIA
            // array_push($arrayPonencia, $res_ponencias["clave_ponencia"]);
            $condiciones = ['ponencia' => $res_ponencias["clave_ponencia"], 'gafete' =>session('gafete')];
            $res_calificacion = $MainModel->getAllOneRow('calificaciones', $condiciones);
            echo '<pre>';
            echo print_r($res_calificacion);
            echo '</pre>';
            
            if (empty($res_calificacion)) {
                echo 'entro';

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

                $res = $MainModel->insertarRegistro('calificaciones', $condiciones_calificaciones); // eSTO SE DESCOMENTA
                
                //SE TIENE QUE HACER UN COUNT PARA SABER CUANTOS REGISTROS HAY DE ESA CLAVE DE GAFETE PARA ASIGNARLES LA CONSTANCIA DE ASISTENTE
                $condiciones = ['gafete' => session('gafete')];
                $count = $MainModel->countRow('calificaciones', $condiciones);
                switch (session('red')) {
                    case 'Releem':
                        
                        if($count == 5){
                            //echo $count;
                            // $condiciones = ['usuario' => session('usuario'), 'tipo_constancia' => 'Asistente', 'anio' => date('Y')];
                            //Añadimos la constancia
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
                            $constancia = $this->MainModel->insertarRegistro('constancia_Releem', $data); //DESCOMENTAR ESTO
                            
                            $last_row = $this->MainModel->lastRow('constancia_Releem');
                            
                            //ACTUALIZAMOS LA FILA CON EL ID DE FOLIO
                            $condiciones = ["id" => $last_row["id"]];
                            $data = [
                                "folio" => $last_row["id"]
                                ];
                                
                            $actulizar_fila = $this->MainModel->updateRow('constancia_Releem',$condiciones,$data); //DESCOMENTAR ESTO
                            
                        }
                        break;

                    default:
                        # code...
                        break;
                }
            } else {
                $condiciones_update = ['ponencia' => $res_calificacion["ponencia"]];
                $data = ['posicion' => $i];
                $actualizar_posicion = $MainModel->updateRow('calificaciones', $condiciones_update, $data); //DESCOMENTAR ESTO
            }

            $i++;
        }
        
        

        $condiciones_comentarios = [
            'claveGafete' => session('gafete'),
            'usuario' => session('usuario'),
            'clavePonencia' => session('ponencia'),
            'comentario' => $_POST["comentario"]
        ];
        
        
        $insertComentario = $MainModel->insertarRegistro('comentarios', $condiciones_comentarios); //DESCOMENTAR ESTO
        
        return redirect()->to(base_url('agregar-registro'));  //DESCOMENTAR ESTO
    }


    public function agregar_registro()
    {
        $data = ["gafete" => session('gafete')];
        $total_calificaciones = $this->MainModel->countRow('calificaciones', $data);
        
        
        
        $session = session();
        $session->destroy();

        return view('calificar_ponencia/1registro');
    }

    public function lista_participantes()
    {

        return view('calificar/lista');
    }

    public function buscar_participante()
    {
        $nombre = $_POST["nombre"];
        $condicion = [];
        // $nombre = "";
        $MainModel = new MainModel();
        $participantes = $MainModel->getAllLike('participantes_congresos', 'nombre', $nombre,$condicion);
        
        $html = '';
        
        if(empty($participantes)){
            
        }else{
            foreach ($participantes as $p) {
                
                if($p['publication_id'] == 0 || $p['publication_id'] == '' || $p['publication_id'] == null){
                    $submission_id = 'No adjuntado';
                    $clave_ponencia = 'No adjuntado';
                }else{
                    $condiciones = ['publication_id' => $p['publication_id']];
                
                    $columnas = [];
                    
                    array_push($columnas,'submission_id');
                    
                    $submission_id = $this->IquatroModel->getColumnsOneRow($columnas,'publications',$condiciones);
                    
                    $submission_id = $submission_id['submission_id'];
                    
                    $condiciones = ['publication_id' => $p['publication_id']];
                    
                    $clave_ponencia = $MainModel->getAllOneRow('ponencias',$condiciones);
                    
                    $clave_ponencia = $clave_ponencia['clave_ponencia'];
                }
                
                

                if ($p["asistencia_presencial"] == '0') {
                    $btn = '<button class="btn btn-danger btn-sm" onclick="asistencia(' . $p["id"] . ')" ><i class="fas fa-times-circle"></i></button>';
                } else {
                    $btn = '<button class="btn btn-success btn-sm" onClick="eliminar_asistencia(' . $p["id"] . ')"><i class="fas fa-check-circle"></i></button>';
                }
                
                if($p['kit'] == 0){
                    $btnKit = '<button class="btn btn-danger btn-sm" onclick="kit(' . $p["id"] . ')" ><i class="fas fa-box"></i></button>';
                }else{
                    $btnKit = '<button class="btn btn-success btn-sm" onclick="eliminar_kit(' . $p["id"] . ')" ><i class="fas fa-box-open"></i></button>';
                }
                
                if($p['kit_virtual'] == 0){
                    $btnKitVirtual = '<button class="btn btn-danger btn-sm" onclick="kit_virtual(' . $p["id"] . ')" ><i class="fas fa-box"></i></button>';
                }else{
                    $btnKitVirtual = '<button class="btn btn-success btn-sm" onclick="eliminar_kit_virtual(' . $p["id"] . ')" ><i class="fas fa-box-open"></i></button>';
                }
                
                if ($p["asistencia_virtual"] == 0) {
                    $btnVirtual = '<button disabled class="btn btn-danger btn-sm" onclick="asistencia_virtual(' . $p["id"] . ')" ><i class="fas fa-user-slash"></i></button>';
                } else {
                    $btnVirtual = '<button disabled class="btn btn-success btn-sm" onClick="eliminar_asistencia_virtual(' . $p["id"] . ')"><i class="fas fa-user"></i></button>';
                }
                
                $html .= '<tr>
                <td>' . $p["id"] . '</td>
                <td>' . $p["nombre"] . '</td>
                <td>' . $p["red"] . '</td>
                <td>' . $p["anio"] . '</td>
                <td>' . $p["clave_gafete"] . '</td>
                <td>' . $clave_ponencia . '</td>
                <td>' . $submission_id . '</td>
                <td>' . $p['tipo_asistencia'] . '</td>
                <td>' . $btn . '</td>
                <td>' . $btnKit . '</td>
                <td>' . $btnVirtual . '</td>
                <td>' . $btnKitVirtual . '</td>
                </tr>';
            }
        }

        return json_encode($html);
    }

    
    public function vista_general(){
        return view("congreso/vista_general");
    }
    
    public function lista_calificaciones($red,$anio){

        $array = [
                "red" => $red,
                "anio" => $anio ];

        return view('calificar_ponencia/lista_ponencias_calificadas/lista_ponencias',$array);
        
    }
    
    public function actualizar_lista_ponencias(){
        $data = [];
        
        //OBTENGO LAS CALIFICACIONES DE LA RED Y SU A���O DE LA TBLA DE CALIFICACIONES
        
        $condiciones = [
                "red" => $_POST["red"],
                "anio" => $_POST["anio"]];
        
        
        $calificaciones = $this->MainModel->getAll("calificaciones",$condiciones);
        $a_promedios = [];
        foreach($calificaciones as $c){
            $condiciones = ['clave_ponencia' => $c['ponencia']];
            $red_coincide = $this->MainModel->getAllOneRow('ponencias',$condiciones);
            if($red_coincide['red'] == $_POST['red']){
                //Tomo el usuario del registro actual
                $usuario = $c['usuario'];
                //Tomo la cantidad de ponencias que califico en total
                $condiciones = ['usuario' => $usuario, 'red' => $c['red'], 'anio' => $c['anio']];
                $c_ponencias_usuario = $this->MainModel->selectCount('calificaciones',$condiciones); //8
                $c_ponencias_usuario = $c_ponencias_usuario['cantidad'];
                //Tomamos el promedio de orden de la ponencia/ponencias evaluadas
                $promedio_usuario = $c['posicion'] / $c_ponencias_usuario;
                //redondeamos el valor a 2 digitos
                $promedio_usuario = round($promedio_usuario, 2);
                //Ahora debemos separar cada promedio a su ponencia y agregarlas al array correspondiente a su ponencia
                $ponencia = strtoupper($c['ponencia']);
                $ponencia = trim($ponencia);
                if(isset($a_promedios[$ponencia])){
                    array_push($a_promedios[$ponencia], $promedio_usuario);
                }else{
                    $a_promedios[$ponencia] = [];
                    array_push($a_promedios[$ponencia], $promedio_usuario);
                }
            }
        }
        
        $a_final = [];
        $e = 0;
        $html = '';
        foreach($a_promedios as $a){
            $suma = 0;
            //sumamos todos los promedios de orden/ponencias evaluadas de cada ponencia
            foreach ($a as $i) {
                $suma += $i;
            }
            //tomamos la cantidad de promedios que existierin para la ponencia
            $count = count($a);
            //la suma es de todos los promedios en base a orden/cantidad de ponencias y lo divide de nuevo por la cantidad de registros existentes
            $promedio = $suma / $count;
            $key = array_keys($a_promedios);
            $key = $key[$e];
            if(!isset($a_final[$key])){
                //redondeamos el promedio a 2 digitos
                    $promedio = round($promedio, 2);
                    //establecemos variables
                    $condicion = ['clave_ponencia' => $key];
                    $datos_ponencia = $this->MainModel->getAllOneRow('ponencias',$condicion);
                    $a_final[$e]['promedio'] = $promedio;
                    $a_final[$e]['nombre_ponencia'] = $datos_ponencia['nombre'];
                    $a_final[$e]['ponencia'] = $key;
                    $a_final[$e]['publication_id'] = $datos_ponencia['publication_id'];
            }
            $e++;
        }

        usort($a_final, array($this,'sort_by_promedio'));
        $e = 1;
        foreach($a_final as $f){
            //TOMAREMOS EL SUBMISSION_ID DEL PUBLICATION_ID
            $condiciones = ['publication_id' => $f['publication_id']];
            $columnas = [];
            array_push($columnas,'submission_id');
            $submission_id = $this->IquatroModel->getColumnsOneRow($columnas,'publications',$condiciones);
            $submission_id = $submission_id['submission_id'];
            $html .= '<tr>
            <th>' . $e . '</th>
            <td>' . $f['ponencia'] . '</td>
            <td>' . $f['nombre_ponencia']. '</td>
            <td>'. $f['promedio'] .'</td>
            <td align="center"><a target="_blank" href="'.base_url()."/comentarios/".$f['ponencia'].'" class="btn btn-primary"><i class="fas fa-comment"></i></a></td>
            <td align="center"><a target="_blank" href="https://iquatroeditores.com/revista/index.php/iquatro/workflow/index/'.$submission_id.'/1" class="btn btn-primary"><i class="fas fa-book"></i></a></td>
            </tr>';
            $e++;
        }
        
        
        /*
        echo '<pre>';
        print_r($a_final);
        echo '</pre>';
        */
        
        $a_final["lista"] = $html;
        return json_encode($a_final);














/*

        //OBTENGO LOS DATOS DE LA TABLA DE CALIFICACIONES CON UNA CONSULTA ESPECIAL
        $calificaciones = $this->MainModel->promedio_calificaciones($condiciones);
        
        //CREO UN ARRAY CON LOS DATOS DE LAS CALIFICACIONES Y LAS PONENCIAS
        $i= 1;
        $html = '';
        foreach($calificaciones as $c){
            $condicion = ['clave_ponencia' =>$c["ponencia"]];
            $datos_ponencia = $this->MainModel->getAllOneRow("ponencias",$condicion);
            
            $array["calificaciones"][$i]["promedio"] = $c["promedio"];
            $array["calificaciones"][$i]["ponencia"] = $c["ponencia"];
            $array["calificaciones"][$i]["nombre_ponencia"] = $datos_ponencia["nombre"];
            
            $html .= '<tr><th>' . $i . '</th><td>' . $c["ponencia"] . '</td><td>' . $datos_ponencia["nombre"]. '</td><td>'. $c["promedio"] .'</td><td align="center"><a href="'.base_url()."/comentarios/".$c["ponencia"].'" class="btn btn-primary"><i class="fas fa-comment"></i></a></td></tr>';

             
           $i++; 
        }
        
        $array["lista"] = $html;
        return json_encode($array);*/
    }
    
    private function sort_by_promedio ($a, $b) {
        //Aqui lo que hace es que del array toma la posicion 0 y la 1 y hacemos una comparacion de manera manual
        //asi consecutivamente. Ej: 0 y 1, 1 y 2, 2 y 3 etc
        if ($a == $b) {
            return 0;
        }
        return ($a < $b) ? -1 : 1; //Usar los signos >< para modificar el orden
        //return $a['promedio'] - $b['promedio'];
    }
    
    public function actualizacion_ponencias()
    {
        $data = [];
        //TRAEMOS LOS DATOS MEIANTE EL POST
        $fecha = $_POST["fecha"];
        
        $condiciones= [
            'red' => $_POST["red"],
            'anio' => $_POST["anio"]];
        
        // SI LA VARIABLE FECHA ESTA VACIA ES LA PRIMERA VES QUE CARGA LA PAGINA Y DEVUELVE LA ULTIMA FECHA DEL REGISTRO
        if($fecha == ""){
            $resultado = $this->MainModel->lastUpdateGeneral("calificaciones", "fecha",$condiciones);
            $data["resultado"] = "actualizarFecha";
            $data["ultima_fecha"] = $resultado[0]["fecha"]; 
            
            return json_encode($data);
        }else{ //SI LA VARIABLE DE FECHA ES DIFERENTE A VACIA VERIFICARA SI HAY DATOS CON UNA FECHA MAYOR QUE LA RECIVIDA
            
            $resultado = $this->MainModel->fechaMayorQueGeneral("calificaciones",$fecha,$condiciones);
            
            if (empty($resultado)) { // SI EL ESULTADO ES IGUAL A VACIO QUIERE DECIR QUE NO HAY ACTUALIZACIONES
                $data["resultado"] = "No_existe_actualizacion";
            } else { // SI EL RESULTADO NO ESTA VACIO RETORNAREMOS LA ULTIMA FECHA DE LAS CALIFICACIONES AGREGADAS
                $data["resultado"] = "actualizacion";
                $data["ultima_fecha"] = $resultado[0]["fecha"];
            }
            
            return json_encode($data);
        }

    }
    
    public function comentarios_ponencias($ponencia){
        
        $condicion = [
            'clavePonencia' => $ponencia
            ];
            
        $comentarios = $this->MainModel->getAllTable("comentarios",$condicion);
        
        if(empty($comentarios)){
            
            return redirect()->to(base_url());
            
        }else{
            
            $condicion = [
            'clave_ponencia' => $ponencia];
            
            $ponencia = $this->MainModel->getAllOneRow('ponencias',$condicion);
            
            $array["red"] = $ponencia["red"];
            $array["comentarios"] = $comentarios;
            
            return view('calificar_ponencia/lista_ponencias_calificadas/comentarios',$array);
        }
    }
    
    
    // ============================== funciones para la nueva ruta de listado de participantes ==============================
    public function lista_asistencia(){
        return view('lista_asistencia/index');
    }
    
    public function getParticipantes(){
        
        $participantes = $this->MainModel->getAllTable("participantes_congresos","ninguna");
        // echo '<pre>';
        // print_r($participantes);
        // echo '</pre>';
        
        $array = [];
        foreach($participantes as $p){
            
            /*====================*/
            $condicion = ["claveCuerpo"=>$p["claveCuerpo"]];
            
            $nombre_ponencia = $this->MainModel->getAllOneRow("ponencias",$condicion);
            
            /*======================*/
            
            if($p['publication_id'] == 0 || $p['publication_id'] == '' || $p['publication_id'] == null){
                    $submission_id = 'No adjuntado';
                }else{
                    $condiciones = ['publication_id' => $p['publication_id']];
                
                    $columnas = [];
                    
                    array_push($columnas,'submission_id');
                    
                    $submission_id = $this->IquatroModel->getColumnsOneRow($columnas,'publications',$condiciones);
                    
                    $submission_id = $submission_id['submission_id']; 
                }
                
                if ($p["asistencia_presencial"] == '0') { //BOTON DE ASISTENCIA PRESENCIAL
                    $asistencia_presencial = '<button class="btn btn-danger btn-sm" onclick="asistencia(' . $p["id"] . ')" ><i class="fas fa-times-circle"></i></button>';
                } else {
                    $asistencia_presencial = '<button class="btn btn-success btn-sm" onClick="eliminar_asistencia(' . $p["id"] . ')"><i class="fas fa-check-circle"></i></button>';
                }
                
                
                if($p['kit'] == 0){
                    $btnKit = '<button class="btn btn-danger btn-sm" onclick="kit(' . $p["id"] . ')" ><i class="fas fa-box"></i></button>';
                }else{
                    $btnKit = '<button class="btn btn-success btn-sm" onclick="eliminar_kit(' . $p["id"] . ')" ><i class="fas fa-box-open"></i></button>';
                }
                
                
                if ($p["asistencia_virtual"] == 0) {
                    $btnVirtual = '<button disabled class="btn btn-danger btn-sm" onclick="asistencia_virtual(' . $p["id"] . ')" ><i class="fas fa-user-slash"></i></button>';
                } else {
                    $btnVirtual = '<button disabled class="btn btn-success btn-sm" onClick="eliminar_asistencia_virtual(' . $p["id"] . ')"><i class="fas fa-user"></i></button>';
                }
                
                
                if($p['kit_virtual'] == 0){
                    $btnKitVirtual = '<button class="btn btn-danger btn-sm" onclick="kit_virtual(' . $p["id"] . ')" ><i class="fas fa-box"></i></button>';
                }else{
                    $btnKitVirtual = '<button class="btn btn-success btn-sm" onclick="eliminar_kit_virtual(' . $p["id"] . ')" ><i class="fas fa-box-open"></i></button>';
                }
                $condiciones = ['id_iquatro' => $submission_id];
                $password_ponencia = $this->MainModel->getAllOneRow('password_ponencias',$condiciones);
                
            array_push($array, array(
                "id"=>$p["id"],
                "nombre"=>$p["nombre"],
                "red"=>$p["red"],
                "anio"=>$p["anio"],
                "claveCuerpo"=>$p["claveCuerpo"],
                "clave_gafete"=>$p["clave_gafete"],
                "codigo_ponencia"=>$submission_id,
                "password_ponencia" => $password_ponencia['password'],
                "clave_ponencia" => $nombre_ponencia["clave_ponencia"],
                "tipo_asistencia"=>$p["tipo_asistencia"],
                "Asistencia_presencial"=>$asistencia_presencial,
                "Kit_presencial"=>$btnKit,
                "Asistencia_virtual"=>$btnVirtual,
                "Kit_virtual"=>$btnKitVirtual
            ));
        }
        echo json_encode($array);
    }
    
    
    public function asistencia()
    {
        $id = $_POST["id"];
        #$id = 135;
        $date = date('Y-m-d H:i:s');
        $MainModel = new MainModel();
        $data = [
            'asistencia_presencial' => '1',
            'fecha' => $date
        ];
        $condiciones = ["id" => $id];
        $actualizar = $MainModel->updateRow('participantes_congresos', $condiciones, $data);
        
        $info_participante = $this->MainModel->getAllOneRow('participantes_congresos',$condiciones);
        
        $condiciones = ["CONCAT(nombre,' ',ap_paterno,' ',ap_materno)" => $info_participante['nombre']];
        $usuario = $this->MainModel->getAllOneRowLike('usuarios',$condiciones);
        if($usuario != null){
            $usuario = $usuario['usuario'];
            $red = $info_participante['red'];
            $anio = $info_participante['anio'];
            #VAMOS A VERIFICAR SI YA SE TIENE LA CONSTANCIA DE ASISTENCIA
            $condiciones = ['usuario' => $usuario, 'red' => $red, 'anio' => $anio, 'tipo_constancia' => 'Asistencia'];
            $existe = $this->MainModel->countRow('constancia_'.$red,$condiciones);
            
            if($existe == 0 ){
                #no exste, hacemos la constancia
                /*
                $data = [
                    'usuario' => $usuario,
                    'nombre' => $info_participante['nombre'],
                    'tipo_constancia' => 'Asistencia',
                    'redCueAca' => $info_participante['claveCuerpo'],
                    'red' => $red,
                    'anio' => $anio,
                    'fecha_registro' => date('Y-m-d H:i:s')
                    ];
                $folio = $this->MainModel->generalInsertLastID('constancia_'.$red,$data);
                $data = ['folio' => $folio];
                $condiciones = ['id' => $folio];
                
                $this->MainModel->updateRow('constancia_'.$red,$condiciones,$data);
                */
            }
        }else{
            #No se encontro el usuario por su nombre, vamos a registrarlo y el usuario queda pendiente de buscarlo
            $red = $info_participante['red'];
            $anio = $info_participante['anio'];
            #VAMOS A VERIFICAR SI YA SE TIENE LA CONSTANCIA DE ASISTENCIA
            $condiciones = ['red' => $red, 'anio' => $anio, 'tipo_constancia' => 'Asistencia', 'nombre' => $info_participante['nombre']];
            $existe = $this->MainModel->countRow('constancia_'.$red,$condiciones);
            
            if($existe == 0 ){
                #no exste, hacemos la constancia
                /*
                $data = [
                    'usuario' => 'Usuario pendiente',
                    'nombre' => $info_participante['nombre'],
                    'tipo_constancia' => 'Asistencia',
                    'redCueAca' => $info_participante['claveCuerpo'],
                    'red' => $red,
                    'anio' => $anio,
                    'fecha_registro' => date('Y-m-d H:i:s')
                    ];
                $folio = $this->MainModel->generalInsertLastID('constancia_'.$red,$data);
                
                $data = ['folio' => $folio];
                $condiciones = ['id' => $folio];
                
                $this->MainModel->updateRow('constancia_'.$red,$condiciones,$data);
                */
            }
        }
        return json_encode('exito');
    }
    
    
    public function eliminar_asistencia()
    {
        $id = $_POST["id"];
        $date = date('Y-m-d H:i:s');
        $MainModel = new MainModel();
        $data = [
            'asistencia_presencial' => '0',
            'fecha' => $date
        ];
        $condiciones = ["id" => $id];
        $actualizar = $MainModel->updateRow('participantes_congresos', $condiciones, $data); 
        
        $info_participante = $this->MainModel->getAllOneRow('participantes_congresos',$condiciones);
        
        $condiciones = ["CONCAT(nombre,' ',ap_paterno,' ',ap_materno)" => $info_participante['nombre']];
        $usuario = $this->MainModel->getAllOneRowLike('usuarios',$condiciones);
        if($usuario != null){
            $usuario = $usuario['usuario'];
            $red = $info_participante['red'];
            $anio = $info_participante['anio'];
            #VAMOS A VERIFICAR SI YA SE TIENE LA CONSTANCIA DE ASISTENCIA
            $condiciones = ['usuario' => $usuario, 'red' => $red, 'anio' => $anio, 'tipo_constancia' => 'Asistencia'];
            $existe = $this->MainModel->countRow('constancia_'.$red,$condiciones);
            
            if($existe != 0 ){
                #existe, se la borramos
                /*
                
                $constancia = $this->MainModel->getAllOneRow('constancia_'.$red,$condiciones);
                
                $condiciones = ['id' => $constancia['id']];
                
                $this->MainModel->simpleDelete('constancia_'.$red,$condiciones);
                
                */
            }
        }else{
            #No se encontro el usuario por su nombre, vamos a registrarlo y el usuario queda pendiente de buscarlo
            $red = $info_participante['red'];
            $anio = $info_participante['anio'];
            #VAMOS A VERIFICAR SI YA SE TIENE LA CONSTANCIA DE ASISTENCIA
            $condiciones = ['red' => $red, 'anio' => $anio, 'tipo_constancia' => 'Asistencia', 'nombre' => $info_participante['nombre']];
            $existe = $this->MainModel->countRow('constancia_'.$red,$condiciones);
            
            if($existe != 0 ){
                #existe, la eliminamos
                /*
                $constancia = $this->MainModel->getAllOneRow('constancia_'.$red,$condiciones);
                
                $condiciones = ['id' => $constancia['id']];
                
                $this->MainModel->simpleDelete('constancia_'.$red,$condiciones);
                */
            }
        }
        
        
        
        
        
        
        
        
        

        return json_encode('exito');
    }
    
    
    public function kit()
    {
        $id = $_POST["id"];
        $date = date('Y-m-d H:i:s');
        $MainModel = new MainModel();
        $data = [
            'kit' => '1',
            'fecha' => $date
        ];
        $condiciones = ["id" => $id];
        $actualizar = $MainModel->updateRow('participantes_congresos', $condiciones, $data);

        return json_encode('exito');
    }
    
    
    public function eliminar_kit()
    {
        $id = $_POST["id"];
        $date = date('Y-m-d H:i:s');
        $MainModel = new MainModel();
        $data = [
            'kit' => '0',
            'fecha' => $date
        ];
        $condiciones = ["id" => $id];
        $actualizar = $MainModel->updateRow('participantes_congresos', $condiciones, $data);

        return json_encode('exito');
    }
    
    
    public function kit_virtual()
    {
        $id = $_POST["id"];
        $date = date('Y-m-d H:i:s');
        $MainModel = new MainModel();
        $data = [
            'kit_virtual' => '1',
            'fecha' => $date
        ];
        $condiciones = ["id" => $id];
        $actualizar = $MainModel->updateRow('participantes_congresos', $condiciones, $data);

        return json_encode('exito');
    }
    
    public function eliminar_kit_virtual()
    {
        $id = $_POST["id"];
        $date = date('Y-m-d H:i:s');
        $MainModel = new MainModel();
        $data = [
            'kit_virtual' => '0',
            'fecha' => $date
        ];
        $condiciones = ["id" => $id];
        $actualizar = $MainModel->updateRow('participantes_congresos', $condiciones, $data);

        return json_encode('exito');
    }
    
    
    public function actualizarDatos()
    {
        $data = [];
        //$fecha = $_POST["fecha"];
        $fecha = date("Y-m-d H:i:s", time());
        #$fecha = "";
        $MainModel = new MainModel();

        if ($fecha == "") { // tomamos la fecha de la ultima actulizacion de la tabla participantes del congreso
            $resultado = $MainModel->getLastUpdate("participantes_congresos", "fecha");
            $data["resultado"] = "actualizarFecha";
            $data["ultima_fecha"] = $resultado[0]["fecha"];
        } else {
            $resultado = $MainModel->obtenerFechaMayorQue($fecha);

            if (empty($resultado)) {
                $data["resultado"] = "No_existe_actualizacion";
            } else {
                $data["resultado"] = "existe_actualizacion";
                $data["ultima_fecha"] = $resultado[0]["fecha"];
            }
        }
        
        // echo '<pre>';
        // echo print_r($data);
        // echo '</pre>';
        return json_encode($data);
    }
    
    public function asistenciaCongreso(){
        
    }
    
}
