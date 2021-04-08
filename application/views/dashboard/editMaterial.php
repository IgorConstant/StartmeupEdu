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
                <?= form_label('Nome Material') ?>
                <?= form_input([
                    'type' => 'text',
                    'class' => 'form-control',
                    'name' => 'nomeMaterial',
                    'value' => $query->nome_material
                ]) ?>
            </div>
            <div class="form-group">
                <?= form_label('Descrição do Material') ?>
                <?= form_input([
                    'type' => 'text',
                    'class' => 'form-control',
                    'name' => 'descMaterial',
                    'value' => $query->descricao_material
                ]) ?>
            </div>
            <div class="form-group">
                <?= form_label('Em caso de vídeo, altere a URL') ?>
                <?= form_input([
                    'type' => 'text',
                    'class' => 'form-control',
                    'name' => 'videoMaterial',
                    'value' => $query->video_url
                ]) ?>
            </div>
            <div class="form-group">
                <?= form_label('Ativo') ?>
                <?= form_dropdown('ativo', [1 => 'Sim', 0 => 'Não'], ($query->ativo == 1 ? 1 : 0), ['class' => 'form-control']) ?>
            </div>
            <div class="arquivo">
                <?= form_label('Arquivo') ?>
                <br />
                <a class="mt-4 mb-4 pb-4" href="<?php echo base_url('upload/docs/' . $query->arquivo) ?>"><?php echo $query->nome_material ?> <i class="far fa-file-pdf"></i></a>
            </div>
            <div class="form-group mt-4">
                <button type="button" class="btn btn-outline-warning mb-3 btn-trocar"><i class="fas fa-exchange-alt"></i> Trocar Arquivo</button>
                <button type="button" class="btn btn-outline-danger mb-3 btn-cancelar"><i class="fas fa-ban"></i> Cancelar</button>
                <input type="file" name="pdfMaterial" class="form-control-file input-change-file hide" id="exampleFormControlFile3" required="" disabled="">
            </div>

            <hr />
            <?= form_hidden('idMateriais', $query->id); ?>
            <?= form_submit('submit', 'Atualizar Material', ['class' => 'btn btn-success mt-5 mb-5']) ?>


            <?= form_close() ?>
        </div>
    </div>
</main>