<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Funcionarios_controller extends CI_Controller {
    public function listar_funcionarios() {
      // $funcionarios ->  local(dessa pagina)
      $funcionarios = $this->funcionarios->get_all();
      echo print_r($funcionarios);
      $this->load->view('Funcionarios_view', ['funcionarios' => $funcionarios, 'titulo' => 'Listagem usuarios']);
    }
    public function formulario_funcionario(){
      $this->load->view("Adicionar_funcionario_view");
    }

    public function add_funcionario (){
      $dadosFormulario = $this->input->post;
      $this->funcionarios->insert($dadosFuncionario);
      header("location:funcionario");

    }

    public function edit_funcionario () {
      $funcionarioId = $this->input->get('id');
      echo $funcionarioId;
      $funcionarioDados = $this->funcionarios->get_id("funcionarios", $funcionarioId);
      $this->load->view("Editar_funcionario_view" ,['funcionario' => $funcionarioDados]);
    }

} 