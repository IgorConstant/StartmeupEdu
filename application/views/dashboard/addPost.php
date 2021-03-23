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
                <?= form_label('Titulo do Post') ?>
                <?= form_input([
                    'type' => 'text',
                    'class' => 'form-control',
                    'name' => 'tituloPost',
                    'placeholder' => 'Titulo do Post',
                    'required' => ''
                ]) ?>
            </div>

            <div class="form-group">
                <?= form_label('Resumo do Post') ?>
                <?= form_input([
                    'type' => 'text',
                    'class' => 'form-control',
                    'name' => 'resumoPost',
                    'placeholder' => 'Resumo',
                    'required' => ''
                ]) ?>
            </div>

            <div class="form-group">
                <?= form_label('Categoria do Post') ?>
                <?= form_input([
                    'type' => 'text',
                    'class' => 'form-control',
                    'name' => 'categoriaPost',
                    'placeholder' => 'Categoria',
                    'required' => ''
                ]) ?>
            </div>

            <div class="form-group">
                <?= form_label('Texto do Post') ?>
                <?= form_textarea('textoPost', ' ', ['class' => 'form-control', 'required' => '']) ?>
            </div>

            <div class="form-group">
                <?= form_label('Ativo') ?>
                <?= form_dropdown('ativo', [1 => 'Sim', 0 => 'Não'], 1, ['class' => 'form-control']) ?>
            </div>


            <div class="form-group">
                <input type="file" name="imgPost" class="form-control-file" id="exampleFormControlFile1" required="">
            </div>

            <hr />
            <?= form_submit('submit', 'Criar novo Post', ['class' => 'btn btn-success mt-5 mb-5']) ?>

            <?= form_close() ?>
        </div>
    </div>
</main>