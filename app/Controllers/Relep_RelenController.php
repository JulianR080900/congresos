<?php

namespace App\Controllers;

use App\Models\MainModel;
use App\ThirdParty\FPDF\FPDF;

class Relep_RelenController extends BaseController
{
    public $RelepRelen;
    
    public function __construct()
    {

        $this->RelepRelen = new MainModel();
        date_default_timezone_set('America/Monterrey');
        $date = date('Y-m-d H:i:s');
    }

    public function inicio(){
        echo 'hi';
    }

   
}