<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Materiais_model extends CI_Model
{

    public function listarMateriais()
    {
        return $this->db->get('materiais')->result();
    }


    public function adicionarMateriais($dados = NULL)
    {
        if (is_array($dados)) {
            $this->db->insert('materiais', $dados);
        }
    }

    public function materiaisID($id = NULL)
    {
        if ($id) {
            $this->db->where('id', $id);
            $this->db->limit(1);
            return $this->db->get('materiais')->row();
        }
    }


    public function deletarMateriais($id = NULL)
    {
        if ($id) {
            $this->db->delete('materiais', ['id' => $id]);
        }
    }


    public function atualizarMateriais($dados = NULL, $condicao = NULL)
    {
        if (is_array($dados) && is_array($condicao)) {
            $this->db->update('materiais', $dados, $condicao);
        }
    }
}
