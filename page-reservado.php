<?php
/*
Template Name: Reservado
*/
 
get_header(); ?>

<section id="reservado-hero">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>A experiência Terramaki, <br>onde você quiser</h1>
                <a href="<?php echo get_site_url(); ?>/contato" class="btn green">Entre em contato</a>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/hero-reservado-img.png"
                    alt="Um cozinheiro preparando verduras frescas" class="hero-img">
            </div>
        </div>
    </div>
</section>

<?php get_template_part('template-parts/gallery-template'); ?>

<section id="whatwedo-section">
    <div class="container ">
        <h2 class="mb-5">
        O que nós fazemos?
        </h2>

        <div class="row g-4">
            <div class="col-md-6 col-lg-4">
                <div class="card card-service">
                    <span  lang="ja">祝い</span>    
                    <h4>Celebrações especiais</h4>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="card card-service">
                    <span  lang="ja">誕生日</span>
                    <h4>Aniversários</h4>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="card card-service">
                    <span  lang="ja">企業</span>
                    <h4>Eventos corporativos</h4>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="card card-service">
                    <span  lang="ja">会議</span>
                    <h4>Casamentos</h4>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="card card-service">
                    <span  lang="ja">集い</span>
                    <h4>Confraternizações familiares</h4>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="card card-service">
                    <span  lang="ja">卒業</span>
                    <h4>Eventos em residências ou espaços privados</h4>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="reservado-faq-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Perguntas frequentes</h2>
    
                <div class="accordion accordion-container" id="faq-reservado">
                    <div class="accordion-item">
                        <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq-reservado-1">
                            Como funciona o serviço de eventos?
                        </button>
        
                        <div id="faq-reservado-1" class="accordion-collapse collapse" data-bs-parent="#faq-reservado">
                            <div class="accordion-body">
                                O evento é planejado de forma personalizada. Entendemos a necessidade do cliente, o formato da ocasião e o número de convidados para então montar uma proposta gastronômica adequada.
                            </div>
                        </div>
                    </div>
        
                    <div class="accordion-item">
                        <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq-reservado-2">
                            Vocês fazem apenas entrega ou também serviço no local?
                        </button>
        
                        <div id="faq-reservado-2" class="accordion-collapse collapse" data-bs-parent="#faq-reservado">
                            <div class="accordion-body">
                                Trabalhamos nas duas modalidades:

                                •⁠  ⁠Entrega de barcas ou montagens gastronômicas prontas
                                •⁠  ⁠Serviço no local com equipe realizando preparo e atendimento
                            </div>
                        </div>
                    </div>
        
                    <div class="accordion-item">
                        <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq-reservado-3">
                            Existe número mínimo de pessoas?
                        </button>
        
                        <div id="faq-reservado-3" class="accordion-collapse collapse" data-bs-parent="#faq-reservado">
                            <div class="accordion-body">
                                Sim.

                                Para eventos com serviço no local, trabalhamos com mínimo de 20 pessoas.

                                Para montagens ornamentadas ou barcas especiais, trabalhamos com mínimo de 300 peças.
                            </div>
                        </div>
                    </div>
        
                    <div class="accordion-item">
                        <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq-reservado-6">
                            O cardápio é personalizado?
                        </button>
        
                        <div id="faq-reservado-6" class="accordion-collapse collapse" data-bs-parent="#faq-reservado">
                            <div class="accordion-body">
                                Sim. Cada evento é estruturado de acordo com a proposta do cliente e a viabilidade operacional do serviço.
                            </div>
                        </div>
                    </div>  
        
                    <div class="accordion-item">
                        <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq-reservado-5">
                            O que é necessário no local para eventos in house?
                        </button>
        
                        <div id="faq-reservado-5" class="accordion-collapse collapse" data-bs-parent="#faq-reservado">
                            <div class="accordion-body">
                                Para eventos realizados no local do cliente, solicitamos uma estrutura mínima:
                                •	Bancada ou espaço de apoio para preparo 
                                •	Pia/banca com ponto d’água 
                                •	Refrigerador disponível

                                Levamos todos os insumos, utensílios e materiais necessários para execução do serviço.
                            </div>
                        </div>
                    </div>  


                    <div class="accordion-item">
                        <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq-reservado-7">
                            Vocês atendem eventos em Angra e região?
                        </button>
        
                        <div id="faq-reservado-7" class="accordion-collapse collapse" data-bs-parent="#faq-reservado">
                            <div class="accordion-body">
                                Sim. Atendemos eventos em Angra dos Reis e região mediante consulta de disponibilidade.
                            </div>
                        </div>
                    </div>  

                    <div class="accordion-item">
                        <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq-reservado-8">
                            Como solicitar orçamento?
                        </button>
        
                        <div id="faq-reservado-8" class="accordion-collapse collapse" data-bs-parent="#faq-reservado">
                            <div class="accordion-body">
                                O orçamento é feito de forma personalizada, mediante consulta de data, número de convidados e formato do evento.
                            </div>
                        </div>
                    </div>  
                </div>
        
                <a class="btn green" href="<?php echo get_site_url(); ?>/contato">
                    Entre em contato
                </a>
            </div>
        </div>
    </div>
</section>

<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "FAQPage",
    "mainEntity": [
        {
            "@type": "Question",
            "name": "Como funciona o serviço de eventos?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "O evento é planejado de forma personalizada. Entendemos a necessidade do cliente, o formato da ocasião e o número de convidados para então montar uma proposta gastronômica adequada."
            }
        },
        {
            "@type": "Question",
            "name": "Vocês fazem apenas entrega ou também serviço no local?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Trabalhamos nas duas modalidades: Entrega de barcas ou montagens gastronômicas prontas, e Serviço no local com equipe realizando preparo e atendimento."
            }
        },
        {
            "@type": "Question",
            "name": "Existe número mínimo de pessoas?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Sim. Para eventos com serviço no local, trabalhamos com mínimo de 20 pessoas. Para montagens ornamentadas ou barcas especiais, trabalhamos com mínimo de 300 peças."
            }
        },
        {
            "@type": "Question",
            "name": "O cardápio é personalizado?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Sim. Cada evento é estruturado de acordo com a proposta do cliente e a viabilidade operacional do serviço."
            }
        },
        {
            "@type": "Question",
            "name": "O que é necessário no local para eventos in house?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Para eventos realizados no local do cliente, solicitamos uma estrutura mínima: Bancada ou espaço de apoio para preparo, Pia/banca com ponto d'água, e Refrigerador disponível. Levamos todos os insumos, utensílios e materiais necessários para execução do serviço."
            }
        },
        {
            "@type": "Question",
            "name": "Vocês atendem eventos em Angra e região?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Sim. Atendemos eventos em Angra dos Reis e região mediante consulta de disponibilidade."
            }
        },
        {
            "@type": "Question",
            "name": "Como solicitar orçamento?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "O orçamento é feito de forma personalizada, mediante consulta de data, número de convidados e formato do evento."
            }
        }
    ]
}
</script>

<?php
get_footer();