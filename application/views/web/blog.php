<section id="introBlog">
    <div class="uk-container">
        <div class="main-text">
            <h1>Blog</h1>
        </div>
    </div>
</section>

<section id="listPosts">
    <div class="uk-container">
        <div class="uk-grid-collapse" uk-grid>
            <?php foreach ($postsblog as $row) { ?>
                <div class="uk-width-1-1@m uk-width-3-5@l img-hover-zoom--brightness margin-mobile">
                    <img width="100%" src="<?= base_url('upload/blog/' . $row->imagem) ?>" class="card-img-top" alt="<?= $row->nome_post ?>">
                </div>
                <div class="uk-width-expand@m margin-mobile">
                    <div class="block-color">
                        <small><?= $row->categoria ?></small>
                        <br>
                        <small><?= formataDataBr($row->data) ?></small>
                        <h4 class="post-title"><strong><?= $row->nome_post ?></strong></h4>
                        <p><?= $row->resumo ?></p>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>