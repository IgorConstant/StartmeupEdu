
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Site extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('text');
        $this->load->model('site_model');

        //Load helper Data
        $this->load->helper('date');
        $this->load->helper('funcoes_helper');
    }


    public function index()
    {

        $data['titulo'] = 'Startmeup Edu';
        $data['mentores'] = $this->site_model->listarTutores();

        $this->load->view('web/layout/header', $data);
        $this->load->view('web/index');
        $this->load->view('web/layout/footer');
    }

    public function empresas()
    {
        $data['titulo'] = 'Startmeup Edu - Para Empresas';

        $this->load->view('web/layout/header', $data);
        $this->load->view('web/para-empresas');
        $this->load->view('web/layout/footer');
    }

    public function politica()
    {
        $data['titulo'] = 'Startmeup Edu - Politica de Privacidade';

        $this->load->view('web/layout/header', $data);
        $this->load->view('web/politica-de-privacidade');
        $this->load->view('web/layout/footer');
    }


    public function blog()
    {
        $data['titulo'] = 'Startmeup Edu - Blog';
        $data['postsblog'] = $this->site_model->listarPosts();

        $this->load->view('web/layout/header', $data);
        $this->load->view('web/blog');
        $this->load->view('web/layout/footer');
    }

    public function materiais()
    {
        $data['titulo'] = 'Startmeup Edu - Materiais Gratuitos';
        $data['postsblog'] = $this->site_model->listarMateriais();

        $this->load->view('web/layout/header', $data);
        $this->load->view('web/materiais-gratuitos');
        $this->load->view('web/layout/footer');
    }
}
