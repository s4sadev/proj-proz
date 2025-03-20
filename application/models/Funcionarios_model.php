<?php
/**
 * Classe de autenticação de usuários
 */
class Funcionarios_model extends CI_model {
    
    // pegar TODOS os funcionarios
    public function get_all() {
        return $this->db->get("funcionarios")->result_array();
    }

    // Inserir informaões de um novo funcionario
    public function insert($dadosFormulario){
        $this->db->insert('funcionarios', $dadosFormulario);
    }

    // pegar os dados de um funcionario pela id
    public function get_id($table, $id) {
        return $this->db->get_where($table, array('id' => $id))-> row_array();

    }

    // public function update($dado){
    //     $this->db->get(funcio)
    // }



}

// acessar -> consultar o banco
//