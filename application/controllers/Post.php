<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Post extends CI_Controller
{

    //Construtor
    public function __construct()
    {

        parent::__construct();

        //Load do Model
        $this->load->model('post_model');

        //Load Form_validation
        $this->load->library('form_validation');

        //Load helper Data
        $this->load->helper('date');
        $this->load->helper('funcoes_helper');
    }


    //Função Inicial do Controller
    public function index()
    {
        $this->listar();
    }


    //Função para listar os posts
    public function listar()
    {

        //Titulo
        $data['titulo_site'] = 'Admin';
        $data['titulo_pagina'] = 'Listar Posts';
        $data['posts'] = $this->post_model->listarPosts();

        //Load dos arquivos de layout
        $this->load->view('dashboard/header', $data);
        $this->load->view('dashboard/listarPosts');
        $this->load->view('dashboard/footer');
    }


    // Função para Adicionar novos Posts
    public function adicionar()
    {
        $this->form_validation->set_rules('tituloPost', 'Titulo do Post', 'trim|required');
        $this->form_validation->set_rules('resumoPost', 'Resumo do Post', 'trim|required');
        $this->form_validation->set_rules('textoPost', 'Texto do Post', 'trim|required');
        $this->form_validation->set_rules('categoriaPost', 'Categoria do Post', 'trim|required');

        if ($this->form_validation->run() == TRUE) {


            //Upload da Imagem
            $config['upload_path'] = './upload/blog/';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size'] = 2048;
            $config['encrypt_name'] = TRUE;

            $this->load->library('upload', $config);


            if (!$this->upload->do_upload('imgPost')) {

                $this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert">' . $this->upload->display_errors() . '</div>');
                redirect('post/adicionar', 'refresh');
            } else {

                $inputAdicionar['nome_post'] = $this->input->post('tituloPost');
                $inputAdicionar['resumo'] = $this->input->post('resumoPost');
                $inputAdicionar['categoria'] = $this->input->post('categoriaPost');
                $inputAdicionar['texto_post'] = $this->input->post('textoPost');
                $inputAdicionar['ativo'] = $this->input->post('ativo');
                $inputAdicionar['data'] = unix_to_human(now('America/Sao_Paulo'));
                $inputAdicionar['imagem'] = $this->upload->data('file_name');


                $this->post_model->criarPost($inputAdicionar);
                $this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert">Post criado com sucesso</div>');
                redirect('post', 'refresh');
            }
        } else {


            $data['titulo_pagina'] = 'Adicionar Post';

            //Load dos arquivos de layout
            $this->load->view('dashboard/header', $data);
            $this->load->view('dashboard/addPost');
            $this->load->view('dashboard/footer');
        }
    }


    //Função para Editar o Post
    public function editar($id = NULL)
    {


        if (!$id) {
            $this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert">Erro! Selecione um Post para Editar</div>');
            redirect('post', 'refresh');
        }


        $query = $this->post_model->getPostID($id);


        if (!$query) {
            $this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert">Erro! Post não encontrado</div>');
            redirect('post', 'refresh');
        }


        $this->form_validation->set_rules('tituloPost', 'Titulo do Post', 'trim|required');
        $this->form_validation->set_rules('resumoPost', 'Resumo do Post', 'trim|required');
        $this->form_validation->set_rules('categoriaPost', 'Categoria do Post', 'trim|required');
        $this->form_validation->set_rules('textoPost', 'Texto do Post', 'trim|required');

        if ($this->form_validation->run() == TRUE) {

            $nome_imagem = NULL;

            //Upload da Imagem
            $config['upload_path'] = './upload/blog/';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size'] = 2048;
            $config['encrypt_name'] = TRUE;
            $this->load->library('upload', $config);


            if ($this->upload->do_upload('imgPost')) {
                $nome_imagem = $this->upload->data('file_name');
            }


            $inputEditar['nome_post'] = $this->input->post('tituloPost');
            $inputEditar['resumo'] = $this->input->post('resumoPost');
            $inputEditar['texto_post'] = $this->input->post('textoPost');
            $inputEditar['categoria'] = $this->input->post('categoriaPost');
            $inputEditar['ativo'] = $this->input->post('ativo');


            if ($nome_imagem) {
                $inputEditar['imagem'] = $nome_imagem;
            }

            $this->post_model->atualizarPost($inputEditar, ['id' => $this->input->post('idPost')]);
            $this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert">Post atualizado com sucesso!</div>');
            redirect('post', 'refresh');
        } else {

            $data['titulo_pagina'] = 'Editar Post';
            $data['query'] = $query;

            //Load dos arquivos de layout
            $this->load->view('dashboard/header', $data);
            $this->load->view('dashboard/editPost');
            $this->load->view('dashboard/footer');
        }
    }


    //Função para Deletar 
    public function apagar($id = NULL)
    {
        if (!$id) {
            $this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert">Erro! Você precisa selecionar um post.</div>');
            redirect('post', 'refresh');
        }

        $query = $this->post_model->getPostID($id);

        if (!$query) {
            $this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert">Erro, post não encontrado!</div>');
        }


        $this->post_model->apagarPost($query->id);
        $this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert">Post apagado com sucesso!</div>');
        redirect('post', 'refresh');
    }


    public function ativar($id = NULL)
    {
        if (!$id) {
            $this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert">Erro! Você precisa selecionar um Post.</div>');
            redirect('post', 'refresh');
        }

        $query = $this->post_model->getPostID($id);

        if (!$query) {
            $this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert">Erro, Post não encontrado!</div>');
        }


        $this->post_model->atualizarPost(['ativo' => 1], ['id' => $query->id]);
        $this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert">Post Atualizado com Sucesso :)</div>');
        redirect('post', 'refresh');
    }



    public function desativar($id = NULL)
    {
        if (!$id) {
            $this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert">Erro! Você precisa selecionar um Post.</div>');
            redirect('post', 'refresh');
        }

        $query = $this->post_model->getPostID($id);

        if (!$query) {
            $this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert">Erro, Post não encontrado!</div>');
        }

        $this->post_model->atualizarPost(['ativo' => 0], ['id' => $query->id]);
        $this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert">Post Desativado com Sucesso :)</div>');
        redirect('post', 'refresh');
    }
}
