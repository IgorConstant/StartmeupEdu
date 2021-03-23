<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2"><i class="fas fa-users"></i> <?php echo $titulo_pagina ?></h1>
    </div>

    <div class="row mb-5">
        <div class="col-12 col-sm-12 text-right">
            <?php echo anchor('usuarios/adicionarusuarios', '<span>Adicionar Novo Usuário</span>', array('class' => 'btn btn-outline-success')) ?>
        </div>
    </div>

    <section id="list-users">
        <div class="row">
            <div class="col-12 col-sm-12">
                <?= $this->session->userdata('msg'); ?>
            </div>
        </div>
    </section>


    <section id="list-users">
        <div class="row">
            <div class="col-12 col-sm-12">
                <table class="table table-bordered">
                    <thead class="thead-dark">
                        <tr>
                            <th>Nome</th>
                            <th>E-mail</th>
                            <th class="text-center">Ativo</th>
                            <th class="text-center">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($usuarios as $row) { ?>
                            <tr>
                                <th scope="row"><i class="fas fa-user"></i> &nbsp; <?= $row->nome ?></th>
                                <td><a href="mailto:<?= $row->email ?>"><i class="fas fa-envelope"></i>&nbsp; <?= $row->email ?></a></td>
                                <td class="text-center"><?= ($row->ativo == 1 ? '<span class="badge badge-success"> Ativo</span>' : '<span class="badge badge-danger">Inativo</span>') ?></td>
                                <td class="text-center">
                                    <?= anchor('usuarios/editarusuarios/' . $row->id, '<i class="fas fa-user-edit"></i>', array('title' => 'Editar')) ?>
                                    <?= anchor('usuarios/deletarusuarios/' . $row->id, '<i class="fas fa-user-times"></i>', array('title' => 'Excluir')) ?>
                                    <?php if ($row->ativo == 1) { ?>
                                        <?= anchor('usuarios/usuarioinativo/' . $row->id, '<i class="fas fa-toggle-on"></i>', array('title' => 'Desativar')) ?>
                                    <?php } else { ?>
                                        <?= anchor('usuarios/usuarioativo/' . $row->id, '<i class="fas fa-toggle-off"></i>', array('title' => 'Ativar')) ?>
                                    <?php } ?>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</main>