<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('index', 'Home::index');
$routes->get('features', 'Home::ifeatures');
$routes->get('about', 'Home::iabout');
$routes->get('menu', 'Home::imenu');
$routes->get('team', 'Home::iteam');
$routes->get('gallery', 'Home::igallery');
$routes->get('contact', 'Home::icontact');

//Sudents Routes
$routes->get('/teams', 'TeamController::index');
$routes->get('/teams/create', 'TeamController::createTeam');
$routes->post('/teams/store', 'TeamController::storeTeam');
$routes->get('/teams/edit/(:num)', 'TeamController::editTeam/$1');
$routes->post('/teams/update/(:num)', 'TeamController::updateTeam/$1');
$routes->get('/teams/delete/(:num)', 'TeamController::deleteTeam/$1');