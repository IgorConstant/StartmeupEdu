<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tutores_model extends CI_Model
{

    public function listarTutores()
    {
        return $this->db->get('tutores')->result();
    }


    public function cadastrarTutor($dados = NULL)
    {
        if (is_array($dados)) {
            $this->db->insert('tutores', $dados);
        }
    }

    public function tutorID($id = NULL)
    {
        if ($id) {
            $this->db->where('id', $id);
            $this->db->limit(1);
            return $this->db->get('tutores')->row();
        }
    }


    public function deletarTutor($id = NULL)
    {
        if ($id) {
            $this->db->delete('tutores', ['id' => $id]);
        }
    }


    public function atualizarTutor($dados = NULL, $condicao = NULL)
    {
        if (is_array($dados) && is_array($condicao)) {
            $this->db->update('tutores', $dados, $condicao);
        }
    }
}
