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
        $this->form_validation->set_rules('nomeMaterial', 'Nome do Material', 'trim|required');
        $this->form_validation->set_rules('descMaterial', 'Resumo do Post', 'trim|required');


        if ($this->form_validation->run() == TRUE) {


            //Upload de Arquivo
            $config['upload_path'] = './upload/docs/';
            $config['allowed_types'] = 'pdf|docx';
            $config['max_size'] = 4048;
            $config['encrypt_name'] = FALSE;

            $this->load->library('upload', $config);


            if (!$this->upload->do_upload('pdfMaterial')) {

                $this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert">' . $this->upload->display_errors() . '</div>');
                redirect('materiais/adicionarmateriais', 'refresh');
            } else {

                $inputAdicionar['nome_material'] = $this->input->post('nomeMaterial');
                $inputAdicionar['descricao_material'] = $this->input->post('descMaterial');
                $inputAdicionar['video_url'] = $this->input->post('videoMaterial');
                $inputAdicionar['ativo'] = $this->input->post('ativo');
                $inputAdicionar['arquivo'] = $this->upload->data('file_name');


                $this->materiais_model->adicionarMateriais($inputAdicionar);
                $this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert">Novo material incluído</div>');
                redirect('materiais', 'refresh');
            }
        } else {


            $data['titulo_pagina'] = 'Adicionar novo Material';

            //Load dos arquivos de layout
            $this->load->view('dashboard/header', $data);
            $this->load->view('dashboard/addMaterial');
            $this->load->view('dashboard/footer');
        }
    }


    public function editarmateriais($id = NULL)
    {


        if (!$id) {
            $this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert">Erro! Selecione um Material para Editar</div>');
            redirect('materiais', 'refresh');
        }


        $query = $this->materiais_model->materiaisID($id);


        if (!$query) {
            $this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert">Erro! Material não encontrado</div>');
            redirect('materiais', 'refresh');
        }


        $this->form_validation->set_rules('nomeMaterial', 'Nome do Material', 'trim|required');
        $this->form_validation->set_rules('descMaterial', 'Resumo do Post', 'trim|required');

        if ($this->form_validation->run() == TRUE) {

            $nome_documento = NULL;


            $config['upload_path'] = './upload/docs/';
            $config['allowed_types'] = 'pdf|docx';
            $config['max_size'] = 4048;
            $config['encrypt_name'] = FALSE;
            $this->load->library('upload', $config);


            if ($this->upload->do_upload('pdfMaterial')) {
                $nome_documento = $this->upload->data('file_name');
            }


            $inputEditar['nome_material'] = $this->input->post('nomeMaterial');
            $inputEditar['descricao_material'] = $this->input->post('descMaterial');
            $inputEditar['video_url'] = $this->input->post('videoMaterial');
            $inputEditar['ativo'] = $this->input->post('ativo');


            if ($nome_documento) {
                $inputEditar['arquivo'] = $nome_documento;
            }

            $this->materiais_model->atualizarMateriais($inputEditar, ['id' => $this->input->post('idMateriais')]);
            $this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert">Material atualizado com sucesso!</div>');
            redirect('materiais', 'refresh');
        } else {

            $data['titulo_pagina'] = 'Editar Material';
            $data['query'] = $query;

            //Load dos arquivos de layout
            $this->load->view('dashboard/header', $data);
            $this->load->view('dashboard/editMaterial');
            $this->load->view('dashboard/footer');
        }
    }



    public function apagarmateriais($id = NULL)
    {
        if (!$id) {
            $this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert">Erro! Você precisa selecionar um material.</div>');
            redirect('materiais', 'refresh');
        }

        $query = $this->materiais_model->materiaisID()($id);

        if (!$query) {
            $this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert">Erro, material não encontrado!</div>');
        }


        $this->materiais_model->deletarMateriais()($query->id);
        $this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert">Material apagado com sucesso!</div>');
        redirect('materiais', 'refresh');
    }


    public function ativarmateriais($id = NULL)
    {
        if (!$id) {
            $this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert">Erro! Você precisa selecionar um Material.</div>');
            redirect('materiais', 'refresh');
        }

        $query = $this->materiais_model->materiaisID($id);

        if (!$query) {
            $this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert">Erro, Material não encontrado!</div>');
        }


        $this->materiais_model->atualizarMateriais(['ativo' => 1], ['id' => $query->id]);
        $this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert">Material Atualizado com Sucesso :)</div>');
        redirect('materiais', 'refresh');
    }



    public function desativarmateriais($id = NULL)
    {
        if (!$id) {
            $this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert">Erro! Você precisa selecionar um Material.</div>');
            redirect('materiais', 'refresh');
        }

        $query = $this->materiais_model->materiaisID($id);

        if (!$query) {
            $this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert">Erro, Material não encontrado!</div>');
        }

        $this->materiais_model->atualizarMateriais(['ativo' => 0], ['id' => $query->id]);
        $this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert">Material Desativado com Sucesso :)</div>');
        redirect('materiais', 'refresh');
    }
}
