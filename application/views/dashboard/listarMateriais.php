<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2"><i class="fas fa-book-open"></i> <?php echo $titulo_pagina ?></h1>
    </div>
    <div class="row mb-5">
        <div class="col-12 col-sm-12 text-right">
            <?php echo anchor('materiais/adicionarmateriais', '<i class="fas fa-plus-circle"></i> <span>Cadastrar Novo Material</span>', array('class' => 'btn btn-outline-success')) ?>
        </div>
    </div>

    <!-- <section id="error-area">
        <div class="row">
            <div class="col-12 col-sm-12">
                <?= $this->session->userdata('msg', array('class' => 'mb-5')); ?>
            </div>
        </div>
    </section> -->

    <div class="row">
        <div class="col-12 col-sm-12">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th>ID</th>
                        <th>Nome do Material</th>
                        <th>Descrição</th>
                        <th>Arquivo</th>
                        <th class="text-center">Status</th>
                        <th class="text-center">Ações</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>

</main>