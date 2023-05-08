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
/*PRUEBAS*/
// $routes->get('gerson','MainController::buscar_participante');

$routes->get('/', 'MainController::general');
//$routes->get('/general', 'MainController::general');
$routes->get('/datos_generales', 'MainController::home');
$routes->post('/validarGafete', 'MainController::validarGafete');
$routes->get('/logout', 'MainController::logout');
$routes->get('/imprimirPDF', 'MainController::imprimirPDF');
$routes->get('/congreso/(:any)', 'MainController::congreso/$1');
$routes->get('/sala-general', 'MainController::sala_general');
$routes->get('/vive-chiapas', 'MainController::vive_chiapas');
// $routes->get('/lista', 'MainController::lista_participantes'); //ESTA ES LA URL DEL LISTADO DE ASISTENCIA ANTIGUA
// $routes->get('/calificar', 'MainController::index_calificar');
//$routes->get('/calificar/(:any)', 'MainController::index_calificar_ponencia/$1');//IMPRIMIRA EL NOMBRE DE LA PONENCIA DE LA URL AL FORMULARIO 
$routes->POST('/calificarPonencia', 'MainController::calificacion');
// $routes->POST('/ordenamiento','MainController::ordenamiento');
$routes->get('/agregar-registro', 'MainController::agregar_registro');
$routes->POST('/calificacion', 'MainController::posicionCalificacion');
$routes->post('/validarCorreo', 'MainController::validarCorreo');
//Pruebas
$routes->get('/vista-general', 'MainController::vista_general');
$routes->get('/lista_calificaciones/(:any)/(:any)','MainController::lista_calificaciones/$1/$2'); // ANTIGUA VERSION DE PODIUM
$routes->get('comentarios/(:any)','MainController::comentarios_ponencias/$1');

// CONGRESO RELEEM
$routes->get('recepcion-congreso-releem','ReleemController::recepcion_congreso_releem');
$routes->get('elevador-congreso-releem','ReleemController::elevador_congreso_releem');
$routes->get('salones-releem','ReleemController::salones_releem');
$routes->get('salon-1-releem','ReleemController::salon_1_releem');
$routes->get('salon-2-releem','ReleemController::salon_2_releem');
$routes->get('salon-3-releem','ReleemController::salon_3_releem');
$routes->get('salon-4-releem','ReleemController::salon_4_releem');
$routes->get('salon-5-releem','ReleemController::salon_5_releem');
$routes->get('salon-6-releem','ReleemController::salon_6_releem');
$routes->get('mezzanine-congreso-releem','ReleemController::mezzanine_congreso_releem');
$routes->get('auditorio-congreso-releem','ReleemController::auditorio_congreso_releem');
$routes->get('lago-redesla-2022','ReleemController::lago_redesla');
$routes->get('zona-iquatro-editores','ReleemController::zona_iquatro_editores');
$routes->get('cabina-fotografica-releem','ReleemController::cabina_fotogafica_releem');
$routes->get('animacion-a-salones','ReleemController::animacion_a_salones');
$routes->get('animacion-a-lobby-2','ReleemController::animacion_a_lobby_2');
$routes->get('animacion-a-lobby','ReleemController::animacion_a_lobby');

