
<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */

$routes->get('/', 'Home::index');
$routes->get('/coba', 'Home::coba');
$routes->get('/beranda', 'Home::index');
$routes->get('/Layout', 'Home::main');
$routes->get('/mahasiswa', 'Home::mahasiswa');
$routes->get('/dosen', 'Home::dosen');
$routes->get('/matakuliah', 'Home::matakuliah');
$routes->get('/tentang', 'Home::tentang');

