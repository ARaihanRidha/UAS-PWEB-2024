<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'TanyaFT::index');
$routes->get('/tanya-ft', 'TanyaFT::index');
$routes->get('/pengajuan/tambah','TanyaFT::pengajuan');



