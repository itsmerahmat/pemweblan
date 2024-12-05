<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// $routes->setAutoRoute(true);
// Pertemuan 1 Framework PHP
$routes->get('/', 'Home::index');
$routes->group('belajar', static function ($routes) {
    $routes->get('', 'Belajar::index');
    $routes->get('kali/(:any)/(:any)', 'Belajar::kali/$1/$2');
    $routes->get('bagi/(:any)/(:any)', 'Belajar::bagi/$1/$2');
    $routes->get('pesan', 'Belajar::pesan');
    $routes->get('latihan', 'Belajar::latihan');
});

// Pertemuan 2 Helper & Library
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

// Pertemuan 3 Form Handling
$routes->group('mahasiswa', static function ($routes) {
    $routes->get('form', 'Mahasiswa::index');
    $routes->post('save', 'Mahasiswa::save');
});
$routes->group('form', static function ($routes) {
    $routes->get('', 'Mahasiswa::tugas');
    $routes->post('save', 'Mahasiswa::saveLatihan');
});

// Pertemuan 4 CSS Framework
$routes->group('admin', static function ($routes) {
    $routes->get('dashboard', 'Admin::index');
});

// Pertemuan 5 Operasi Database
$routes->group('mahasiswa', static function ($routes) {
    $routes->get('', 'Mahasiswa::show');
    $routes->get('tambah', 'Mahasiswa::tambah');
    $routes->get('edit/(:any)', 'Mahasiswa::edit/$1');
    $routes->post('submit', 'Mahasiswa::submit');
    $routes->post('update', 'Mahasiswa::update');
    $routes->get('delete/(:any)', 'Mahasiswa::delete/$1');
});
$routes->group('dosen', static function ($routes) {
    $routes->get('', 'Dosen::index');
    $routes->get('tambah', 'Dosen::tambah');
    $routes->get('edit/(:any)', 'Dosen::edit/$1');
    $routes->post('submit', 'Dosen::submit');
    $routes->post('update', 'Dosen::update');
    $routes->get('delete/(:any)', 'Dosen::delete/$1');
});
$routes->group('matakuliah', static function ($routes) {
    $routes->get('', 'MataKuliah::index');
    $routes->get('tambah', 'MataKuliah::tambah');
    $routes->get('edit/(:any)', 'MataKuliah::edit/$1');
    $routes->post('submit', 'MataKuliah::submit');
    $routes->post('update', 'MataKuliah::update');
    $routes->get('delete/(:any)', 'MataKuliah::delete/$1');
});
$routes->group('perkuliahan', static function ($routes) {
    $routes->get('', 'Perkuliahan::index');
    $routes->get('tambah', 'Perkuliahan::tambah');
    $routes->get('edit/(:any)', 'Perkuliahan::edit/$1');
    $routes->post('submit', 'Perkuliahan::submit');
    $routes->post('update', 'Perkuliahan::update');
    $routes->get('delete/(:any)', 'Perkuliahan::delete/$1');
});

// Pertemuan 6 Session & Security
$routes->group('login', static function ($routes) {
    $routes->get('', 'Login::index');
    $routes->post('auth', 'Login::auth');
    $routes->get('logout', 'Login::logout');
});
$routes->group('register', static function ($routes) {
    $routes->get('', 'Register::index');
    $routes->post('save', 'Register::save');
});
$routes->group('pengguna', ['filter' => 'role:admin'], static function ($routes) {
    $routes->get('', 'Pengguna::index');
    $routes->get('tambah', 'Pengguna::tambah');
    $routes->get('edit/(:any)', 'Pengguna::edit/$1');
    $routes->post('submit', 'Pengguna::submit');
    $routes->post('update', 'Pengguna::update');
    $routes->get('delete/(:any)', 'Pengguna::delete/$1');
});
$routes->get('unauthorized', function() {
    return view('unauthorized');
});