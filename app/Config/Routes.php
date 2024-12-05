<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// $routes->setAutoRoute(true);
$routes->get('/', 'Home::index');
$routes->group('belajar', static function ($routes) {
    $routes->get('', 'Belajar::index');
    $routes->get('kali/(:any)/(:any)', 'Belajar::kali/$1/$2');
    $routes->get('bagi/(:any)/(:any)', 'Belajar::bagi/$1/$2');
    $routes->get('pesan', 'Belajar::pesan');
    $routes->get('latihan', 'Belajar::latihan');
});