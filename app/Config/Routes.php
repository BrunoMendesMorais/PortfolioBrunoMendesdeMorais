<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/Projetos', 'ProjetoController::index');
$routes->get('/DetalheDoProjeto/(:num)', 'ProjetoController::DetalheDoProjeto/$1');

$routes->group("adm",  ['filter' => 'Adm'], function ($routes) {

    $routes->get('home', 'AdmController::home');

    $routes->post('edit/homeTxt', 'AdmController::editTxtHome');
    $routes->post('edit/addTecnologia', 'AdmController::addTecnologia');

    $routes->get('tecnologia/(:num)', 'AdmController::detalheTecnologia/$1');
    $routes->get('exluir/tecnologia/(:num)', 'AdmController::excluirTecnologia/$1');

    $routes->get('excluir/projeto/(:num)', 'AdmController::excluirProjeto/$1');

    $routes->get('criar/projeto', 'AdmController::criarProjeto');
    $routes->post('criar/projeto', 'AdmController::finalizarProjeto');

    $routes->get('editar/projeto/(:num)', 'AdmController::editarProjeto/$1');
    $routes->post('editar/projeto/(:num)', 'AdmController::finalizarEdicaoProjeto/$1');
});

$routes->get('adm', 'AdmController::adm');

$routes->post('/admLogin', 'AdmController::login');
