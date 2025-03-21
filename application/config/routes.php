<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

// GET
$route['funcionarios']['get'] = 'Funcionarios_controller/listar_funcionarios';

// CREATE
$route['formulario/funcionario']['get'] = 'Funcionarios_controller/formulario_funcionario';
$route['salva/funcionario']['post'] = 'Funcionarios_controller/add_funcionario';

//UPDADE
$route['editar/funcionario']['get'] = 'Funcionarios_controller/edit_funcionario';
$route['editar/funcionario/salvar']['post'] = 'Funcionarios_controller/edit_salva';

// $route['editar-funcionario']['post'] = 'Funcionarios_controller/edit_funcionario';

//DELETE
$route['remove/funcionario']['get'] = 'Funcionarios_controller/delete_funcionario';


//verifica login
$route['login']['get'] = 'Auth_controller/tela_login';
$route['login']['post'] = 'Auth_controller/verificacao_funcionario';

// //rotas para perfil
$route['perfil']['get'] = 'Funcionarios_controller/funcionario_perfil';

// logout
$route['sair'] = 'Funcionarios_controller/logout';