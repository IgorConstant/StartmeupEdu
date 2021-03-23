<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2"><i class="fas fa-list"></i> <?php echo $titulo_pagina ?></h1>
    </div>
    <div class="row mb-5">
        <div class="col-12 col-sm-12 text-right">
            <?php echo anchor('post/adicionar', '<i class="fas fa-plus-circle"></i> <span>Criar novo Post</span>', array('class' => 'btn btn-outline-success')) ?>
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
                        <th>Data</th>
                        <th>Título Post</th>
                        <th>Autor</th>
                        <th>Resumo</th>
                        <th class="text-center">Status</th>
                        <th class="text-center">Ações</th>
                    </tr>
                </thead>

                <tbody>
                    <?php foreach ($posts as $p) { ?>
                        <tr>
                            <td><?= $p->id ?></td>
                            <td><?= formataDataBr($p->data) ?></td>
                            <td><?= $p->nome_post ?></td>
                            <td><?= $p->autor ?></td>
                            <td><?= $p->resumo ?></td>
                            <td class="text-center"><?= ($p->ativo == 1 ? '<span class="badge badge-success">Ativo</span>' : '<span class="badge badge-danger">Inativo</span>') ?></td>
                            <td class="text-center">
                                <?= anchor('post/editar/' . $p->id, '<i class="far fa-edit"></i>', array('title' => 'Editar')) ?>
                                <?= anchor('post/apagar/' . $p->id, '<i class="far fa-trash-alt"></i>', array('title' => 'Excluir')) ?>

                                <?php if ($p->ativo == 1) { ?>
                                    <?= anchor('post/desativar/' . $p->id, '<i class="fas fa-toggle-on"></i>', array('title' => 'Desativar')) ?>
                                <?php } else { ?>
                                    <?= anchor('post/ativar/' . $p->id, '<i class="fas fa-toggle-off"></i>', array('title' => 'Ativar')) ?>
                                <?php } ?>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>

</main>