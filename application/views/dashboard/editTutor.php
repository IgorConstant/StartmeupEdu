<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2"><?php echo $titulo_pagina ?></h1>
    </div>

    <section id="error-area">
        <div class="row">
            <div class="col-12 col-sm-12">
                <?= validation_errors('<div class="alert alert-danger" role="alert">', '</div>') ?>
                <?= $this->session->userdata('msg'); ?>
            </div>
        </div>
    </section>

    <div class="row">
        <div class="col-12 col-sm-12 mb-4">
            <?= form_open_multipart() ?>

            <div class="form-group">
                <?= form_label('Foto Tutor') ?>
                <br />
                <img class="img-fluid post-destaque" src="<?php echo base_url('upload/tutores/' . $query->foto_perfil) ?>" alt="<?= $query->nome_tutor ?>">
            </div>

            <div class="form-group">
                <button type="button" class="btn btn-outline-warning mb-3 btn-trocar"><i class="fas fa-exchange-alt"></i> Trocar foto</button>
                <button type="button" class="btn btn-outline-danger mb-3 btn-cancelar"><i class="fas fa-ban"></i> Cancelar</button>
                <input type="file" name="fotoTutor" class="form-control-file input-change-file hide" id="exampleFormControlFile1" required="" disabled="">
            </div>


            <div class="form-group">
                <?= form_label('Nome Tutor') ?>
                <?= form_input([
                    'type' => 'text',
                    'class' => 'form-control',
                    'name' => 'nomeTutor',
                    'value' => $query->nome_tutor
                ]) ?>
            </div>
            <div class="form-group">
                <?= form_label('Sobrenome Tutor') ?>
                <?= form_input([
                    'type' => 'text',
                    'class' => 'form-control',
                    'name' => 'sobrenomeTutor',
                    'value' => $query->sobrenome_tutor
                ]) ?>
            </div>
            <div class="form-group">
                <?= form_label('Linkedin') ?>
                <?= form_input([
                    'type' => 'text',
                    'class' => 'form-control',
                    'name' => 'linkedinTutor',
                    'placeholder' => 'Copie e cole a URL do seu Perfil',
                    'value' => $query->linkedin
                ]) ?>
            </div>
            <div class="form-group">
                <?= form_label('Competências do Tutor') ?>
                <?= form_textarea([
                    'type' => 'text',
                    'class' => 'form-control',
                    'name' => 'competenciasTutor',
                    'value' => $query->curriculo
                ]) ?>
            </div>

            <div class="form-group">
                <?= form_label('Ativo') ?>
                <?= form_dropdown('ativo', [1 => 'Sim', 0 => 'Não'], ($query->ativo == 1 ? 1 : 0), ['class' => 'form-control']) ?>
            </div>

            <hr />
            <?= form_hidden('idTutor', $query->id); ?>
            <?= form_submit('submit', 'Atualizar Dados do Tutor', ['class' => 'btn btn-success mt-5 mb-5']) ?>

            <?= form_close() ?>
        </div>
    </div>
</main>