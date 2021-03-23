<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2"><i class="fas fa-user-edit"></i> <?php echo $titulo_pagina ?></h1>
    </div>


    <div class="col-12 col-sm-12">
        <?php
        echo validation_errors('<div class="alert alert-danger" role="alert">', '</div>')
        ?>

        <?php 
            echo form_open();

            
        ?>
    </div>
</main>