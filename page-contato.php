<?php
/*
Template Name: Contato
*/
 
get_header(); ?>

<section id="contact-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Entre em contato</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-xl-4">
                <address>
                    <p>Alameda Luisa Angélica, 407</p>
                    <p>Angra dos Reis, Rio de Janeiro</p>
                </address>

                <div class="col-md-12 d-flex flex-column gap-3 flex-md-row gap-md-4 mt-4">
                    <a href="https://maps.app.goo.gl/BTveEjSqpL9P2fZq7" class="btn outline" target="_blank" rel="noopener">Ver no mapa</a>
                    <a href="https://wa.me/5524999407094?text=Olá!%20Gostaria%20de%20reservar%20uma%20mesa" class="btn beige" target="_blank" rel="noopener">Reservar mesa</a>
                </div>

                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/restaurant-lounge.png"
                    alt="Salão elegante do restaurante Terramaki em Angra dos Reis" loading="lazy">
            </div>
            <div class="offset-xl-4 col-12 col-xl-4">
                <div class="contact-info">
                    <span>E-mail</span>
                    <p><a href="mailto:contato@terramaki.com">contato@terramaki.com</a></p>
                </div>
                <div class="contact-info">
                    <span>Whatsapp</span>
                    <p><a href="https://wa.me/5524999407094" target="_blank" rel="noopener">+55 24 99940-7094</a></p>
                </div>
                <div class="contact-info">
                    <span>Siga nossas redes</span>
                    <div class="d-flex">
                        <a class="social-media" href="https://www.instagram.com/casaterramaki" target="_blank" rel="noopener" aria-label="Instagram do Terramaki"><i class="fa-brands fa-instagram" aria-hidden="true"></i></a>
                    </div>
                </div>
                <a href="https://terramaki-casagastronomica.goomer.app/menu" class="btn green" target="_blank" rel="noopener">Faça seu pedido</a>
            </div>
        </div>
    </div>
</section>

<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "Restaurant",
    "name": "Terramaki",
    "description": "Restaurante de gastronomia japonesa autoral em Angra dos Reis.",
    "url": "<?php echo esc_url(home_url('/')); ?>",
    "telephone": "+55-24-99994-07094",
    "email": "contato@terramaki.com",
    "address": {
        "@type": "PostalAddress",
        "streetAddress": "Alameda Luisa Angélica, 407",
        "addressLocality": "Angra dos Reis",
        "addressRegion": "RJ",
        "postalCode": "23906-195",
        "addressCountry": "BR"
    },
    "geo": {
        "@type": "GeoCoordinates",
        "latitude": "-23.0067",
        "longitude": "-44.3181"
    },
    "openingHoursSpecification": {
        "@type": "OpeningHoursSpecification",
        "dayOfWeek": ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"],
        "opens": "18:30",
        "closes": "23:00"
    },
    "servesCuisine": ["Japonesa", "Sushi", "Sashimi"],
    "priceRange": "$$",
    "sameAs": [
        "https://www.instagram.com/casaterramaki",
    ]
}
</script>

<?php
get_footer();