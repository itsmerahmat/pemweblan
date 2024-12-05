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
$routes->group('belajar-helper', static function ($routes) {
    $routes->get('', 'BelajarHelper::index');
    $routes->get('tanggal', 'BelajarHelper::helper');
    $routes->post('simpan-belajar', 'BelajarHelper::simpanBelajar');
    $routes->get('latihan', 'BelajarHelper::tugas');
});
$routes->group('belajar-library', static function ($routes) {
    $routes->get('', 'BelajarLibrary::index');
    $routes->get('login', 'BelajarLibrary::login');
    $routes->get('logout', 'BelajarLibrary::logout');
    $routes->get('coba-lib', 'BelajarLibrary::cobaLib');
    $routes->get('latihan', 'BelajarLibrary::tugas');
});