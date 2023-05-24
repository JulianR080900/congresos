<?php

namespace App\Controllers;

use App\Models\MainModel;
use App\ThirdParty\FPDF\FPDF;

class RelegController extends BaseController
{
    public $RelegModel;
    public $programa_ponencias;
    public $programa_general;
    
    public function __construct()
    {

        $this->RelegModel = new MainModel();
        date_default_timezone_set('America/Monterrey');
        $date = date('Y-m-d H:i:s');

        $this->programa_ponencias = '#';
        $this->programa_general = 'https://drive.google.com/drive/folders/1Ur1wmZrJzTguLzO_f-0RAjbwBc403Fo_?usp=share_link';
    }

    public function inicio(){
        if(session('clave_gafete') == ""){
            return redirect()->to(base_url());
        }

        $anio = session('anio');
        $red = session('red');

        $view = $red.'/'.$anio.'/inicio';
        return view($view);
    }

    public function recepcion(){
        if(session('clave_gafete') == ""){
            return redirect()->to(base_url());
        }

        $anio = session('anio');
        $red = session('red');
        
        $data = [
            'programa_general' => $this->programa_general
        ];

        $view = $red.'/'.$anio.'/recepcion';
        return view($view,$data);
    }

    public function zona_iquatro(){
        if(session('clave_gafete') == ""){
            return redirect()->to(base_url());
        }

        $anio = session('anio');
        $red = session('red');

        $view = $red.'/'.$anio.'/zona_iquatro';
        return view($view);
    }

    public function mezzanine(){
        if(session('clave_gafete') == ""){
            return redirect()->to(base_url());
        }

        $anio = session('anio');
        $red = session('red');

        $view = $red.'/'.$anio.'/mezzanine';
        return view($view);
    }

    public function lago_redesla(){
        if(session('clave_gafete') == ""){
            return redirect()->to(base_url());
        }

        $anio = session('anio');
        $red = session('red');

        $data = [
            'zoom' => '#',
            'clave_acceso' => ''
        ];

        $view = $red.'/'.$anio.'/lago';
        return view($view,$data);
    }

    public function elevador(){
        if(session('clave_gafete') == ""){
            return redirect()->to(base_url());
        }

        $anio = session('anio');
        $red = session('red');

        $view = $red.'/'.$anio.'/elevador';
        return view($view);
    }
   
    public function animacion_recepcion(){
        if(session('clave_gafete') == ""){
            return redirect()->to(base_url());
        }

        $anio = session('anio');
        $red = session('red');

        $view = $red.'/'.$anio.'/animaciones/recepcion';
        return view($view);
    }

    public function animacion_auditorio(){
        if(session('clave_gafete') == ""){
            return redirect()->to(base_url());
        }

        $anio = session('anio');
        $red = session('red');

        $view = $red.'/'.$anio.'/animaciones/auditorio';
        return view($view,$data);
    }

    public function auditorio(){
        if(session('clave_gafete') == ""){
            return redirect()->to(base_url());
        }

        $anio = session('anio');
        $red = session('red');

        $data = [
            'programa_general' => $this->programa_general
        ];

        $view = $red.'/'.$anio.'/auditorio';
        return view($view,$data);
    }

    public function animacion_salones(){
        if(session('clave_gafete') == ""){
            return redirect()->to(base_url());
        }

        $anio = session('anio');
        $red = session('red');

        $view = $red.'/'.$anio.'/animaciones/salones';
        return view($view);
    }

    public function pasillo_salones(){
        if(session('clave_gafete') == ""){
            return redirect()->to(base_url());
        }

        $anio = session('anio');
        $red = session('red');

        $data = [
            'programa' => $this->programa_ponencias
        ];

        $view = $red.'/'.$anio.'/pasillo_salones';
        return view($view,$data);
    }

}