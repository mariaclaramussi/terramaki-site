<section id="moments-section">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/moment-left-bg.svg" alt="Imagem do restaurante" class="moment-bg left" loading="lazy">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-reservado.svg"
                    alt="Imagem do restaurante" loading="lazy" class="<?php if(is_page_template('page-reservado.php')): ?>d-none<?php endif; ?>">
                <h3>Momentos especiais pedem um lugar especial.</h3>
                <p>Criamos experiências sob medida para celebrações, encontros corporativos 
                        e jantares exclusivos, com ambiente reservado, 
                        cardápio personalizado e atenção dedicada em cada detalhe.
                </p>
                
                <div class="gallery-container">
                    <button class="nav prev">←</button>

                    <div class="gallery-stack">
                        <div class="gallery-card">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/calmdown-img.png" alt="Imagem do restaurante" loading="lazy">
                        </div>
                        <div class="gallery-card">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/technique-1.png" alt="Imagem do restaurante" loading="lazy">
                        </div>
                        <div class="gallery-card">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/hero-home-img.png" alt="Imagem do restaurante" loading="lazy">
                        </div>
                        <div class="gallery-card">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/hero-about-img.jpg" alt="Imagem do restaurante" loading="lazy">
                        </div>
                        <div class="gallery-card">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/restaurant-playground.jpg" alt="Imagem do restaurante" loading="lazy">
                        </div>
                    </div>

                    <button class="nav next">→</button>
                </div>

                 <a href="<?php echo get_site_url(); ?>/contato" class="btn green">Entre em contato</a>
            </div>
        </div>
    </div>
     <img src="<?php echo get_template_directory_uri(); ?>/assets/images/moment-right-bg.svg" alt="Imagem do restaurante" class="moment-bg right" loading="lazy">
    <div class="container">
</section>