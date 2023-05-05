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
    
    public function recepcion_congreso_relayn(){
        if(session('clave_gafete') == "" && session('red') !== "Relayn"){
            return redirect()->to(base_url("general"));
        }else{
            return view('Relayn/'.session("anio")."/recepcion-congreso-relayn");
        }
    }
    
    public function zona_iquatro_editores(){
        if(session('clave_gafete') == "" && session('red') !== "Relayn"){
            return redirect()->to(base_url("general"));
        }else{
            return view('Relayn/2022/zona-iquatro-editores');
        }
    }
    
    public function auditorio_congreso_relayn(){
        if(session('clave_gafete') == "" && session('red') !== "Relayn"){
            return redirect()->to(base_url("general"));
        }else{
            return view('Relayn/2022/auditorio-congreso-relayn');
        }
    }
    
    public function salon_1_relayn(){
        if(session('clave_gafete') == "" && session('red') !== "Relayn"){
            return redirect()->to(base_url("general"));
        }else{
            return view('Relayn/2022/salon_1_relayn');
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
    
    public function entrada_congreso_relayn(){
        if(session('clave_gafete') == "" && session('red') !== "Relayn"){
            return redirect()->to(base_url("general"));
        }else{
            return view('Relayn/2022/entrada-congreso-relayn');
        }
    }
    
    public function cabina_fotografica_relayn(){
        if(session('clave_gafete') == "" && session('red') !== "Relayn"){
            return redirect()->to(base_url("general"));
        }else{
            return view('Relayn/2022/cabina-fotografica-relayn');
        }
    }
    
    public function lago_redesla_2022_relayn(){
        if(session('clave_gafete') == "" && session('red') !== "Relayn"){
            return redirect()->to(base_url("general"));
        }else{
            return view('Relayn/2022/lago-redesla-2022-relayn');
        }
    }
    
    public function mezzanine_congreso_relayn(){
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
    
    public function elevador_congreso_relayn(){
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