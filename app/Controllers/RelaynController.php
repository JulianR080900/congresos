<?php

namespace App\Controllers;

use App\Models\MainModel;
use App\ThirdParty\FPDF\FPDF;

class RelaynController extends BaseController
{
    public $RelaynModel;
    
    public function __construct()
    {

        $this->RelaynModel = new MainModel();
        date_default_timezone_set('America/Monterrey');
        $date = date('Y-m-d H:i:s');
    }

    public function inicio(){
        if(session('clave_gafete') == "" && session('red') !== "Relayn"){
            return redirect()->to(base_url("general"));
        }else{
            return view('Relayn/'.session('anio')."/entrada");
        }
    }

    public function recepcion(){
        if(session('clave_gafete') == "" && session('red') !== "Relayn"){
            return redirect()->to(base_url("general"));
        }else{
            return view('Relayn/'.session('anio')."/recepcion");
        }
    }

    public function zona_iquatro(){
        if(session('clave_gafete') == "" && session('red') !== "Relayn"){
            return redirect()->to(base_url("general"));
        }else{
            return view('Relayn/'.session('anio')."/zona_iquatro");
        }
    }

    public function mezzanine(){
        if(session('clave_gafete') == "" && session('red') !== "Relayn"){
            return redirect()->to(base_url("general"));
        }else{
            return view('Relayn/'.session('anio')."/mezzanine");
        }
    }

    public function lago(){
        if(session('clave_gafete') == "" && session('red') !== "Relayn"){
            return redirect()->to(base_url("general"));
        }else{
            return view('Relayn/'.session('anio')."/lago");
        }
    }

    public function cabina_fotografica(){
        if(session('clave_gafete') == "" && session('red') !== "Relayn"){
            return redirect()->to(base_url("general"));
        }else{
            return view('Relayn/'.session('anio')."/cabina_fotografica");
        }
    }

    public function elevador(){
        if(session('clave_gafete') == "" && session('red') !== "Relayn"){
            return redirect()->to(base_url("general"));
        }else{
            return view('Relayn/'.session('anio')."/elevador");
        }
    }

    public function animacion($piso){
        if(session('clave_gafete') == "" && session('red') !== "Relayn"){
            return redirect()->to(base_url("general"));
        }else{
            return view('Relayn/'.session('anio')."/animaciones/".$piso);
        }
    }

    public function salones(){
        if(session('clave_gafete') == "" && session('red') !== "Relayn"){
            return redirect()->to(base_url("general"));
        }else{
            return view('Relayn/'.session('anio')."/salones");
        }
    }

    public function auditorio(){
        if(session('clave_gafete') == "" && session('red') !== "Relayn"){
            return redirect()->to(base_url("general"));
        }else{
            return view('Relayn/'.session('anio')."/auditorio");
        }
    }
    
    public function recepcion_congreso(){
        if(session('clave_gafete') == "" && session('red') !== "Relayn"){
            return redirect()->to(base_url("general"));
        }else{
            return view('Relayn/'."2022"."/recepcion-congreso-relayn");
        }
    }
    
    public function zona_iquatro_editores(){
        if(session('clave_gafete') == "" && session('red') !== "Relayn"){
            return redirect()->to(base_url("general"));
        }else{
            return view('Relayn/2022/zona-iquatro-editores');
        }
    }
    
    public function auditorio_congreso(){
        if(session('clave_gafete') == "" && session('red') !== "Relayn"){
            return redirect()->to(base_url("general"));
        }else{
            return view('Relayn/2022/auditorio-congreso-relayn');
        }
    }


    public function salon($n){

        if(session('clave_gafete') == "" && session('red') !== "Relayn"){
            return redirect()->to(base_url("general"));
        }

        #Anio #Red
        /*
        $red = session('red');
        $anio = session('anio');
        */

        $red = session('red');
        $anio = 2022;

        $ruta = dirname(__DIR__)."\\Views\\".$red.'\\'.$anio.'\\salon_'.$n.'_'.strtolower($red).'.php';
        #view/Relayn/2023/salon_2

        #file_exist

        if(!file_exists($ruta)){
            #la ruta no existe mandamos un 404 y terminamos el codigo
            http_response_code(404);
            exit;
        }

        return view($red.'/'.$anio.'/salon_'.$n.'_'.strtolower($red));

        #VERIFICAR SI EL ARCHIVO EXISTE
        print_r(session('anio'));
        exit;
    }

    
    public function salon_1_relayn(){
        if(session('clave_gafete') == "" && session('red') !== "Relayn"){
            return redirect()->to(base_url("general"));
        }else{
            return view('Relayn/2022/salon_1_relayn');
            $id=$request->uri->getSegment(3);
        }
    }
    
