<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Materiais extends CI_Controller
{
    //Construtor
    public function __construct()
    {

        parent::__construct();


        $this->load->model('materiais_model');
        $this->load->library('form_validation');
    }


    public function index()
    {
        $this->listarmateriais();
    }

    public function listarmateriais()
    {


        $data['titulo_site'] = 'Admin';
        $data['titulo_pagina'] = 'Materiais Gratuitos';
        $data['materiais'] = $this->materiais_model->listarMateriais();

        $this->load->view('dashboard/header', $data);
        $this->load->view('dashboard/listarMateriais');
        $this->load->view('dashboard/footer');
    }

    public function adicionarmateriais()
    {
       
    }
}
