<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

// ******** Party routes *******
$routes->post('party/', 'Party::create');
$routes->patch('party/(:num)', 'Party::update/$1');
$routes->get('party/', 'Party::list');
$routes->get('party/(:num)', 'Party::retrieve/$1');
$routes->patch('party/confirm/(:num)', 'Party::confirm/$1');

// ******** GiftList routes *******
$routes->post('giftlist/', 'Giftlist::create');
$routes->patch('giftlist/', 'Giftlist::update');
$routes->get('giftlist/', 'Giftlist::list');
$routes->get('giftlist/(:num)', 'GiflList::retrieve/$1');
$routes->post('giftlist/activate', 'Giftlist::activate');