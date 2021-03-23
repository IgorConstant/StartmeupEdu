<footer>
    <div class="uk-container">
        <div class="uk-child-width-expand@s" uk-grid>
            <div class="uk-flex uk-flex-middle">
                <div>
                    <div class="logo-footer">
                        <img src="assets/images/logo-about.png" alt="Logo - Startmeup">
                    </div>
                </div>
            </div>
            <div>
                <div>
                    <ul>
                        <li><a href="#sobre" uk-scroll="offset: 120">Sobre Nós</a></li>
                        <li><a href="para-empresas">Para Empresas</a></li>
                        <li><a href="#competencias" uk-scroll="offset: 120">O Programa</a></li>
                        <li><a href="https://startmeup-edu.moodlecloud.com/login/index.php" target="_blank">Área do Aluno</a></li>
                        <li><a href="#mentores" uk-scroll="offset: 120">Mentores</a></li>
                        <li><a href="materiais-gratuitos">Materiais Gratuitos</a></li>
                        <li><a href="politica-de-privacidade">Política de Privacidade</a></li>
                    </ul>
                </div>
            </div>
            <div class="uk-flex uk-flex-middle">
                <div>
                    <div class="social-footer">
                        <ul>
                            <li class="list-one"><a href="https://www.instagram.com/startmeup_edu/" target="_blank"><i class="fab fa-instagram"></i></a></li>
                            <li class="list-two"><a href="https://www.facebook.com/startmeupedubr" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                            <li class="list-three"><a href="https://www.linkedin.com/company/startmeupedu" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<section id="alert">
    <div class="uk-container">
        <div class="cookie-popup cookie-popup--short cookie-popup--dark">
            <div>
                Esse site utiliza Cookies, para lhe oferecer uma experiência personalizada, você pode saber mais em <a target="_blank" href="<?= base_url('politica-de-privacidade') ?>">Politica de Privacidade</a>
            </div>
            <div class="cookie-popup-actions">
                <button>Aceito</button>
            </div>
        </div>
    </div>
</section>

<div class="copyright uk-text-center">
    <p class="uk-margin-remove">Startmeup Edu - Todos os Direitos Reservados © <?php echo date("Y"); ?> - Produzido por <a target="_blank" href="https://www.duetto.ag">Agência Duetto</a></p>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>
<script src="<?php echo base_url('assets/js/main.js') ?> "></script>
<script src="<?php echo base_url('assets/js/cookies.js') ?>"></script>
</body>

</html>