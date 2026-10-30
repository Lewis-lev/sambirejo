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
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->setAutoRoute(false);
$routes->set404Override();

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->get('/login', 'Login::index', ['filter' => 'filterLogout']);
$routes->post('/login/valid_login', 'Login::valid_login');
$routes->get('/contact', 'Home::contact');
$routes->get('/profile', 'Home::profile');
$routes->get('/lokasi', 'Home::lokasi');
$routes->get('/simulasi', 'Home::simulasi');
$routes->get('/paket', 'Paket::index');
$routes->get('/registrasi', 'Registrasi::index');

$routes->get('/admin', 'Table::index', ['filter' => 'filterLogin']);
$routes->get('/status', 'Status::index', ['filter' => 'filterLogin']);
$routes->get('/status1', 'Status::index1', ['filter' => 'filterLogin']);
$routes->get('/kunjungan', 'Kondisi::index', ['filter' => 'filterLogin']);
$routes->get('/kunjungan1', 'Kondisi::index1', ['filter' => 'filterLogin']);
$routes->get('/logout', 'Table::logout', ['filter' => 'filterLogin']);

$routes->post('/table/delete/(:num)', 'Table::delete/$1', ['filter' => 'filterLogin']);
$routes->post('/table/status/(:num)', 'Table::status/$1', ['filter' => 'filterLogin']);
$routes->post('/table/kondisi/(:num)', 'Table::kondisi/$1', ['filter' => 'filterLogin']);
$routes->post('/table/deleteAll', 'Table::deleteAll', ['filter' => 'filterLogin']);

$routes->post('/status/delete/(:num)', 'Status::delete/$1', ['filter' => 'filterLogin']);
$routes->post('/status/delete1/(:num)', 'Status::delete1/$1', ['filter' => 'filterLogin']);
$routes->post('/status/status/(:num)', 'Status::status/$1', ['filter' => 'filterLogin']);
$routes->post('/status/status1/(:num)', 'Status::status1/$1', ['filter' => 'filterLogin']);
$routes->post('/status/deleteAll', 'Status::deleteAll', ['filter' => 'filterLogin']);
$routes->post('/status/deleteAll1', 'Status::deleteAll1', ['filter' => 'filterLogin']);

$routes->post('/kondisi/delete/(:num)', 'Kondisi::delete/$1', ['filter' => 'filterLogin']);
$routes->post('/kondisi/delete1/(:num)', 'Kondisi::delete1/$1', ['filter' => 'filterLogin']);
$routes->post('/kondisi/kondisi/(:num)', 'Kondisi::kondisi/$1', ['filter' => 'filterLogin']);
$routes->post('/kondisi/kondisi1/(:num)', 'Kondisi::kondisi1/$1', ['filter' => 'filterLogin']);
$routes->post('/kunjungan/deleteAll', 'Kondisi::deleteAll', ['filter' => 'filterLogin']);
$routes->post('/kunjungan/deleteAll1', 'Kondisi::deleteAll1', ['filter' => 'filterLogin']);

$routes->post('/save', 'Paket::save');

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
