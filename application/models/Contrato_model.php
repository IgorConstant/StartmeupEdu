<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Contrato_model extends CI_Model
{

    public function listarContratos()
    {
        return $this->db->get('contratos')->result();
    }


    public function adicionarContrato($dados = NULL)
    {
        if (is_array($dados)) {
            $this->db->insert('contratos', $dados);
        }
    }

    public function contratoID($id = NULL)
    {
        if ($id) {
            $this->db->where('id', $id);
            $this->db->limit(1);
            return $this->db->get('contratos')->row();
        }
    }


    public function deletarContrato($id = NULL)
    {
        if ($id) {
            $this->db->delete('contratos', ['id' => $id]);
        }
    }


    public function atualizarContrato($dados = NULL, $condicao = NULL)
    {
        if (is_array($dados) && is_array($condicao)) {
            $this->db->update('contratos', $dados, $condicao);
        }
    }
}
