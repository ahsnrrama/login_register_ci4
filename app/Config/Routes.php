<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'User::index');
$routes->get('/soal', 'User::soal');

$routes->get('/admin', 'Admin::index',['filter' => 'role:admin']);
$routes->get('/admin/index', 'Admin::index',['filter' => 'role:admin']);
$routes->get('/admin/(:num)', 'Admin::detail/$1',['filter' => 'role:admin']);