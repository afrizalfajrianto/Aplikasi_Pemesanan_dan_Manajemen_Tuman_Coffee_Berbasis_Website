<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Coffee::index');
$routes->get('/product', 'Coffee::product');
$routes->get('/profile', 'Coffee::profile');
$routes->get('/address', 'Coffee::address');
$routes->get('/bag', 'Coffee::bag');
$routes->get('/order', 'Coffee::order');
$routes->get('/about', 'Coffee::about');
$routes->get('/contact', 'Coffee::contact');
$routes->get('/coffee', 'Coffee::coffee');
$routes->get('/trending_coffee', 'Coffee::trending');
$routes->get('/login', 'Coffee::login');

