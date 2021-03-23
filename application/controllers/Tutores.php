<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tutores extends CI_Controller
{

    //Construtor
    public function __construct()
    {

        parent::__construct();


        $this->load->model('tutores_model');
        $this->load->library('form_validation');
    }


    public function index()
    {
        $this->listartutores();
    }


    public function listartutores()
    {

        //Titulo
        $data['titulo_site'] = 'Admin';
        $data['titulo_pagina'] = 'Mentores';
        $data['tutores'] = $this->tutores_model->listarTutores();

        //Load dos arquivos de layout
        $this->load->view('dashboard/header', $data);
        $this->load->view('dashboard/listarTutores');
        $this->load->view('dashboard/footer');
    }

    public function adicionartutores()
    {
        $this->form_validation->set_rules('nomeTutor', 'Nome Tutor', 'trim|required');
        $this->form_validation->set_rules('sobrenomeTutor', 'Nome Tutor', 'trim|required');
        $this->form_validation->set_rules('linkedinTutor', 'Linkedin', 'trim|required');
        $this->form_validation->set_rules('competenciasTutor', 'Competencias do Tutor', 'trim|required');


        if ($this->form_validation->run() == TRUE) {


            //Upload da Imagem
            $config['upload_path'] = './upload/tutores/';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size'] = 4048;
            $config['encrypt_name'] = TRUE;

            $this->load->library('upload', $config);


            if (!$this->upload->do_upload('fotoTutor')) {

                $this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert">' . $this->upload->display_errors() . '</div>');
                redirect('tutores/adicionartutores', 'refresh');
            } else {


                $inputAdicionarTutores['nome_tutor'] = $this->input->post('nomeTutor');
                $inputAdicionarTutores['sobrenome_tutor'] = $this->input->post('sobrenomeTutor');
                $inputAdicionarTutores['linkedin'] = $this->input->post('linkedinTutor');
                $inputAdicionarTutores['curriculo'] = $this->input->post('competenciasTutor');
                $inputAdicionarTutores['ativo'] = $this->input->post('ativo');
                $inputAdicionarTutores['foto_perfil'] = $this->upload->data('file_name');


                $this->tutores_model->cadastrarTutor($inputAdicionarTutores);
                $this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert">Tutor cadastrado com sucesso!</div>');
                redirect('tutores', 'refresh');
            }
        } else {


            $data['titulo_pagina'] = 'Cadastrar Mentor';

            //Load dos arquivos de layout
            $this->load->view('dashboard/header', $data);
            $this->load->view('dashboard/addTutor');
            $this->load->view('dashboard/footer');
        }
    }

    public function editartutores($id = NULL)
    {
        if (!$id) {
            $this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert">Erro! Selecione um Mentor para Editar</div>');
            redirect('tutores', 'refresh');
        }


        $query = $this->tutores_model->tutorID($id);


        if (!$query) {
            $this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert">Erro! Mentor não encontrado</div>');
            redirect('tutores', 'refresh');
        }


        $this->form_validation->set_rules('nomeTutor', 'Nome Tutor', 'trim|required');
        $this->form_validation->set_rules('sobrenomeTutor', 'Nome Tutor', 'trim|required');
        $this->form_validation->set_rules('linkedinTutor', 'Linkedin', 'trim|required');
        $this->form_validation->set_rules('competenciasTutor', 'Competencias do Tutor', 'trim|required');

        if ($this->form_validation->run() == TRUE) {

            $nome_imagem = NULL;

            //Upload da Imagem
            $config['upload_path'] = './upload/tutores/';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size'] = 4048;
            $config['encrypt_name'] = TRUE;
            $this->load->library('upload', $config);


            if ($this->upload->do_upload('fotoTutor')) {
                $nome_imagem = $this->upload->data('file_name');
            }


            $inputEditarTutores['nome_tutor'] = $this->input->post('nomeTutor');
            $inputEditarTutores['sobrenome_tutor'] = $this->input->post('sobrenomeTutor');
            $inputEditarTutores['linkedin'] = $this->input->post('linkedinTutor');
            $inputEditarTutores['curriculo'] = $this->input->post('competenciasTutor');
            $inputEditarTutores['ativo'] = $this->input->post('ativo');


            if ($nome_imagem) {
                $inputEditarTutores['foto_perfil'] = $nome_imagem;
            }

            $this->tutores_model->atualizarTutor($inputEditarTutores, ['id' => $this->input->post('idTutor')]);
            $this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert">Tutor atualizado com sucesso</div>');
            redirect('tutores', 'refresh');
        } else {

            $data['titulo_pagina'] = 'Editar Dados do Mentor';
            $data['query'] = $query;

            //Load dos arquivos de layout
            $this->load->view('dashboard/header', $data);
            $this->load->view('dashboard/editTutor');
            $this->load->view('dashboard/footer');
        }
    }

    public function deletartutores($id = NULL)
    {
        if (!$id) {
            $this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert">Erro! Selecione um tutor.</div>');
            redirect('tutores', 'refresh');
        }

        $query = $this->tutores_model->tutorID($id);

        if (!$query) {
            $this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert">Erro! O Tutor não foi encontrado.</div>');
        }


        $this->tutores_model->deletarTutor($query->id);
        $this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert">Tutor deletado com sucesso!</div>');
        redirect('tutores', 'refresh');
    }

    public function ativartutor($id = NULL)
    {
        if (!$id) {
            $this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert">Erro! Selecione um Tutor.</div>');
            redirect('tutores', 'refresh');
        }

        $query = $this->tutores_model->tutorID($id);

        if (!$query) {
            $this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert">Erro, Tutor não encontrado</div>');
        }


        $this->tutores_model->atualizarTutor(['ativo' => 1], ['id' => $query->id]);
        $this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert">Tutor atualizado com sucesso :)</div>');
        redirect('tutores', 'refresh');
    }



    public function desativartutor($id = NULL)
    {
        if (!$id) {
            $this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert">Erro! Selecione um tutor</div>');
            redirect('tutores', 'refresh');
        }

        $query = $this->tutores_model->tutorID($id);

        if (!$query) {
            $this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert">Erro, Tutor não encontrado!</div>');
        }

        $this->tutores_model->atualizarTutor(['ativo' => 0], ['id' => $query->id]);
        $this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert">O Tutor foi desativado com sucesso :)</div>');
        redirect('tutores', 'refresh');
    }
}
