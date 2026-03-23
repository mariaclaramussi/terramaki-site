<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since Twenty Seventeen 1.0
 * @version 1.2
 */

?>

<footer class="footer <?php if(is_page_template('page-contato.php')): ?><?php echo 'contato'?><?php endif; ?>">
    <?php if(is_page_template('page-contato.php')): ?>
        <div class="container">
              <div class="row">
                <div class="col-md-12 reserved">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-verde.svg"
                        alt="Logo do Terramaki">

                    <p>Terramaki 2026, Todos os direitos reservados.</p>
                </div>
            </div>
        </div>
    <?php else: ?>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-verde.svg"
                        alt="Logo do Terrmaki">
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-lg-6">
                    <div class="row">
                        <div class="col-md-12 col-lg-4">
                            <ul>
                                <li><a href="<?php echo get_site_url(); ?>">Início</a></li>
                                <li><a href="<?php echo get_site_url(); ?>/sobre">A experiência</a></li>
                                <li><a href="<?php echo get_site_url(); ?>/reservado">O Reservado</a></li>
                                <li><a href="<?php echo get_site_url(); ?>/contato">Contato</a></li>
                            </ul>
                        </div>
                        <div class="col-md-12 col-lg-6 address">
                            <div>
                                <p>contato@terramaki.com</p>
                                <p>+55 24 99940 7094</p>
                            </div>
                            <div>
                                <p>Alameda Luisa Angélica, 407</p>
                                <p>Angra dos Reis, Rio de Janeiro</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 offset-lg-2 col-lg-4">
                    <div class="weekend-hour">
                        <p>Segunda-feira:</p>
                        <p>Fechado</p>
                    </div>
                    <div class="weekend-hour">
                        <p>Terça-feira:</p>
                        <p>08:00 - 18:00</p>
                    </div>
                    <div class="weekend-hour">
                        <p>Quarta-feira:</p>
                        <p>08:00 - 18:00</p>
                    </div>
                    <div class="weekend-hour">
                        <p>Quinta-feira:</p>
                        <p>08:00 - 18:00</p>
                    </div>
                    <div class="weekend-hour">
                        <p>Sexta-feira:</p>
                        <p>08:00 - 18:00</p>
                    </div>
                    <div class="weekend-hour">
                        <p>Sábado:</p>
                        <p>08:00 - 18:00</p>
                    </div>
                    <div class="weekend-hour">
                        <p>Domingo:</p>
                        <p>08:00 - 18:00</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 reserved">
                    <p>Terramaki 2026, Todos os direitos reservados.</p>
                </div>
            </div>
        </div>
    <?php endif; ?>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery-3.7.1.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/bootstrap.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/owl.carousel.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollToPlugin.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/index.js"></script>

</footer>

<?php wp_footer(); ?>
</body>
</html>