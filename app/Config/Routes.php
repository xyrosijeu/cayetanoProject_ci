<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

// residents routes get
$routes->get('/residents','ResidentsController::index');
$routes->get('/residents/create','ResidentsController::createResident');
$routes->get('/residents/edit/(:num)','ResidentsController::editResident/$1');
$routes->get('/residents/delete/(:num)','ResidentsController::deleteResident/$1');
// residents routes post
$routes->post('/login','Login::login');
$routes->post('/residents/store','ResidentsController::storeResident');
$routes->post('/residents/update/(:num)','ResidentsController::updateResident/$1');