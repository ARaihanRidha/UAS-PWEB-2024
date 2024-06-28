<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->setAutoRoute(true);
$routes->get('/halaman_register', 'Register::index');
// $routes->post('/register/process', 'Register::process');
$routes->get('/halaman_login', 'Login::index');
// $routes->post('/login/process', 'Login::process');
// $routes->get('/logout', 'Login::logout');
$routes->get('/', 'Home::index');


