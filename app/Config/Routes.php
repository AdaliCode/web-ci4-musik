<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/track/(:segment)', 'Home::detailSong/$1');
$routes->setAutoRoute(true);
