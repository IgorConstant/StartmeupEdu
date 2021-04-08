
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Site_model extends CI_Model
{

    public function listarTutores()
    {
        $this->db->where('ativo', 1);
        return $this->db->get('tutores')->result();
    }

    //LISTAR POSTS
    public function listarPosts()
    {
        $this->db->where('ativo', 1);
        return $this->db->get('posts')->result();
    }


    public function listarMateriais()
    {
        $this->db->where('ativo', 1);
        return $this->db->get('materiais')->result();
    }
}

/* End of file ModelName.php */
