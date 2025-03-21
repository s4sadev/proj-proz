<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Funcionarios_controller extends CI_Controller {
    public function listar_funcionarios() {
      //acessando dados do usuario
      $user = $this->session->userdata('user');
      
      //verificando se tem permissao
      if($user['tipo'] != 'gestor'){
        $this->session->set_flashdata('block', 'Voce nao tem permissao para acessar essa pagina');
        header('Location:perfil');
      }

      // $funcionarios ->  local(dessa pagina)
      $funcionarios = $this->funcionarios->get_all();
      
      $this->load->view('Funcionarios_view', ['funcionarios' => $funcionarios, 'titulo' => 'Listagem usuarios']);
    }

    public function formulario_funcionario(){
      //bloqueia acesso direto
      if(!$this->session->userdata('user')){
        header('Location:login');
        exit();
      }

      $this->load->view("Adicionar_funcionario_view");
    }

    public function add_funcionario (){

      //bloqueia acesso direto
      if(!$this->session->userdata('user')){
        header('Location:login');
        exit();
      }       
      
      $this->session->set_flashdata('sucess', 'Funcionario salvo com Sucesso!');

      $dadosFormulario = $this->input->post();  

      $this->funcionarios->insert($dadosFormulario);
      header('Location:' . base_url('funcionarios'));
      exit();

    }

    public function edit_funcionario () {
      //bloqueia acesso direto
      if(!$this->session->userdata('user')){
        header('Location:login');
        exit();
      }

      // pegando ID pela url
      $funcionarioId = $this->input->get('id');

      // pegando dados anteriores do funcionario
      $funcionarioDados = $this->funcionarios->get_id("funcionarios", $funcionarioId);
      
      $this->load->view("Editar_funcionario_view" ,['funcionario' => $funcionarioDados]);
    }

    public function edit_salva(){
      //bloqueia acesso direto
      if(!$this->session->userdata('user')){
        header('Location:login');
        exit();
      }

 

      //pegando dados do formulario
      $dadosFormulario = $this->input->post();
  
      // // pegando id
      $funcionarioId = $this->input->get('id');

      // // salvando
      $this->funcionarios->update_data($funcionarioId, $dadosFormulario);
      // print_r($dadosFormulario);

      header('Location:'. base_url('funcionarios'));

    }

    public function delete_funcionario(){
      //bloqueia acesso direto
      if(!$this->session->userdata('user')){
        header('Location:login');
        exit();
      }
      // // pegando id
      $funcionarioId = $this->input->get('id');

      $this->funcionarios->delete_id($funcionarioId);
      header('Location:'. base_url('funcionarios'));
    }

    public function funcionario_perfil(){
      //bloqueia acesso direto
      if(!$this->session->userdata('user')){
        header('Location:login');
        exit();
      }
       
      $usuario = $this->session->userdata('user_id');

      $this->load->view('Funcionario_perfil_view');
    }

    public function logout(){
      $this->session->sess_destroy();
      header('location:login');
    }

} 