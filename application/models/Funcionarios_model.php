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
        return $this->db->get_where($table, array('id' => $id))-> row_array(); // SELECT * FROM tabela WHERE campo = valor;


    }

    public function update_data($id, $dado){
        $this->db->where('id', $id)->update('funcionarios', $dado);
        // SELECT * FROM tabela WHERE campo = valor;

    }

    public function delete_id($id){
        $this->db->where('id',$id)->delete('funcionarios');
    }

    public function get_user($email,$senha){
        return $this->db->where([
            'email' => $email,
            'senha' => $senha
        ])->get('funcionarios')-> row_array();
    }
}

// acessar -> consultar o banco
//