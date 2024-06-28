<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/dashboard', 'Home::dashboard');
$routes->get('/e_response', 'Home::e_response');
