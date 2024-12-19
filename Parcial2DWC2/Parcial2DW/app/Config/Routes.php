<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/CVistaF1', 'CVistas::inicio');

$routes->get('/CFormF1', 'CForms::inicio');

$routes->get('/CResultF1', 'CResultado::inicio');