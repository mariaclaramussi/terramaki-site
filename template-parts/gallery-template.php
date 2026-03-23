<section id="moments-section">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/moment-left-bg.png" alt="Imagem do restaurante" class="moment-bg left">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-reservado.svg"
                    alt="Imagem do restaurante" class="<?php if(is_page_template('page-reservado.php')): ?>d-none<?php endif; ?>">
                <h3>Momentos especiais pedem um lugar especial.</h3>
                <p>Criamos experiências sob medida para celebrações, encontros corporativos 
                        e jantares exclusivos, com ambiente reservado, 
                        cardápio personalizado e atenção dedicada em cada detalhe.
                </p>
                
                <div class="gallery-container">
                    <button class="nav prev">←</button>

                    <div class="gallery-stack">
                        <div class="gallery-card">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/calmdown-img.png" alt="Imagem do restaurante">
                        </div>

                        <div class="gallery-card">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/technique-img.png" alt="Imagem do restaurante">
                        </div>

                        <div class="gallery-card">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/hero-home-img.png" alt="Imagem do restaurante">
                        </div>
                    </div>

                    <button class="nav next">→</button>
                </div>

                <button class="green">Entre em contato</button>
            </div>
        </div>
    </div>
     <img src="<?php echo get_template_directory_uri(); ?>/assets/images/moment-right-bg.png" alt="Imagem do restaurante" class="moment-bg right">
    <div class="container">
</section>