<?php
/**
 * Classe de autenticação de usuários
 */
class Funcionarios_model extends CI_model {
    public function get_all() {
        return $this->db->get("funcionarios")->result_array();
    }
}