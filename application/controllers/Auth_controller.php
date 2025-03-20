<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_controller extends CI_Controller {
    public function tela_login(){
        $this->load->view('Tela_login_view');
    }

    public function verificacao_funcionario(){
        $email = $this->input->post('email');
        $senha = $this-> input-> post('senha');
        print_r($email);
        print_r($senha);

        $this->db->get_where('funcionarios', ['id'=>$id]);
        if($funcionarios){
            echo "achei func";
            header("location:perfil");
        } else {
            echo "nao achei";
            header("location:login");
        }
    }
}

