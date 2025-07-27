<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/Projetos','ProjetoController::index');
$routes->get('/DetalheDoProjeto/(:num)','ProjetoController::DetalheDoProjeto/$1');

$routes->get('/adm/home','AdmController::home');
