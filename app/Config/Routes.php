<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/Projetos','ProjetoController::index');
$routes->get('/DetalheDoProjeto/(:num)','ProjetoController::DetalheDoProjeto/$1');



$routes->get('/adm/home','AdmController::home');
$routes->post('/adm/edit/homeTxt','AdmController::editTxtHome');
$routes->post('/adm/edit/addTecnologia','AdmController::addTecnologia');

$routes->get('adm/tecnologia/(:num)','AdmController::detalheTecnologia/$1');
$routes->get('/adm/exluir/tecnologia/(:num)','AdmController::excluirTecnologia/$1');

$routes->get('adm/criar/projeto','AdmController::criarProjeto');
$routes->post('adm/criar/projeto','AdmController::finalizarProjeto');

$routes->get('adm/editar/projeto/(:num)','AdmController::editarProjeto/$1');
$routes->post('adm/editar/projeto/(:num)','AdmController::finalizarEdicaoProjeto/$1');

$routes->get('adm','AdmController::adm');
