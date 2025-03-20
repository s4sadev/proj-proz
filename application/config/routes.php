<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

// Funcionarios
$route['funcionarios']['get'] = 'Funcionarios_controller/listar_funcionarios';
$route['formulario_funcionario']['get'] = 'Funcionarios_controller/formulario_funcionario';
$route['salva-funcionario']['post'] = 'Funcionarios_controller/add_funcionario';
//editar
$route['edita-funcionario']['get'] = 'Funcionarios_controller/edit_funcionario';
// $route['editar-funcionario']['post'] = 'Funcionarios_controller/edit_funcionario';
//verifica login
$route['login']['get'] = 'Auth_controller/tela_login';
$route['login']['post'] = 'Auth_controller/verificacao_funcionario';

// //rotas para perfil
// $route['perfil']['get'] = 'Funcionario_controller/funvionario_perfil;
