<?php

namespace App\Controllers;

use App\Models\MainModel;
// use App\ThirdParty\FPDF;
use App\ThirdParty\FPDF\FPDF;

class ReleemController extends BaseController
{
    public $ReleemModel;
    
    public function __construct()
    {

        $this->ReleemModel = new MainModel();
        date_default_timezone_set('America/Monterrey');
        $date = date('Y-m-d H:i:s');
    }
    
    public function recepcion_congreso_releem(){
        if(session('clave_gafete') == "" && session('red') !== "Releem"){
            return redirect()->to(base_url("congreso/Releem"));
        }else{
            return view('Releem/'."2022"."/recepcion-congreso-releem");   
        }
    }
    
    public function elevador_congreso_releem(){
        if(session('clave_gafete') == "" && session('red') !== "Releem"){
            return redirect()->to(base_url("congreso/Releem"));
        }else{
            return view('Releem/'."2022"."/elevador-congreso-releem");
        }
    }
    
    public function salones_releem(){
        if(session('clave_gafete') == "" && session('red') !== "Releem"){
            return redirect()->to(base_url("congreso/Releem"));
        }else{
            return view('Releem/'."2022"."/salones-releem");
        }
    }
    
    public function salon_1_releem(){
        if(session('clave_gafete') == "" && session('red') !== "Releem"){
            return redirect()->to(base_url("congreso/Releem"));
        }else{
            return view('Releem/'."2022"."/salon-1-releem");
            $name = '/'.session('red').'/'.session('anio').'/salones_'.$id;
        }
    }
    
    public function salon_2_releem(){
        if(session('clave_gafete') == "" && session('red') !== "Releem"){
            return redirect()->to(base_url("congreso/Releem"));
        }else{
            return view('Releem/'."2022"."/salon-2-releem");
        }
    }
    
    public function salon_3_releem(){
        if(session('clave_gafete') == "" && session('red') !== "Releem"){
            return redirect()->to(base_url("congreso/Releem"));
        }else{
            return view('Releem/'."2022"."/salon-3-releem");
        }
    }
    
    public function salon_4_releem(){
        if(session('clave_gafete') == "" && session('red') !== "Releem"){
            return redirect()->to(base_url("congreso/Releem"));
        }else{
            return view('Releem/'."2022"."/salon-4-releem");
        }
    }
    
    public function salon_5_releem(){
        if(session('clave_gafete') == "" && session('red') !== "Releem"){
            return redirect()->to(base_url("congreso/Releem"));
        }else{
            return view('Releem/'."2022"."/salon-5-releem");
        }
    }
    
    public function salon_6_releem(){
        if(session('clave_gafete') == "" && session('red') !== "Releem"){
            return redirect()->to(base_url("congreso/Releem"));
        }else{
            return view('Releem/'."2022"."/salon-6-releem");
        }
    }
    
    public function mezzanine_congreso_releem(){
        if(session('clave_gafete') == "" && session('red') !== "Releem"){
            return redirect()->to(base_url("congreso/Releem"));
        }else{
            return view('Releem/'."2022"."/mezzanine-congreso-releem");
        }
    }
    
    public function auditorio_congreso_releem(){
        if(session('clave_gafete') == "" && session('red') !== "Releem"){
            return redirect()->to(base_url("congreso/Releem"));
        }else{
            return view('Releem/'."2022"."/auditorio-congreso-releem");
        }
    }
    
    public function lago_redesla(){
        if(session('clave_gafete') == "" && session('red') !== "Releem"){
            return redirect()->to(base_url("congreso/Releem"));
        }else{
            return view('Releem/'."2022"."/lago-redesla");
        }
    }
    
    public function zona_iquatro_editores(){
        if(session('clave_gafete') == "" && session('red') !== "Releem"){
            return redirect()->to(base_url("congreso/Releem"));
        }else{
            return view('Releem/'."2022"."/zona-iquatro-editores");
        }
    }
    
    public function cabina_fotogafica_releem(){
        if(session('clave_gafete') == "" && session('red') !== "Releem"){
            return redirect()->to(base_url("congreso/Releem"));
        }else{
            return view('Releem/'."2022"."/cabina-fotogafica-releem");
        }
    }
    
    public function animacion_a_salones(){
     if(session('clave_gafete') == "" && session('red') !== "Releem"){
            return redirect()->to(base_url("congreso/Releem"));
        }else{
            return view('Releem/'."2022"."/animacion-a-salones");
        }
    }
    
    public function animacion_a_lobby_2(){
     if(session('clave_gafete') == "" && session('red') !== "Releem"){
            return redirect()->to(base_url("congreso/Releem"));
        }else{
            return view('Releem/'."2022"."/animacion-a-lobby-2");
        }
    }
    
    public function animacion_a_lobby(){
     if(session('clave_gafete') == "" && session('red') !== "Releem"){
            return redirect()->to(base_url("congreso/Releem"));
        }else{
            return view('Releem/'."2022"."/animacion-a-lobby");
        }
    }

    public function salon($n){

        if(session('clave_gafete') == "" && session('red') !== "Releem"){
            return redirect()->to(base_url("general"));
        }

        #Anio #Red
        /*
        $red = session('red');
        $anio = session('anio');
        */

        $red = session('red');
        $anio = 2022;

        $ruta = dirname(__DIR__)."\\Views\\".$red.'\\'.$anio.'\\salon-'.$n.'-'.strtolower($red).'.php';
        #view/Releem/2023/salon_2

        #file_exist

        if(!file_exists($ruta)){
            #la ruta no existe mandamos un 404 y terminamos el codigo
            http_response_code(404);
            exit;
        }

        return view($red.'/'.$anio.'/salon-'.$n.'-'.strtolower($red));

        #VERIFICAR SI EL ARCHIVO EXISTE
        print_r(session('anio'));
        exit;
    }
    
}