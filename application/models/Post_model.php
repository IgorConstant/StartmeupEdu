<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Post_model extends CI_Model
{


    //Listar os Posts
    public function listarPosts()
    {
        return $this->db->get('posts')->result();
    }


    //Cadastrar novos posts
    public function criarPost($dados = NULL)
    {
        if (is_array($dados)) {
            $this->db->insert('posts', $dados);
        }
    }

    //Pegar post pela ID
    public function getPostID($id = NULL)
    {
        if ($id) {
            $this->db->where('id', $id);
            $this->db->limit(1);
            return $this->db->get('posts')->row();
        }
    }

    //Apagar Post
    public function apagarPost($id = NULL)
    {
        if ($id) {
            $this->db->delete('posts', ['id' => $id]);
        }
    }

    //Atualizar Post
    public function atualizarPost($dados = NULL, $condicao = NULL)
    {
        if (is_array($dados) && is_array($condicao)) {
            $this->db->update('posts', $dados, $condicao);
        }
    }
}
