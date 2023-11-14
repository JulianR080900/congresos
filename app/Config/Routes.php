<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('MainController');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.


/* --   RUTAS MAIN  --  */

$routes->get('inicio', 'MainController::general');
$routes->post('validarGafete', 'MainController::validarGafete');
$routes->get('datos_generales', 'MainController::datos_generales');
$routes->get('imprimirPDF', 'MainController::generarPDF');
$routes->get('logout', 'MainController::logout');
$routes->get('404', 'MainController::mostrarError404');

$routes->group('plataforma', static function($routes){
    $routes->group('Relayn', static function($routes){
        $routes->group('2022', static function($routes){
            $routes->get('inicio','RelaynController::inicio');
            $routes->get('recepcion-congreso','RelaynController::recepcion_congreso');
            $routes->get('zona-iquatro-editores','RelaynController::zona_iquatro_editores');
            $routes->get('auditorio-congreso','RelaynController::auditorio_congreso');
            $routes->get('salones','RelaynController::salones_relayn');
            $routes->get('salon/(:num)','RelaynController::salon/$1');
            $routes->get('entrada-congreso','RelaynController::entrada_congreso');
            $routes->get('cabina-fotografica','RelaynController::cabina_fotografica');
            $routes->get('lago-redesla','RelaynController::lago_redesla');
            $routes->get('mezzanine-congreso','RelaynController::mezzanine_congreso');
            $routes->get('animacion-a-salones','RelaynController::animacion_a_salones');
            $routes->get('animacion-a-lobby-2','RelaynController::animacion_a_lobby_2');
            $routes->get('animacion-a-lobby','RelaynController::animacion_a_lobby');
            $routes->get('elevador-congreso','RelaynController::elevador_congreso');
        });
        $routes->group('2023', static function($routes){
            $routes->get('inicio','RelaynController::inicio');
            $routes->get('recepcion','RelaynController::recepcion');
            $routes->get('zona-iquatro','RelaynController::zona_iquatro');
            $routes->get('mezzanine','RelaynController::mezzanine');
            $routes->get('lago','RelaynController::lago');
            $routes->get('cabina-fotografica','RelaynController::cabina_fotografica');
            $routes->get('elevador','RelaynController::elevador');
            $routes->get('animacion/(:any)','RelaynController::animacion/$1');
            $routes->get('auditorio','RelaynController::auditorio');

            $routes->group('salones', static function($routes){
                $routes->get('salon/(:num)','MainController::salon/$1');
                $routes->get('/','RelaynController::salones');
            });
            //$routes->get('salones','RelaynController::salones');

            
            //$routes->get('salon/(:num)','MainController::salon/$1');
        });
    });

    $routes->group('Releem', static function($routes){
        $routes->group('2022', static function($routes){
            $routes->get('recepcion-congreso','ReleemController::recepcion_congreso_releem');
            $routes->get('elevador-congreso','ReleemController::elevador_congreso_releem');
            $routes->get('salones-releem','ReleemController::salones_releem');
            $routes->get('salon/(:num)','ReleemController::salon/$1');
            $routes->get('auditorio-congreso','ReleemController::auditorio_congreso_releem');
            $routes->get('mezzanine-congreso','ReleemController::mezzanine_congreso_releem');
            $routes->get('lago-redesla','ReleemController::lago_redesla');
            $routes->get('zona-iquatro-editores','ReleemController::zona_iquatro_editores');
            $routes->get('cabina-fotografica','ReleemController::cabina_fotogafica_releem');
            $routes->get('animacion-a-salones','ReleemController::animacion_a_salones');
            $routes->get('animacion-a-lobby-2','ReleemController::animacion_a_lobby_2');
            $routes->get('animacion-a-lobby','ReleemController::animacion_a_lobby');
        });
        $routes->group('2023', static function($routes){
            $routes->get('inicio','ReleemController::inicio');
            $routes->get('salon/(:num)','MainController::salon/$1');
        });
    });

    $routes->group('Relep-Relen', static function($routes){
        $routes->get('recepcion-congreso','RelepController::recepcion_congreso_relep_relen');
        $routes->get('mezzanine-congreso','RelepController::mezzanine_congreso_relep_relen');
        $routes->get('zona-iquatro-editores','RelepController::zona_iquatro_editores');
        $routes->get('auditorio-congreso','RelepController::auditorio_congreso_relep_relen');
        $routes->get('cabina-fotografica','RelepController::cabina_fotografica_relep_relen');
        $routes->get('elevador-congreso','RelepController::elevador_congreso_relep_relen');
        $routes->get('animacion-a-lobby','RelepController::animacion_a_lobby');
        $routes->get('animacion-a-auditorio','RelepController::animacion_a_auditorio_relep_relen');
        $routes->get('animacion-a-salones-relep','RelepController::animacion_a_salones_relep');
        $routes->get('salones-relep','RelepController::salones_relep');
        $routes->get('animacion-a-salones-relen','RelepController::animacion_a_salones_relen');
        $routes->get('salones-relen','RelepController::salones_relen');
        $routes->get('lago-redesla','RelepController::lago_redesla_relep_relen');
        $routes->get('/sala-general', 'MainController::sala_general'); //NO EXISTE EN RELAYN, RELEEM
        $routes->get('/vive-chiapas', 'MainController::vive_chiapas'); //NO EXISTE EN RELAYN, RELEEM

        $routes->get('salon-relep/(:num)','RelepController::escoger_salon_relep/$1');
        $routes->get('salon-relen/(:num)','RelepController::escoger_salon_relen/$1');

        $routes->group('2023', static function($routes){
            $routes->get('inicio','Relep_RelenController::inicio');
            $routes->get('salon/(:num)','MainController::salon/$1');
        });

    });

    $routes->group('Releg', static function($routes){
        $routes->group('2023', static function($routes){
            $routes->get('inicio','RelegController::inicio');
            $routes->get('recepcion','RelegController::recepcion');
            $routes->get('zona-iquatro','RelegController::zona_iquatro');
            $routes->get('mezzanine','RelegController::mezzanine');
            $routes->get('lago-redesla','RelegController::lago_redesla');
            $routes->get('elevador', 'RelegController::elevador');
            $routes->get('auditorio', 'RelegController::auditorio');
            $routes->get('pasillo-salones', 'RelegController::pasillo_salones');

            $routes->group('animaciones', static function($routes){
                $routes->get('recepcion', 'RelegController::animacion_recepcion');
                $routes->get('auditorio', 'RelegController::animacion_auditorio');
                $routes->get('salones', 'RelegController::animacion_salones');
            });
            
            $routes->get('salon/(:num)','MainController::salon/$1');
        });
    });
});

$routes->group('calificar',static function($routes){
    $routes->get('inicio', 'PonenciaCalController::index');
    $routes->post('verificar', 'PonenciaCalController::verificar');
    $routes->group('formulario',static function($routes){
        $routes->post('evaluacion', 'PonenciaCalController::evaluacion');
        $routes->post('insert', 'PonenciaCalController::insertEvaluacion');
    });
});

$routes->group('podium', static function($routes){
    $routes->get('ver/(:num)', 'PonenciaCalController::verPonencia/$1');
    $routes->get('getListado/(:any)/(:num)', 'PonenciaCalController::getListadoPodium/$1/$2');
    $routes->get('(:any)/(:any)', 'PonenciaCalController::podium/$1/$2');
});

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
