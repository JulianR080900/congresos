<?php

namespace App\Controllers;

use App\Models\MainModel;
// use App\ThirdParty\FPDF;
use App\ThirdParty\FPDF\FPDF;

class RelepController extends BaseController
{
    public $RelepModel;
    
    public function __construct()
    {

        $this->ReleemModel = new MainModel();
        date_default_timezone_set('America/Monterrey');
        $date = date('Y-m-d H:i:s');
    }
    
    public function recepcion_congreso_relep_relen(){
        if(session('clave_gafete') == "" && session('red') !== "Relep"){
            return redirect()->to(base_url("congreso/Relep"));
        }else{
            return view('Relep/'.session("anio")."/recepcion_congreso_relep_relen");   
        }
    }
    
    public function mezzanine_congreso_relep_relen(){
        if(session('clave_gafete') == "" && session('red') !== "Relep"){
            return redirect()->to(base_url("congreso/Relep"));
        }else{
            return view('Relep/'.session("anio")."/mezzanine_congreso_relep_relen");   
        }
    }
    
    public function zona_iquatro_editores(){
        if(session('clave_gafete') == "" && session('red') !== "Relep"){
            return redirect()->to(base_url("congreso/Relep"));
        }else{
            return view('Relep/'.session("anio")."/zona_iquatro_editores");   
        }
    }
    
    public function auditorio_congreso_relep_relen(){
        if(session('clave_gafete') == "" && session('red') !== "Relep"){
            return redirect()->to(base_url("congreso/Relep"));
        }else{
            return view('Relep/'.session("anio")."/auditorio_congreso_relep_relen");   
        }
    }
    
    public function cabina_fotografica_relep_relen(){
        if(session('clave_gafete') == "" && session('red') !== "Relep"){
            return redirect()->to(base_url("congreso/Relep"));
        }else{
            return view('Relep/'.session("anio")."/cabina_fotografica_relep_relen");   
        }
    }
    
    public function elevador_congreso_relep_relen(){
        if(session('clave_gafete') == "" && session('red') !== "Relep"){
            return redirect()->to(base_url("congreso/Relep"));
        }else{
            return view('Relep/'.session("anio")."/elevador_congreso_relep_relen");   
        }
    }
    
    public function animacion_a_lobby(){
        if(session('clave_gafete') == "" && session('red') !== "Relep"){
            return redirect()->to(base_url("congreso/Relep"));
        }else{
            return view('Relep/'.session("anio")."/animacion_a_lobby");   
        }
    }
    
    public function animacion_a_auditorio_relep_relen(){
        if(session('clave_gafete') == "" && session('red') !== "Relep"){
            return redirect()->to(base_url("congreso/Relep"));
        }else{
            return view('Relep/'.session("anio")."/animacion_a_auditorio_relep_relen");   
        }
    }
    
    public function animacion_a_salones_relep(){
        if(session('clave_gafete') == "" && session('red') !== "Relep"){
            return redirect()->to(base_url("congreso/Relep"));
        }else{
            return view('Relep/'.session("anio")."/animacion_a_salones_relep");   
        }
    }
    
    public function salones_relep(){
        if(session('clave_gafete') == "" && session('red') !== "Relep"){
            return redirect()->to(base_url("congreso/Relep"));
        }else{
            return view('Relep/'.session("anio")."/salones_relep");   
        }
    }
    
    public function animacion_a_salones_relen(){
        if(session('clave_gafete') == "" && session('red') !== "Relep"){
            return redirect()->to(base_url("congreso/Relep"));
        }else{
            return view('Relep/'.session("anio")."/animacion_a_salones_relen");   
        }
    }
    
    public function salones_relen(){
        if(session('clave_gafete') == "" && session('red') !== "Relep"){
            return redirect()->to(base_url("congreso/Relep"));
        }else{
            return view('Relep/'.session("anio")."/salones_relen");   
        }
    }
    
    public function lago_redesla_relep_relen(){
        if(session('clave_gafete') == "" && session('red') !== "Relep"){
            return redirect()->to(base_url("congreso/Relep"));
        }else{
            return view('Relep/'.session("anio")."/lago_redesla_relep_relen");   
        }
    }
    
    public function salon_1_relep(){
        if(session('clave_gafete') == "" && session('red') !== "Relep"){
            return redirect()->to(base_url("congreso/Relep"));
        }else{
            return view('Relep/'.session("anio")."/salon_1_relep");   
        }
    }
    public function salon_2_relep(){
        if(session('clave_gafete') == "" && session('red') !== "Relep"){
            return redirect()->to(base_url("congreso/Relep"));
        }else{
            return view('Relep/'.session("anio")."/salon_2_relep");   
        }
    }
    public function salon_3_relep(){
        if(session('clave_gafete') == "" && session('red') !== "Relep"){
            return redirect()->to(base_url("congreso/Relep"));
        }else{
            return view('Relep/'.session("anio")."/salon_3_relep");   
        }
    }
    
    public function salon_1_relen(){
        if(session('clave_gafete') == "" && session('red') !== "Relep"){
            return redirect()->to(base_url("congreso/Relep"));
        }else{
            return view('Relep/'.session("anio")."/salon_1_relen");   
        }
    }
    public function salon_2_relen(){
        if(session('clave_gafete') == "" && session('red') !== "Relep"){
            return redirect()->to(base_url("congreso/Relep"));
        }else{
            return view('Relep/'.session("anio")."/salon_2_relen");   
        }
    }
    public function salon_3_relen(){
        if(session('clave_gafete') == "" && session('red') !== "Relep"){
            return redirect()->to(base_url("congreso/Relep"));
        }else{
            return view('Relep/'.session("anio")."/salon_3_relen");   
        }
    }
    
}