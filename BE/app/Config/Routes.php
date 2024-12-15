<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

// ******** Party routes *******
$routes->post('party/', 'Party::create');
//$routes->patch('party/(:num)', 'Party::update/$1');
//$routes->get('party/', 'Party::list');
//$routes->get('party/(:num)', 'Party::retrieve/$1');
$routes->get('party/confirm/(:num)', 'Party::confirm/$1');

// ******** GiftList routes *******
//$routes->post('giftlist/', 'Giftlist::create');
//$routes->patch('giftlist/', 'Giftlist::update');
//$routes->get('giftlist/', 'Giftlist::list');
//$routes->get('giftlist/(:num)', 'GiflList::retrieve/$1');
//$routes->post('giftlist/activate', 'Giftlist::activate');

// ******** Events routes *******
//$routes->post('events/', 'Events::create');
//$routes->patch('events/', 'Events::update');
//$routes->get('events/', 'Events::list');
//$routes->get('events/(:num)', 'Events::retrieve/$1');
//$routes->post('events/activate', 'Events::activate');

//My Account routes
$routes->get('myaccount/(:num)', 'Myaccount::index/$1');

//LOGIN
$routes->get('login/', 'Login::index');