// CONGRESO RELAYN
$routes->get('recepcion-congreso-relayn','RelaynController::recepcion_congreso_relayn');
$routes->get('zona-iquatro-editores-relayn','RelaynController::zona_iquatro_editores');
$routes->get('auditorio-congreso-relayn','RelaynController::auditorio_congreso_relayn');
$routes->get('salon-1-relayn','RelaynController::salon_1_relayn');
$routes->get('salon-2-relayn','RelaynController::salon_2_relayn');
$routes->get('salon-3-relayn','RelaynController::salon_3_relayn');
$routes->get('salon-4-relayn','RelaynController::salon_4_relayn');
$routes->get('salon-5-relayn','RelaynController::salon_5_relayn');
$routes->get('salon-6-relayn','RelaynController::salon_6_relayn');
$routes->get('salon-7-relayn','RelaynController::salon_7_relayn');
$routes->get('salon-8-relayn','RelaynController::salon_8_relayn');
$routes->get('entrada-congreso-relayn','RelaynController::entrada_congreso_relayn');
$routes->get('cabina-fotografica-relayn','RelaynController::cabina_fotografica_relayn');
$routes->get('lago-redesla-2022-relayn','RelaynController::lago_redesla_2022_relayn');
$routes->get('mezzanine-congreso-relayn','RelaynController::mezzanine_congreso_relayn');
$routes->get('salones-relayn','RelaynController::salones_relayn');
$routes->get('animacion-a-salones-relayn','RelaynController::animacion_a_salones');
$routes->get('animacion-a-lobby-2-relayn','RelaynController::animacion_a_lobby_2');
$routes->get('animacion-a-lobby-relayn','RelaynController::animacion_a_lobby');
$routes->get('elevador-congreso-relayn','RelaynController::elevador_congreso_relayn');

// CONGRESO RELEP-RELEN
$routes->get('recepcion-congreso-relep-relen','RelepController::recepcion_congreso_relep_relen');
$routes->get('mezzanine-congreso-relep-relen','RelepController::mezzanine_congreso_relep_relen');
$routes->get('zona-iquatro-editores-relep-relen','RelepController::zona_iquatro_editores');
$routes->get('auditorio-congreso-relep-relen','RelepController::auditorio_congreso_relep_relen');
$routes->get('cabina-fotografica-relep-relen','RelepController::cabina_fotografica_relep_relen');
$routes->get('elevador-congreso-relep-relen','RelepController::elevador_congreso_relep_relen');
$routes->get('animacion-a-lobby-relep-relen','RelepController::animacion_a_lobby');
$routes->get('animacion-a-auditorio-relep-relen','RelepController::animacion_a_auditorio_relep_relen');
$routes->get('animacion-a-salones-relep','RelepController::animacion_a_salones_relep');
$routes->get('salones-relep','RelepController::salones_relep');
$routes->get('animacion-a-salones-relen','RelepController::animacion_a_salones_relen');
$routes->get('salones-relen','RelepController::salones_relen');
$routes->get('lago-redesla-relep-relen','RelepController::lago_redesla_relep_relen');
$routes->get('salon-1-relep','RelepController::salon_1_relep');
$routes->get('salon-2-relep','RelepController::salon_2_relep');
$routes->get('salon-3-relep','RelepController::salon_3_relep');
$routes->get('salon-1-relen','RelepController::salon_1_relen');
$routes->get('salon-2-relen','RelepController::salon_2_relen');
$routes->get('salon-3-relen','RelepController::salon_3_relen');














//NUEVA RUTAS PARA CALIFICACIONES DE PONENCIAS
$routes->get('calificar_ponencia','PonenciaCalController::index');
$routes->POST('calificacion_ponencia','PonenciaCalController::calificaciones');
$routes->POST('ordenamiento','PonenciaCalController::ordenamiento');
$routes->POST('ponencia_calificada','PonenciaCalController::calificar_ponencia');

$routes->get('verificar_constancias','PonenciaCalController::verificar_constancias');
// $rouyes->get('verificar_contancia','PonenciaCalController::verificar_contancia');

//NUEVA RUTAS PARA EL PODIUM DE LAS CALIFICACIONES Y SUS COMENTARIOS
$routes->get('calificaciones/(:any)/(:any)','PonenciaCalController::podium/$1/$2');
$routes->get('comentarios_ponencias/(:any)','PonenciaCalController::comentarios/$1');

//NUEVA RUTA PARA LISTADO DE ASISTENCIA
$routes->get('lista','MainController::lista_asistencia');

$routes->get('asistenciaCongreso','MainController::asistenciaCongreso');


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
