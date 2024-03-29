<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

//Rutas de Ingreso para el usuario Registrado
$routes->get('/', 'Home::index',['filter'=>'noauth']);
$routes->post('valida','Validacion::valida');
$routes->get('cerrar', 'Validacion::cerrar');


//Paqueteria 
$routes->get('GeControlador', 'GeControlador::index');
$routes->get('paqueteria', 'GeControlador::paqueteria');
$routes->get('sitio', 'GeControlador::sitio');




$routes->get('controlador', 'Controlador::index');
$routes->get('saludo', 'Controlador::saludo');
$rutasmultiples = [
	'sitio/' => 'Home::sitio',
	'sitio/(:num)' => 'Home::sitioId/$1',
	'sitio/(:alphanum)' => 'Home::sitioName/$1'
];
$routes->map($rutasmultiples);


//Pagina Principal del Administrador
$routes->get('principal','Controlador::inicio',['filter'=>'auth']);


//Secciones de aplicacion de persona
$routes->get('bd','Registro::index',['filter'=>'auth']);
$routes->get('bd/nuevo','Registro::crear',['filter'=>'auth']);
$routes->post('bd/registro','Registro::registro',['filter'=>'auth']);
$routes->get('bd/eliminar/(:num)','Registro::eliminar/$1',['filter'=>'auth']);
$routes->get('bd/actualiza/(:num)','Registro::actualiza/$1',['filter'=>'auth']);
$routes->add('bd/editar/','Registro::editar',['filter'=>'auth']);
$routes->get('bd/gafete/(:num)','Registro::gafete/$1',['filter'=>'auth']);
$routes->get('bd/descarga_pdf','Registro::descarga_pdf',['filter'=>'auth']);


//Rutas para la Gestion de Usuarios
$routes->get('users','Usuarios::index',['filter'=>'auth']);
$routes->get('users/alta','Usuarios::alta',['filter'=>'auth']);
$routes->post('users/registro','Usuarios::registro',['filter'=>'auth']);
$routes->get('users/eliminar/(:num)','Usuarios::eliminar/$1',['filter'=>'auth']);
$routes->get('users/editar/(:num)','Usuarios::editar/$1',['filter'=>'auth']);
$routes->post('users/actulizar','Usuarios::actulizar',['filter'=>'auth']);
$routes->get('users/contrasena/(:num)','Usuarios::contrasena/$1',['filter'=>'auth']);
$routes->post('users/restablece','Usuarios::restablece',['filter'=>'auth']);


//Rutas para Paqueteria



 