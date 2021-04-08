<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2"><i class="fas fa-file-signature"></i> <?php echo $titulo_pagina ?></h1>
    </div>
    <div class="row mb-5">
        <div class="col-12 col-sm-12 text-right">
            <?php echo anchor('contratos/adicionarcontrato', '<i class="fas fa-plus-circle"></i> <span>Adicionar novo contrato</span>', array('class' => 'btn btn-outline-success')) ?>
        </div>
    </div>

    <section id="error-area">
        <div class="row">
            <div class="col-12 col-sm-12">
                <?= $this->session->userdata('msg', array('class' => 'mb-5')); ?>
            </div>
        </div>
    </section>

    <div class="row">
        <div class="col-12 col-sm-12">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th>ID</th>
                        <th>Nome do Arquivo</th>
                        <th class="text-center">Arquivo para Download</th>
                        <th class="text-center">Status</th>
                        <th class="text-center">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($contratos as $c) { ?>
                        <tr>
                            <td><?= $c->id ?></td>
                            <td><?= $c->nome_contrato ?></td>
                            <td class="text-center"><a target="_blank" href="<?php echo base_url('upload/docs/' . $c->arquivo_contrato) ?>">Compartilhar URL <i class="fas fa-share-alt"></i></a></td>
                            <td class="text-center"><?= ($c->ativo == 1 ? '<span class="badge badge-success">Ativo</span>' : '<span class="badge badge-danger">Inativo</span>') ?></td>
                            <td class="text-center">
                                <?= anchor('contratos/deletarcontrato/' . $c->id, '<i class="far fa-trash-alt"></i>', array('title' => 'Excluir')) ?>

                                <?php if ($c->ativo == 1) { ?>
                                    <?= anchor('contratos/desativarcontrato/' . $c->id, '<i class="fas fa-toggle-on"></i>', array('title' => 'Desativar')) ?>
                                <?php } else { ?>
                                    <?= anchor('contratos/ativarcontrato/' . $c->id, '<i class="fas fa-toggle-off"></i>', array('title' => 'Ativar')) ?>
                                <?php } ?>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</main>