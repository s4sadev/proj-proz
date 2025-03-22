<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_controller extends CI_Controller {
    public function tela_login(){
        $this->load->view('Tela_login_view');
    }

    public function verificacao_funcionario(){
        $this->load->library('session');

        //pegando dados
        $email = $this->input->post('email');
        $senha = $this-> input-> post('senha');
        

        //pegando no banco de dados
        $funcionario = $this->funcionarios->get_user($email,$senha);
        
        // guardando id para uso futuro

        // validando se existe
        if($funcionario){
            $this->session->set_userdata('user',array(
                'id'=> $funcionario['id'],
                'tipo'=> $funcionario['tipo']
            )); 
            $this->session->set_flashdata('sucesso',"Logado com sucesso");
            echo "achei func";
            header("location:perfil");

        }

        else {
            $this->session->set_flashdata('fail',"Credenciais incorretas");
            echo "nao achei";
            header("location:login");
        }

    }

}

