<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->setAutoRoute(true);
$routes->get('/register', 'Register::index');
$routes->post('/register/process', 'Register::process');
$routes->get('/', 'Login::index');

$routes->post('/login/process', 'Login::process');
$routes->get('/login/process', 'Login::process');
$routes->get('/logout', 'Login::logout');

$routes->get('/dashboard', 'Home::dashboard');
$routes->get('/e_response', 'Home::e_response');

$routes->get('/tanya-ft', 'TanyaFT::index');
$routes->get('/pengajuan/tambah','TanyaFT::pengajuan');
$routes->get('/pengajuan/tanggapan/(:any)','TanyaFT::tanggapan/$1');
$routes->get('/pengajuan/detailPengajuan/(:any)','TanyaFT::detailPengajuan/$1');
$routes->post('/pengajuan/submit', 'TanyaFT::submit');