<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since Twenty Seventeen 1.0
 * @version 1.0
 */

get_header(); ?>

<section id="intro">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/hero-bg.png"
        class="hero-bg-img web" alt="Vista panorâmica do restaurante Terramaki em Angra dos Reis">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/hero-bg-mobile.png"
        class="hero-bg-img mobile" alt="Restaurante Terramaki - ambiente acolhedor em Angra dos Reis">
    <div class="container">
        <div class="row">
            <div class="col-md-12" data-aos="fade-up" data-aos-duration="1500">
                <h1>Técnica japonesa, <br/>alma brasileira</h1>
                <p>Gastronomia autoral, frescor absoluto e acolhimento genuíno em cada detalhe.</p>
            </div>
            <div class="col-md-12 gap-2">
                <a href="https://wa.me/55249999407094?text=Olá!%20Gostaria%20de%20reservar%20uma%20mesa" class="btn green" target="_blank" rel="noopener">Reserve sua mesa</a>
                <a href="https://terramaki-casagastronomica.goomer.app/menu" class="btn beige" target="_blank" rel="noopener">Faça seu pedido</a>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/hero-home-img.png"
                    alt="Pratos de sushi e sashimi frescos do Terramaki" class="hero-img">
            </div>
        </div>
    </div>
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home-about-bg.png"
        class="hero-bottom-bg-img" alt="Decoração elegante do ambiente Terramaki">
</section>

<?php
    get_template_part(
        'template-parts/about-section-template',
        'card',
        array(
            'titulo' => 'Mais que um restaurante. Uma forma de cuidar.',
            'texto1' => 'O Terramaki nasce do encontro entre duas forças: a precisão da técnica japonesa e a sensibilidade brasileira que acolhe, cria e abraça.',
            'texto2' => 'Aqui, cada detalhe importa. Do corte ao cuidado. Do ingrediente ao gesto. Acreditamos que qualidade não é promessa, é prática diária, visível no frescor, na segurança e no respeito absoluto ao produto.',
        )
    );
 ?>

<section id="tecnique-section">
    <div class="tecnique-wrapper">
        
        <!-- Indicadores de progresso -->
        <div class="tecnique-progress">
            <div class="progress-dot active" data-index="0"></div>
            <div class="progress-dot" data-index="1"></div>
            <div class="progress-dot" data-index="2"></div>
            <div class="progress-dot" data-index="3"></div>
            <div class="progress-dot" data-index="4"></div>
        </div>
        
        <div class="tecnique-slides">
        <h2>Nossos diferenciais</h2>

            <div class="tecnique-item">
                <h3>Técnica <span aria-hidden="true">&</span> precisão</h3>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/technique-1.png"
                    alt="Chef executando corte preciso de sashimi">
                <p>cortes rigorosos, processos exatos, constância impecável.</p>
            </div>
            <div class="tecnique-item">
                <h3>Valorização de Angra</h3>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/technique-2.jpg"
                    alt="Ingredientes frescos da Costa Verde">
                <p>nossa cozinha japonesa ganha vida com elementos da costa verde</p>
            </div>
            <div class="tecnique-item">
                <h3>Transparência <span aria-hidden="true">&</span> Segurança</h3>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/technique-3.png"
                    alt="Cozinha limpa e organizada do Terramaki">
                <p>processos, higiene, origem e manipulação segura é parte profunda da nossa gestão</p>
            </div>
            <div class="tecnique-item">
                <h3>Repertório <span aria-hidden="true">&</span> Conhecimento</h3>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/technique-4.png"
                    alt="Variedade de peixes e cortes japoneses">
                <p>orientamos você sobre cortes, peixes, preparações, combinações e escolhas</p>
            </div>
            <div class="tecnique-item">
                <h3>Renovação <span aria-hidden="true">&</span> Sazonalidade</h3>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/technique-5.png"
                    alt="Pratos sazonais e inovações do cardápio">
                <p>mantemos a novidade viva, especialmente para quem busca variedade e descobertas</p>
            </div>
        </div>
    </div>
</section>

