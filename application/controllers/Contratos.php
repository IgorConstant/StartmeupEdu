<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Contratos extends CI_Controller
{
    //Construtor
    public function __construct()
    {

        parent::__construct();


        $this->load->model('contrato_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->listarcontratos();
    }


    public function listarcontratos()
    {
        $data['titulo_site'] = 'Admin';
        $data['titulo_pagina'] = 'Contratos de Estudo';
        $data['contratos'] = $this->contrato_model->listarContratos();

        //Load dos arquivos de layout
        $this->load->view('dashboard/header', $data);
        $this->load->view('dashboard/listarContrato');
        $this->load->view('dashboard/footer');
    }

    public function adicionarcontrato()
    {

        $this->form_validation->set_rules('tituloContrato', 'Titulo do Contrato', 'trim|required');

        if ($this->form_validation->run() == TRUE) {

            $config['upload_path'] = './upload/docs/';
            $config['allowed_types'] = 'pdf|docx';
            $config['max_size'] = 4048;
            $config['encrypt_name'] = FALSE;

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('arquivoContrato')) {
                $this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert">' . $this->upload->display_errors() . '</div>');
                redirect('contratos/adicionarcontrato', 'refresh');
            } else {
                $inputAdicionarContrato['nome_contrato'] = $this->input->post('tituloContrato');
                $inputAdicionarContrato['arquivo_contrato'] = $this->upload->data('file_name');
                $inputAdicionarContrato['ativo'] = $this->input->post('ativo');

                $this->contrato_model->adicionarContrato($inputAdicionarContrato);
                $this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert">Contrato criado com sucesso!</div>');
                redirect('contratos', 'refresh');
            }
        } else {

            $data['titulo_site'] = 'Admin';
            $data['titulo_pagina'] = 'Adicionar novo contrato';

            $this->load->view('dashboard/header', $data);
            $this->load->view('dashboard/addContrato');
            $this->load->view('dashboard/footer');
        }
    }

    public function deletarcontrato($id = NULL)
    {
        if (!$id) {
            $this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert">Erro! Selecione um contrato!</div>');
            redirect('contratos', 'refresh');
        }

        $query = $this->contrato_model->contratoID($id);

        if (!$query) {
            $this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert">Erro! Arquivo do contrato, não encontrado</div>');
        }


        $this->contrato_model->deletarContrato($query->id);
        $this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert">Arquivo deletado com sucesso!</div>');
        redirect('contratos', 'refresh');
    }

    public function ativarcontrato($id = NULL)
    {
        if (!$id) {
            $this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert">Erro! Selecione um Arquivo.</div>');
            redirect('contratos', 'refresh');
        }

        $query = $this->contrato_model->contratoID($id);

        if (!$query) {
            $this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert">Erro, arquivo não encontrado</div>');
        }


        $this->contrato_model->atualizarContrato(['ativo' => 1], ['id' => $query->id]);
        $this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert">Arquivo atualizado com sucesso :)</div>');
        redirect('contratos', 'refresh');
    }

    public function desativarcontrato($id = NULL)
    {
        if (!$id) {
            $this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert">Erro! Selecione um arquivo</div>');
            redirect('contratos', 'refresh');
        }

        $query = $this->contrato_model->contratoID($id);

        if (!$query) {
            $this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert">Erro, arquivo não encontrado!</div>');
        }

        $this->contrato_model->atualizarContrato(['ativo' => 0], ['id' => $query->id]);
        $this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert">O Arquivo foi desativado com sucesso :)</div>');
        redirect('contratos', 'refresh');
    }
}
