<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    public function index()
    {
        $data['titulo_pagina'] = 'Admin';


        $this->load->view('dashboard/header', $data);
        $this->load->view('dashboard/main');
        $this->load->view('dashboard/footer');
    }
}
