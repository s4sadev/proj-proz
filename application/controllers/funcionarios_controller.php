<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Funcionarios_controller extends CI_Controller {
    public function listar_funcionarios() {
      $funcionarios = $this->funcionarios->get_all();

      $this->load->view('Funcionarios_view', 
        ['funcionarios' => $funcionarios]
      );
    }
}