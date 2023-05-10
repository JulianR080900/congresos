<?php

namespace App\Controllers;

use App\Models\MainModel;
use App\ThirdParty\FPDF\FPDF;

class RelegController extends BaseController
{
    public $RelegModel;
    
    public function __construct()
    {

        $this->RelegnModel = new MainModel();
        date_default_timezone_set('America/Monterrey');
        $date = date('Y-m-d H:i:s');
    }

    public function salon($n){

        if(session('clave_gafete') == "" && session('red') !== "Releg"){
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
        #view/Releg/2023/salon_2

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

   
}