    public function salon_2_relayn(){
        if(session('clave_gafete') == "" && session('red') !== "Relayn"){
            return redirect()->to(base_url("general"));
        }else{
            return view('Relayn/2022/salon_2_relayn');
        }
    }
    
    public function salon_3_relayn(){
        if(session('clave_gafete') == "" && session('red') !== "Relayn"){
            return redirect()->to(base_url("general"));
        }else{
            return view('Relayn/2022/salon_3_relayn');
        }
    }
    
    public function salon_4_relayn(){
        if(session('clave_gafete') == "" && session('red') !== "Relayn"){
            return redirect()->to(base_url("general"));
        }else{
            return view('Relayn/2022/salon_4_relayn');
        }
    }
    
    public function salon_5_relayn(){
        if(session('clave_gafete') == "" && session('red') !== "Relayn"){
            return redirect()->to(base_url("general"));
        }else{
            return view('Relayn/2022/salon_5_relayn');
        }
    }
    
    public function salon_6_relayn(){
        if(session('clave_gafete') == "" && session('red') !== "Relayn"){
            return redirect()->to(base_url("general"));
        }else{
            return view('Relayn/2022/salon_6_relayn');
        }
    }
    
    public function salon_7_relayn(){
        if(session('clave_gafete') == "" && session('red') !== "Relayn"){
            return redirect()->to(base_url("general"));
        }else{
            return view('Relayn/2022/salon_7_relayn');
        }
    }
    
    public function salon_8_relayn(){
        if(session('clave_gafete') == "" && session('red') !== "Relayn"){
            return redirect()->to(base_url("general"));
        }else{
            return view('Relayn/2022/salon_8_relayn');
        }
    }
    
    public function entrada_congreso(){
        if(session('clave_gafete') == "" && session('red') !== "Relayn"){
            return redirect()->to(base_url("general"));
        }else{
            return view('Relayn/2022/entrada-congreso-relayn');
        }
    }
    
    /* public function cabina_fotografica(){
        if(session('clave_gafete') == "" && session('red') !== "Relayn"){
            return redirect()->to(base_url("general"));
        }else{
            return view('Relayn/2022/cabina-fotografica-relayn');
        }
    } */
    
    public function lago_redesla(){
        if(session('clave_gafete') == "" && session('red') !== "Relayn"){
            return redirect()->to(base_url("general"));
        }else{
            return view('Relayn/2022/lago-redesla-2022-relayn');
        }
    }
    
    public function mezzanine_congreso(){
        if(session('clave_gafete') == "" && session('red') !== "Relayn"){
            return redirect()->to(base_url("general"));
        }else{
            return view('Relayn/2022/mezzanine-congreso-relayn');
        }
    }
    
    public function salones_relayn(){
        if(session('clave_gafete') == "" && session('red') !== "Relayn"){
            return redirect()->to(base_url("general"));
        }else{
            return view('Relayn/2022/salones-relayn');
        }
    }
    
    public function animacion_a_salones(){
        if(session('clave_gafete') == "" && session('red') !== "Relayn"){
            return redirect()->to(base_url("general"));
        }else{
            return view('Relayn/2022/animacion-a-salones');
        }
    }
    
    public function animacion_a_lobby_2(){
        if(session('clave_gafete') == "" && session('red') !== "Relayn"){
            return redirect()->to(base_url("general"));
        }else{
            return view('Relayn/2022/animacion-a-lobby-2-relayn');
        }
    }
    
    public function elevador_congreso(){
        if(session('clave_gafete') == "" && session('red') !== "Relayn"){
            return redirect()->to(base_url("general"));
        }else{
            return view('Relayn/2022/elevador-congreso-relayn');
        }
    }
    
    public function animacion_a_lobby(){
        if(session('clave_gafete') == "" && session('red') !== "Relayn"){
            return redirect()->to(base_url("general"));
        }else{
            return view('Relayn/2022/animacion-a-lobby');
        }
    }
    
    
   
}