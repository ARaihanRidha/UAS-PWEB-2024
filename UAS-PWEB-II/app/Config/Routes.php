<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/tanya-ft', 'TanyaFT::index');
$routes->get('/pengajuan/tambah','TanyaFT::pengajuan');
$routes->get('/pengajuan/tanggapan/(:any)','TanyaFT::tanggapan/$1');
$routes->get('/pengajuan/detailPengajuan/(:any)','TanyaFT::detailPengajuan/$1');

$routes->get('/dashboard', 'Home::dashboard');
$routes->get('/e_response', 'Home::e_response');
$routes->get('/halaman_register', 'Register::index');
$routes->post('/register/process', 'Register::process');
$routes->get('/halaman_login', 'Login::index');
$routes->post('/login/process', 'Login::process');
$routes->get('/logout', 'Login::logout');
$routes->get('/', 'Home::index');
$routes->post('/pengajuan/submit', 'TanyaFT::submit');





