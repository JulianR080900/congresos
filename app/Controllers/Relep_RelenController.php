<?php

namespace App\Controllers;

use App\Models\MainModel;
use App\ThirdParty\FPDF\FPDF;

class Relep_RelenController extends BaseController
{
    public $MainModel;
    
    public function __construct()
    {

        $this->MainModel = new MainModel();
        date_default_timezone_set('America/Monterrey');
        $date = date('Y-m-d H:i:s');
    }

    public function inicio(){
        if(session('clave_gafete') == "" && ( session('red') !== "Relen" || session('red') !== "Relep" )){
            return redirect()->to(base_url());
        }else{
            return view('Relep_relen/'.session('anio')."/entrada")
            .view('footer');
        }
    }

    public function recepcion(){
        if(session('clave_gafete') == "" && ( session('red') !== "Relen" || session('red') !== "Relep" )){
            return redirect()->to(base_url());
        }else{
            return view('Relep_relen/'.session('anio')."/recepcion")
            .view('footer');
        }
    }

    public function zona_iquatro(){
        if(session('clave_gafete') == "" && ( session('red') !== "Relen" || session('red') !== "Relep" )){
            return redirect()->to(base_url());
        }else{
            return view('Relep_relen/'.session('anio')."/zona_iquatro")
            .view('footer');
        }
    }

    public function mezzanine(){
        if(session('clave_gafete') == "" && ( session('red') !== "Relen" || session('red') !== "Relep" )){
            return redirect()->to(base_url());
        }else{
            return view('Relep_relen/'.session('anio')."/mezzanine")
            .view('footer');
        }
    }

    public function elevador(){
        if(session('clave_gafete') == "" && ( session('red') !== "Relen" || session('red') !== "Relep" )){
            return redirect()->to(base_url());
        }else{
            return view('Relep_relen/'.session('anio')."/elevador")
            .view('footer');
        }
    }

    public function animacion($piso){
        if(session('clave_gafete') == "" && ( session('red') !== "Relen" || session('red') !== "Relep" )){
            return redirect()->to(base_url());
        }else{
            return view('Relep_relen/'.session('anio')."/animaciones/".$piso)
            .view('footer');
        }
    }

    public function salones_relep(){
        if(session('clave_gafete') == "" && ( session('red') !== "Relen" || session('red') !== "Relep" )){
            return redirect()->to(base_url());
        }else{
            return view('Relep_relen/'.session('anio')."/salones_relep")
            .view('footer');
        }
    }

    public function salones_relen(){
        if(session('clave_gafete') == "" && ( session('red') !== "Relen" || session('red') !== "Relep" )){
            return redirect()->to(base_url());
        }else{
            return view('Relep_relen/'.session('anio')."/salones_relen")
            .view('footer');
        }
    }

    public function lago(){
        if(session('clave_gafete') == "" && ( session('red') !== "Relen" || session('red') !== "Relep" )){
            return redirect()->to(base_url());
        }else{
            return view('Relep_relen/'.session('anio')."/lago")
            .view('footer');
        }
    }

    public function cabina_fotografica(){
        if(session('clave_gafete') == "" && ( session('red') !== "Relen" || session('red') !== "Relep" )){
            return redirect()->to(base_url());
        }else{
            return view('Relep_relen/'.session('anio')."/cabina_fotografica")
            .view('footer');
        }
    }

    public function auditorio(){
        if(session('clave_gafete') == "" && ( session('red') !== "Relen" || session('red') !== "Relep" )){
            return redirect()->to(base_url());
        }else{
            return view('Relep_relen/'.session('anio')."/auditorio")
            .view('footer');
        }
    }


   
}