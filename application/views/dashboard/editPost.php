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
                <?= form_label('Titulo') ?>
                <?= form_input([
                    'type' => 'text',
                    'class' => 'form-control',
                    'name' => 'tituloPost',
                    'value' => $query->nome_post
                ]) ?>
            </div>
            <div class="form-group">
                <?= form_label('Resumo') ?>
                <?= form_input([
                    'type' => 'text',
                    'class' => 'form-control',
                    'name' => 'resumoPost',
                    'value' => $query->resumo
                ]) ?>
            </div>
            <div class="form-group">
                <?= form_label('Categoria') ?>
                <?= form_input([
                    'type' => 'text',
                    'class' => 'form-control',
                    'name' => 'categoriaPost',
                    'value' => $query->categoria
                ]) ?>
            </div>
            <div class="form-group">
                <?= form_label('Texto Post') ?>
                <?= form_textarea([
                    'type' => 'text',
                    'class' => 'form-control',
                    'name' => 'textoPost',
                    'value' => $query->texto_post
                ]) ?>
            </div>

            <div class="form-group">
                <?= form_label('Ativo') ?>
                <?= form_dropdown('ativo', [1 => 'Sim', 0 => 'Não'], ($query->ativo == 1 ? 1 : 0), ['class' => 'form-control']) ?>
            </div>

            <div class="form-group">
                <?= form_label('Destaque Post') ?>
                <br />
                <img class="img-fluid post-destaque" src="<?php echo base_url('upload/blog/' . $query->imagem) ?>" alt="<?= $query->nome_post ?>">
            </div>

            <div class="form-group">
                <button type="button" class="btn btn-outline-warning mb-3 btn-trocar"><i class="fas fa-exchange-alt"></i> Trocar foto</button>
                <button type="button" class="btn btn-outline-danger mb-3 btn-cancelar"><i class="fas fa-ban"></i> Cancelar</button>
                <input type="file" name="imgPost" class="form-control-file input-change-file hide" id="exampleFormControlFile1" required="" disabled="">
            </div>

            <hr />
            <?= form_hidden('idPost', $query->id); ?>
            <?= form_submit('submit', 'Atualizar Post', ['class' => 'btn btn-success mt-5 mb-5']) ?>

            <?= form_close() ?>
        </div>
    </div>
</main>