
<section id="about-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 mx-auto">
                <img class="fish" src="<?php echo get_template_directory_uri(); ?>/assets/images/fish.svg"
                        alt="Imagem do restaurante">
                <h3><?php echo esc_html($args['titulo']); ?></h3>
                <p><?php echo esc_html($args['texto1']); ?></p>
                <p><?php echo esc_html($args['texto2']); ?></p>
            </div>
        </div>
    </div>
     <div class="container-imgs-about">
            <span class="vertical-line"></span>
            <img class="left" src="<?php echo get_template_directory_uri(); ?>/assets/images/about-img-1.jpg"
                        alt="Imagem de um prato de comida japonesa servido no Terramaki">
            <img class="center" src="<?php echo get_template_directory_uri(); ?>/assets/images/about-img-2.png"
                    alt="Imagem do salão do restaurante">
            <img class="right" src="<?php echo get_template_directory_uri(); ?>/assets/images/about-img-3.jpg"
                alt="Duas pessoas fazendo um brinde com taças de vinho">
    </div>
</section>