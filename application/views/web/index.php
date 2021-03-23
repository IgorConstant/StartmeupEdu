<main>
    <section id="carousel-mobile">
        <div class="uk-hidden@l" uk-slider="autoplay:true">
            <div class="uk-position-relative">
                <div class="uk-slider-container uk-light">
                    <ul class="uk-slider-items uk-child-width-1-1 uk-child-width-1-1@s uk-child-width-1-1@m">
                        <li>
                            <img src="<?php echo base_url('assets/images/banner-mobile1.png') ?>" alt="Banner-Mobile1">
                        </li>
                        <li>
                            <img src="<?php echo base_url('assets/images/banner-mobile2.png') ?>" alt="Banner-Mobile2">
                        </li>
                        <li>
                            <img src="<?php echo base_url('assets/images/banner-mobile3.png') ?>" alt="Banner-Mobile3">
                        </li>
                    </ul>
                    <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                    <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a>
                </div>
            </div>
        </div>
    </section>

    <section id="slider-area">
        <div class="uk-visible@l" uk-slider="autoplay: true">
            <div class="uk-slider-container uk-light">
                <ul class="uk-slider-items uk-child-width-1-1 uk-child-width-1-1@s uk-child-width-1-1@m">
                    <li>
                        <img src="<?php echo base_url('assets/images/banner-slider1.png') ?>" alt="Banner-Slider">
                        <div class="uk-position-large uk-position-center-left uk-padding">
                            <img src="<?php echo base_url('assets/images/logo-banner1-2.png') ?>" alt="Logo-Banner">
                            <h2 class="uk-margin-remove">aqui as <br> oportunidades <br> <span>acontecem</span></h2>
                        </div>
                    </li>
                    <li>
                        <img src="<?php echo base_url('assets/images/banner-slider2.png') ?>" alt="Banner-Slider">
                        <div class="uk-position-large uk-position-center-left uk-padding">
                            <img src="<?php echo base_url('assets/images/logo-banner1-2.png') ?>" alt="Logo-Banner">
                            <h2 class="uk-margin-remove"><span>Faça parte</span> <br> da 1ª turma <br> de 2021</h2>
                        </div>
                    </li>
                    <li>
                        <img src="<?php echo base_url('assets/images/banner-slider3.png') ?>" alt="Banner-Slider">
                        <div class="uk-position-large uk-position-center-left uk-padding">
                            <img src="<?php echo base_url('assets/images/logo-banner1-2.png') ?>" alt="Logo-Banner">
                            <h2 class="uk-margin-remove">um programa <br> <span class="banner-3">único que te prepara<br> para o futuro!</span></h2>
                        </div>
                    </li>
                </ul>
                <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a>
            </div>
        </div>
    </section>

    <section id="cards">
        <div class="uk-container-expand">
            <div class="uk-grid-collapse uk-child-width-expand@l" uk-grid>
                <div>
                    <div class="uk-padding block-yellow">
                        <p class="more">Saiba Mais</p>
                        <p class="text-one anime">12 competências <br> para você <br> agarrar seu <br> futuro</p>
                        <br>
                        <a class="uk-button uk-button-default" href="#competencias" uk-scroll="offset: 120">ENTENDA</a>
                    </div>
                </div>
                <div>
                    <div class="uk-padding block2">
                        <p class="more">Saiba Mais</p>
                        <span class="anime">Os</span>
                        <p class="text-two uk-margin-remove anime">Men <br> to <br>res</p>
                        <br>
                        <a class="uk-button uk-button-default" href="#mentores" uk-scroll="offset: 120">CONHEÇA</a>
                    </div>
                </div>
                <div>
                    <div class="uk-padding block3">
                        <p class="more">Saiba Mais</p>
                        <p class="text-three anime">Nosso programa corporativo <br> conscientiza o jovem <br> de seu papel</p>
                        <br>
                        <a class="uk-button uk-button-default" href="<?= base_url('empresas') ?>">VER MAIS</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="sobre">
        <div class="uk-container uk-container-expand uk-padding-remove">
            <div class="uk-grid-collapse uk-child-width-expand@l" uk-grid>
                <div>
                    <div class="uk-padding uk-flex uk-flex-center uk-flex uk-flex-middle">
                        <div class="text-area">
                            <p class="small-text">Sobre Nós</p>
                            <img src="assets/images/logo-about.png" alt="Logo - Sobre">
                            <p class="text uk-margin-small-bottom uk-margin-small-top">A Start Me Up nasceu com o desejo de preparar jovens para um mundo em constante transformação.</p>
                            <p class="text uk-margin-small-bottom uk-margin-small-top">Para concretizar esse caminho, profissionais atuantes em grandes empresas foram convidados para levar sua expertise aos futuros executivos e empreendedores.</p>
                            <p class="text uk-margin-small-bottom uk-margin-small-top">Assim, foi criado um programa único de mentoria que privilegia a individualidade, dialoga com competências do futuro e ajuda o jovem a se conhecer.</p>
                            <p class="feature">Acreditamos que um jovem consciente de seu papel estará pronto para liderar seu próprio mundo e o mundo ao seu redor!</p>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="bg-blue">
                        <div class="text-area">
                            <h3 class="uk-margin-medium-bottom">O QUE NOS FAZ <span>DIFERENTES?</span></h3>
                            <ul uk-accordion="multiple: true">
                                <li>
                                    <a class="uk-accordion-title" href="#">Aulas ao vivo online e encontros presenciais</a>
                                    <div class="uk-accordion-content">
                                        <p>Aqui nosso objetivo vai além de disponibilizar uma aula gravada, procuramos trazer o aluno para debates em aulas ao vivo online e, também, em encontros presenciais onde acontecem palestras, workshops e apresentações.</p>
                                    </div>
                                </li>
                                <li>
                                    <a class="uk-accordion-title" href="#">Foco no desenvolvimento do estudante.</a>
                                    <div class="uk-accordion-content">
                                        <p>Sabemos que é impossível dar atenção especial para cada aluno em uma sala de 100, por isso nossas turmas são reduzidas a 25 alunos, assim conseguimos ter um foco especial no desenvolvimento de cada um.</p>
                                    </div>
                                </li>
                                <li>
                                    <a class="uk-accordion-title" href="#">Inclusão além do discurso.</a>
                                    <div class="uk-accordion-content">
                                        <p>Boas oportunidades devem estar disponíveis a todos! Por isso, temos parcerias com pessoas físicas e jurídicas que disponibilizam bolsas de estudos e fazem com que mais jovens tenham acesso ao nosso programa e possam alcançar o futuro desejado.</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="fundadores">
        <div class="uk-container">
            <div class="uk-grid-column-small uk-grid-collapse uk-grid-row-large uk-child-width-1-2@m" uk-grid>
                <div>
                    <div>
                        <div class="img-founders">
                            <img src="<?php echo base_url('assets/images/fundadores.jpg') ?>" alt="Fundadores">
                        </div>
                    </div>
                </div>
                <div>
                    <div>
                        <div class="text-area">
                            <h2 class="anime">Fundadores</h2>
                            <p>"Enquanto trabalhava como coach executiva, vi muitos jovens com dificuldades no desenvolvimento profissional devido a gaps cognitivos e socioemocionais. Foi a minha crença na educação que me levou a idealizar a Start Me Up. Uma escola de capacitação para jovens que desejam empreender e/ou atuar no mundo corporativo.</p>
                            <p>Convidei o Alcyr, um amigo de infância, para embarcar no projeto comigo pois conheço sua vontade e seu potencial para contribuir com o crescimento dessa geração. Posteriormente, o Yijeng Tang veio somar ao nosso time com sua super experiência em administração."</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="competencias">
        <div class="uk-container">
            <div class="uk-grid-medium uk-child-width-expand@m" uk-grid>
                <div>
                    <div class="block-one">
                        <img src="<?php echo base_url('assets/images/12-competencias.png') ?>" alt="12 Competências">
                    </div>
                </div>
                <div>
                    <div class="uk-flex uk-flex-middle">
                        <div class="list-column">
                            <p><i class="fas fa-caret-right"></i> 8 meses de acompanhamento</p>
                            <p><i class="fas fa-caret-right"></i> Aulas quartas e quintas, <br> manhã ou tarde</p>
                            <p><i class="fas fa-caret-right"></i> Aulas virtuais ao vivo <br> + presenciais <br> + visitas estratégicas *</p>
                            <p><i class="fas fa-caret-right"></i> 25 alunos turma</p>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="uk-flex uk-flex-center">
                        <div class="text-column">
                            <p class=" title">Um programa que revela seus talentos e te mostra possibilidades</p>
                            <p class="text">Prepare-se para o mundo corporativo e para empreender com um programa único de competências que te dará segurança, direção e experiência para essa jornada! </p>
                            <p class="text-adendo">* Encontros presenciais e visitas a empresas seguindo as diretrizes sanitárias do Governo Estado de SP e/ou Município de São Paulo indicadas para o enfrentamento da Covid-19.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="competencias-icon">
        <div class="uk-container">
            <div class="uk-child-width-expand@m" uk-grid>
                <div>
                    <div>
                        <div class="icon-competencia" uk-toggle="target: #neurolideranca">
                            <img src="<?php echo base_url('assets/images/icone-neurolideranca-alt.png') ?>" alt="Neuroliderança">
                            <h4 class="uk-margin-small-top uk-margin-remove-bottom">Neuroliderança</h4>
                            <p class="uk-margin-remove">use o cérebro e a mente para <br> liderar equipes.</p>
                        </div>
                    </div>
                </div>
                <div>
                    <div>
                        <div class="icon-competencia" uk-toggle="target: #pensamento-critico">
                            <img src="<?php echo base_url('assets/images/icone-pensamentocritico.png') ?>" alt="Pensamento Crítico">
                            <h4 class="uk-margin-small-top uk-margin-remove-bottom">Pensamento Crítico</h4>
                            <p class="uk-margin-remove">apresente projetos valiosos <br> e bem fundamentados.</p>
                        </div>
                    </div>
                </div>
                <div>
                    <div>
                        <div class="icon-competencia" uk-toggle="target: #inteligencia-emocional">
                            <img src="<?php echo base_url('assets/images/icone-comportamento.png') ?>" alt="Comportamento">
                            <h4 class="uk-margin-small-top uk-margin-remove-bottom">Inteligência Emocional</h4>
                            <p class="uk-margin-remove">se posicione positivamente em situações desafiadoras sem deixar de ser você mesmo.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="uk-child-width-expand@m" uk-grid>
                <div>
                    <div>
                        <div class="icon-competencia" uk-toggle="target: #financas-pessoais">
                            <img src="<?php echo base_url('assets/images/icone-financasp.png') ?>" alt="Finanças Pessoais">
                            <h4 class="uk-margin-small-top uk-margin-remove-bottom">Finanças Pessoais</h4>
                            <p class="uk-margin-remove">inicie hoje sua independência financeira.</p>
                        </div>
                    </div>
                </div>
                <div>
                    <div>
                        <div class="icon-competencia" uk-toggle="target: #financas-corporativas">
                            <img src="<?php echo base_url('assets/images/icone-financasc.png') ?>" alt="Finanças Corporativas">
                            <h4 class="uk-margin-small-top uk-margin-remove-bottom">Finanças Corporativas</h4>
                            <p class="uk-margin-remove">se certifique da viabilidade de sua empresa.</p>
                        </div>
                    </div>
                </div>
                <div>
                    <div>
                        <div class="icon-competencia" uk-toggle="target: #tecnologias-4-0">
                            <img src="<?php echo base_url('assets/images/icone-tec4-0.png') ?>" alt="Tecnologia 4.0">
                            <h4 class="uk-margin-small-top uk-margin-remove-bottom">Tecnologias 4.0</h4>
                            <p class="uk-margin-remove">entenda quais são e o que fazem <br> as tecnologias da Indústria 4.0</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="uk-child-width-expand@m" uk-grid>
                <div>
                    <div>
                        <div class="icon-competencia" uk-toggle="target: #empreendedorismo">
                            <img src="<?php echo base_url('assets/images/icone-empreendedorismo.png') ?>" alt="Empreendedorismo">
                            <h4 class="uk-margin-small-top uk-margin-remove-bottom">Empreendedorismo</h4>
                            <p class="uk-margin-remove">planejamento, gestão, networking: <br> um caso de sucesso.</p>
                        </div>
                    </div>
                </div>
                <div>
                    <div>
                        <div class="icon-competencia" uk-toggle="target: #tendencias-futuro">
                            <img src="<?php echo base_url('assets/images/icone-tendencia-alt.png') ?>" alt="Tendências">
                            <h4 class="uk-margin-small-top uk-margin-remove-bottom">Tendências e Futuro</h4>
                            <p class="uk-margin-remove">conheça os negócios do futuro.</p>
                        </div>
                    </div>
                </div>
                <div>
                    <div>
                        <div class="icon-competencia" uk-toggle="target: #negociacao-decisao">
                            <img src="<?php echo base_url('assets/images/icone-negocie.png') ?>" alt="Negocie">
                            <h4 class="uk-margin-small-top uk-margin-remove-bottom">Negociação e Decisões</h4>
                            <p class="uk-margin-remove">aprenda técnicas para <br> conseguir o tal “ganha-ganha”.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="uk-child-width-expand@m" uk-grid>
                <div>
                    <div>
                        <div class="icon-competencia" uk-toggle="target: #comunicacao">
                            <img src="<?php echo base_url('assets/images/icone-comunica.png') ?>" alt="Comunique-se">
                            <h4 class="uk-margin-small-top uk-margin-remove-bottom">Comunicação</h4>
                            <p class="uk-margin-remove">transmita sua mensagem <br> com assertividade.</p>
                        </div>
                    </div>
                </div>
                <div>
                    <div>
                        <div class="icon-competencia" uk-toggle="target: #criatividade-inovacao">
                            <img src="<?php echo base_url('assets/images/icone-criatividade.png') ?>" alt="Criatividade">
                            <h4 class="uk-margin-small-top uk-margin-remove-bottom">Criatividade e Inovação</h4>
                            <p class="uk-margin-remove">descubra como ter ideias que te impulsionam.</p>
                        </div>
                    </div>
                </div>
                <div>
                    <div>
                        <div class="icon-competencia" uk-toggle="target: #marketing-digital">
                            <img src="<?php echo base_url('assets/images/icone-marketing.png') ?>" alt="Marketing Digital">
                            <h4 class="uk-margin-small-top uk-margin-remove-bottom">Marketing Digital</h4>
                            <p class="uk-margin-remove">sua startup bem posicionada</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="experimente">
        <div class="uk-container">
            <div class="uk-grid-small uk-child-width-expand@l" uk-grid>
                <div class="uk-visible@l">
                    <div>
                        <img src="<?php echo base_url('assets/images/girl-example.png') ?>" alt="Girl">
                    </div>
                </div>
                <div class="uk-flex uk-flex-middle uk-flex uk-flex-center">
                    <div>
                        <div class="text-area">
                            <img src="<?php echo base_url('assets/images/6-turmas.png') ?>" alt="6 Turmas ao Longo do Ano">
                            <p class="uk-margin-remove-bottom anime">Em 2021 você terá 6 datas possíveis de entrada no curso: </p>
                            <small> * A abertura da turma depende de disponibilidade de vaga</small>
                            <ul>
                                <li><i class="far fa-calendar-alt"></i> 03/Março - Aulas de Março/21 a Novembro/21</li>
                                <li><i class="far fa-calendar-alt"></i> 08/Abril - Aulas de Abril/21 a Março/22</li>
                                <li><i class="far fa-calendar-alt"></i> 20/Maio - Aulas de Maio/21 a Maio/22</li>
                                <li><i class="far fa-calendar-alt"></i> 04/Agosto - Aulas de Agosto/21 a Junho/22</li>
                                <li><i class="far fa-calendar-alt"></i> 09/Setembro - Aulas de Setembro/21 a Agosto/22</li>
                                <li><i class="far fa-calendar-alt"></i> 20/Outubro - Aulas de Outubro/21 a Outubro/22</li>
                            </ul>
                            <a class="uk-button uk-button-default" href="#" uk-toggle="target: #pre-contato">ENTRAR PARA LISTA DE ESPERA</a>
                        </div>
                    </div>
                </div>
                <div class="uk-hidden@l">
                    <div>
                        <img src="<?php echo base_url('assets/images/girl-example.png') ?>" alt="Girl">
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="mentores">
        <div class="uk-container-expand">

            <div class="uk-child-width-1-2@s uk-grid-collapse uk-child-width-1-3@m" uk-grid>
                <div>
                    <div class="bg-blue uk-flex uk-flex-middle">
                        <div class="text-area">
                            <p class="small-text">Mentoria</p>
                            <span>Os</span>
                            <p class="text-two uk-margin-remove anime">Men <br> to <br>res</p>
                            <p class="chamada-programa uk-margin-remove-bottom">Do Programa</p>
                        </div>
                    </div>
                </div>
                <?php foreach ($mentores as $row) { ?>
                    <div>
                        <div class="image-flip" outouchstart="this.classList.toggle('hover');">
                            <div class="mainFlip">
                                <div class="frontside">
                                    <div class="image-flip2 uk-flex uk-flex-middle uk-padding <?= $row->nome_tutor ?>">
                                        <div class="card-body">
                                            <h3 class="title"><?= $row->nome_tutor ?> <br> <span><?= $row->sobrenome_tutor ?></span></h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="backside">
                                    <div class="card-body">
                                        <div class="text-area">
                                            <h4><?= $row->nome_tutor ?> <?= $row->sobrenome_tutor ?></h4>
                                            <p><?= $row->curriculo ?></p>
                                            <a class="uk-button uk-button-default" href="https://<?= $row->linkedin ?>" target="_blank"><i class="fab fa-linkedin"></i> LinkedIn</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>

    <section id="contato">
        <div class="uk-container-expand">
            <div class="uk-grid-collapse uk-child-width-expand@m" uk-grid>
                <div>
                    <div class="bg-yellow uk-flex uk-flex-center">
                        <div class="text-area">
                            <p class="small-text">Contato</p>
                            <br>
                            <h3 class="uk-margin-remove">Quer mais informações ou <br> <span>fazer sua inscrição?</span></h3>
                            <p class="uk-margin-medium-top">Prencha o formulário que entraremos em contato para mais informações e detalhes sobre o programa Start me Up.</p>
                            <br>
                            <p>Se preferir entre em contato pelo Whatsapp</p>
                            <a href="https://api.whatsapp.com/send?phone=551132308020" target="_blank"><i class="fab fa-whatsapp"></i> <span>(11)</span> 3230-8020</a>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="bg-blue">
                        <div class="form-area">
                            <form action="mail/send-contato.php" method="POST">
                                <div class="uk-margin">
                                    <label class="uk-form-label">Nome</label>
                                    <input class="uk-input" type="text" name="contatoNome">
                                </div>
                                <div class="uk-margin">
                                    <label class="uk-form-label">E-mail</label>
                                    <input class="uk-input" type="text" name="contatoEmail">
                                </div>
                                <div class="uk-margin">
                                    <label class="uk-form-label">Celular</label>
                                    <input class="uk-input" type="text" id="contatoCelular" name="contatoCelular">
                                </div>
                                <div class="btn-area">
                                    <button class="uk-button uk-width-1-1" type="submit">ENVIAR MEUS DADOS</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="faq">
        <div class="uk-container">
            <div class="text-area">
                <p class="small-text">Faq</p>
                <h3 class="uk-margin-remove">Perguntas <span>Frequentes</span></h3>
            </div>
            <div class="accordion-area">
                <div class="uk-grid-large uk-child-width-expand@s" uk-grid>
                    <div>
                        <div>
                            <ul uk-accordion="multiple: true">
                                <li>
                                    <a class="uk-accordion-title" href="#">Quanto tempo de duração tem cada aula? E quantas aulas terei por semana?</a>
                                    <div class="uk-accordion-content">
                                        <p>Cada aula tem a duração De 1h30. Serão 2 aulas por dia com intervalo de 30 minutos entre elas. As aulas acontecem quartas-feiras e quintas-feiras. O cronograma completo de aulas onlines, encontros presenciais e visitas estará disponível na plataforma do curso e poderá ser acessado após a matrícula.</p>
                                    </div>
                                </li>
                                <li>
                                    <a class="uk-accordion-title" href="#">Receberei um certificado ao final do curso?</a>
                                    <div class="uk-accordion-content">
                                        <p>Receberá um certificado onde constará uma nota média final conforme aproveitamento do aluno em cada competência.</p>
                                    </div>
                                </li>
                                <li>
                                    <a class="uk-accordion-title" href="#">As tarefas são individuais ou em grupo?</a>
                                    <div class="uk-accordion-content">
                                        <p>Haverão trabalhos individuais e em grupo, tanto no momento da aula como fora dela.</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div>
                        <div>
                            <ul uk-accordion="multiple: true">
                                <li>
                                    <a class="uk-accordion-title" href="#">Por quanto tempo terei acesso ao conteúdo do curso?</a>
                                    <div class="uk-accordion-content">
                                        <p>A gravação das aulas ao vivo ficará disponível por 1 semana após a data da aula. O acesso aos ebooks será possível durante todo o período que estiver inscrito em nosso curso</p>
                                    </div>
                                </li>
                                <li>
                                    <a class="uk-accordion-title" href="#">Estou tendo problemas para acessar a plataforma</a>
                                    <div class="uk-accordion-content">
                                        <p>Certifique-se que seu login e senha estejam corretos. Se mesmo assim não conseguir acesso mande whatsapp para <a href="#" target="_blank">(11) 3230-8020</a></p>
                                    </div>
                                </li>
                                <li>
                                    <a class="uk-accordion-title" href="#">Posso fazer download do material?</a>
                                    <div class="uk-accordion-content">
                                        <p>Pode. Lembrando que esses materiais são de propriedade intelectual da Start Me Up sendo proibida sua reprodução e/ou divulgação, completa ou parcial.</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <a href="https://api.whatsapp.com/send?phone=551132308020" class="float" target="_blank">
        <i class="fa fa-whatsapp my-float"></i>
    </a>

    <?php require('modal.php') ?>
</main>