<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'TanyaFT::index');
$routes->get('/tanya-ft', 'TanyaFT::index');
$routes->get('/pengajuan/tambah','TanyaFT::pengajuan');
$routes->get('/pengajuan/tanggapan','TanyaFT::tanggapan');
$routes->get('/pengajuan/detailPengajuan','TanyaFT::detailPengajuan');




