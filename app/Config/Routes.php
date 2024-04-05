<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home2::index');
$routes->post('/party/register', 'Party::register');
$routes->get('/party', 'Party::listParty');
$routes->get('/party/(:num)', 'Party::getParty/$1');
$routes->post('/party', 'Party::register');
$routes->get('/party/registerConfirmation/(:num)', 'Party::registerConfirmation/$1');