<section id="calmdown-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Um espaço para desacelerar</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-lg-4">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/restaurant-lounge.png"
                    alt="Salão principal do Terramaki com ambiente aconchegante">
            </div>
            <div class="col-md-12 col-lg-6 offset-lg-2">
                <div class="accordion-container">    
                    <h4>Um lugar planejado para você se desconectar e relaxar</h4>

                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                Salão Principal
                            </button>
                            <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Um ambiente pensado para conversas sem pressa, encontros especiais, celebrações íntimas e momentos que merecem ser vividos com atenção.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Espaço Kids
                            </button>
                            <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Para garantirmos que nossos clientes poderão aproveitar a experiência gastronômica, oferecemos um espaço exclusivo para as crianças, onde elas poderão se divertir e se sentir em casa.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="statements-section">
    <div class="owl-carousel-statements owl-carousel">
        <div class="item">
            <div class="statement-item">
                <span>“</span>
                <blockquote>
                    <p>Super indico fazia tempo que eu não comia um sushi tão bom e apesar de ter muita gente a comida não demorou.</p>
                </blockquote>
                <figcaption>
                    <cite class="author">Raissa</cite>
                </figcaption>
            </div>
        </div>
        <div class="item">
            <div class="statement-item">
                <span>“</span>
                 <blockquote>
                    <p>A qualidade é fora da curva. Provar a culinária japonesa aqui é sempre uma experiência maravilhosa . Já fui algumas vezes e o padrão de excelência se mantém.</p>
                </blockquote>
                <figcaption>
                    <cite class="author">Eduardo</cite>
                </figcaption>
            </div>
        </div>
        <div class="item">
            <div class="statement-item">
                <span>“</span>
                 <blockquote>
                <p>Restaurante nota 10, qualidade top, peixes frescos, tudo muito bom, estamos em Angra há uma semana e já fomos duas vezes, preço ótimo pra qualidade que servem.</p>
                </blockquote>
                <figcaption>
                    <cite class="author">Gabriel</cite>
                </figcaption>
            </div>
        </div>
         <div class="item">
            <div class="statement-item">
                <span>“</span>
                <blockquote>
                    <p>Não moro em Angra, resido em Curitiba, e sempre que venho à cidade faço questão de visitá-los, pois a experiência é sempre impecável e a comida, simplesmente maravilhosa.</p>
                </blockquote>
                <figcaption>
                    <cite class="author">Monique</cite>
                </figcaption>
            </div>
        </div>
    </div>
</section>


<?php get_template_part('template-parts/gallery-template'); ?>

<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "Restaurant",
    "name": "Terramaki",
    "description": "Gastronomia japonesa autoral em Angra dos Reis. Técnica japonesa com alma brasileira.",
    "image": "<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/hero-home-img.png",
    "url": "<?php echo esc_url(home_url('/')); ?>",
    "telephone": "+55-24-99999-9999",
    "address": {
        "@type": "PostalAddress",
        "streetAddress": "Endereço do restaurante",
        "addressLocality": "Angra dos Reis",
        "addressRegion": "RJ",
        "postalCode": "23900-000",
        "addressCountry": "BR"
    },
    "geo": {
        "@type": "GeoCoordinates",
        "latitude": "-23.0067",
        "longitude": "-44.3181"
    },
    "servesCuisine": ["Japonesa", "Sushi", "Sashimi"],
    "priceRange": "$$",
    "openingHoursSpecification": [
        {
            "@type": "OpeningHoursSpecification",
            "dayOfWeek": ["Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"],
            "opens": "18:00",
            "closes": "23:00"
        }
    ],
    "aggregateRating": {
        "@type": "AggregateRating",
        "ratingValue": "5",
        "reviewCount": "4",
        "bestRating": "5",
        "worstRating": "1"
    },
    "review": [
        {
            "@type": "Review",
            "author": {"@type": "Person", "name": "Raissa"},
            "reviewBody": "Super indico fazia tempo que eu não comia um sushi tão bom e apesar de ter muita gente a comida não demorou.",
            "reviewRating": {"@type": "Rating", "ratingValue": "5", "bestRating": "5"}
        },
        {
            "@type": "Review",
            "author": {"@type": "Person", "name": "Eduardo"},
            "reviewBody": "A qualidade é fora da curva. Provar a culinária japonesa aqui é sempre uma experiência maravilhosa.",
            "reviewRating": {"@type": "Rating", "ratingValue": "5", "bestRating": "5"}
        },
        {
            "@type": "Review",
            "author": {"@type": "Person", "name": "Gabriel"},
            "reviewBody": "Restaurante nota 10, qualidade top, peixes frescos, tudo muito bom.",
            "reviewRating": {"@type": "Rating", "ratingValue": "5", "bestRating": "5"}
        },
        {
            "@type": "Review",
            "author": {"@type": "Person", "name": "Monique"},
            "reviewBody": "Sempre que venho à cidade faço questão de visitá-los, pois a experiência é sempre impecável.",
            "reviewRating": {"@type": "Rating", "ratingValue": "5", "bestRating": "5"}
        }
    ]
}
</script>

<?php
get_footer();