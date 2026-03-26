<?php
/*
Template Name: Sobre
*/
 
get_header(); ?>

<section id="about-hero">
    <div class="container">
        <div class="row">
            <h1>Uma experiência que <br/>nasce do cuidado</h1>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/hero-about-img.jpg"
                alt="Interior elegante do restaurante Terramaki em Angra dos Reis" class="hero-img">
            </div>
        </div>
    </div>
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about-hero-bg.svg"
        class="hero-bottom-bg-img" alt="Decoração japonesa minimalista do ambiente Terramaki">
</section>

<?php
    get_template_part(
        'template-parts/about-section-template',
        'card',
        array(
            'titulo' => 'Um encontro que dá origem à nossa essência',
            'texto1' => 'O Terramaki nasce do encontro entre duas forças que moldam nossa identidade: a precisão da técnica japonesa e a sensibilidade brasileira que acolhe, cria e abraça.',
            'texto2' => 'Somos uma casa gastronômica que valoriza o fazer bem-feito, do corte ao cuidado. Aqui, qualidade não é promessa. É prática diária, construída na constância, no rigor dos processos e no respeito absoluto ao ingrediente.',
        )
    );
 ?>

<section class="about-space-section first">
    <div class="container">
        <div class="row mobile-reversed">
            <div class="col-xl-6">
                <h2>Sazonalidade e <br/>criação</h2>
                 <img class="d-xl-none" src="<?php echo get_template_directory_uri(); ?>/assets/images/restaurant-plate.jpg"
                        alt="Prato sazonal de sushi artesanal do Terramaki" loading="lazy">
                <h4>Nossa cozinha está sempre em evolução.</h4>
                <p>Menus sazonais, peixe do dia e criações exclusivas mantêm a experiência em constante renovação, convidando à descoberta e à curiosidade.
                    <br/>
                    <br/>
                    Cada visita é uma nova possibilidade de surpreender
                </p>
                <a href="https://wa.me/5524999407094?text=Olá!%20Gostaria%20de%20reservar%20uma%20mesa" class="btn green" target="_blank" rel="noopener">Reserve sua mesa</a>
            </div>
            <div class="col-xl-6 d-flex justify-content-end">
                <img class="d-none d-xl-block" src="<?php echo get_template_directory_uri(); ?>/assets/images/restaurant-plate.jpg"
                        alt="Prato sazonal de sushi artesanal do Terramaki" loading="lazy">
            </div>
        </div>
    </div>
</section>

<section class="about-space-section second">
    <div class="container">
        <div class="row mobile-reversed">
            <div class="col-xl-6">
                <img class="d-none d-xl-block" src="<?php echo get_template_directory_uri(); ?>/assets/images/restaurant-lounge.png"
                        alt="Salão acolhedor do Terramaki com iluminação ambiente" loading="lazy">
            </div>
            <div class="col-xl-6">
                <h2>Um espaço para desacelerar</h2>
                <img class="d-xl-none" src="<?php echo get_template_directory_uri(); ?>/assets/images/restaurant-lounge.png"
                        alt="Salão acolhedor do Terramaki com iluminação ambiente" loading="lazy">
                <h4>Luz, textura, sons e aromas se unem para criar uma atmosfera acolhedora, elegante e tranquila.</h4>
                <p>Um ambiente pensado para conversas sem pressa, encontros especiais, celebrações íntimas e momentos que merecem ser vividos com atenção.
                    <br/>
                    <br/>
                    Aqui, o tempo desacelera para que a experiência aconteça.
                </p>
                <a href="https://wa.me/5524999407094?text=Olá!%20Gostaria%20de%20reservar%20uma%20mesa" class="btn green" target="_blank" rel="noopener">Reserve sua mesa</a>
            </div>
        </div>
    </div>
</section>

<section class="about-space-section third">
    <div class="container">
            <div class="row mobile-reversed">
            <div class="col-xl-6">
                <h2>Diversão segura para eles</h2>
                 <img class="d-xl-none" src="<?php echo get_template_directory_uri(); ?>/assets/images/restaurant-playground.jpg"
                        alt="Espaço kids com recreadores para crianças no Terramaki" loading="lazy">
                <h4>Temos um espaço kids com recreadores para seus filhos</h4>
                <p>Pensado para que toda a família viva a experiência Terramaki com leveza, tranquilidade e prazer. Enquanto os pequenos se divertem com segurança, os adultos podem saborear o momento com calma, presença e conexão.  
                    <br/>
                    <br/>
                    Porque cuidar da experiência também é cuidar de quem você ama.
                </p>
                <a href="https://wa.me/5524999407094?text=Olá!%20Gostaria%20de%20reservar%20uma%20mesa" class="btn green" target="_blank" rel="noopener">Reserve sua mesa</a>
            </div>
            <div class="col-xl-6 d-flex justify-content-end">
                <img class="d-none d-xl-block" src="<?php echo get_template_directory_uri(); ?>/assets/images/restaurant-playground.jpg"
                        alt="Espaço kids com recreadores para crianças no Terramaki" loading="lazy">
            </div>
        </div>
    </div>
</section>

<section id="faq-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Perguntas frequentes</h2>
               
                <div class="accordion accordion-container" id="faq">
                    <div class="accordion-item">
                        <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq1">
                        É necessário fazer reserva?
                        </button>
                        <div id="faq1" class="accordion-collapse collapse" data-bs-parent="#faq">
                            <div class="accordion-body">
                                Não é obrigatório fazer reserva, porém recomendamos para datas especiais, comemorações ou grupos maiores, garantindo melhor organização do atendimento.
                                Reservas podem ser feitas através do WhatsApp do restaurante.    
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq2">
                            O atendimento é por ordem de chegada?
                        </button>
                        <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faq">
                            <div class="accordion-body">
                                Sim, o atendimento no salão é realizado por ordem de chegada, respeitando a capacidade da casa.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq3">
                            Vocês aceitam comemorações e eventos especiais no salão?
                        </button>
                        <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faq">
                            <div class="accordion-body">
                                Sim. Recebemos comemorações como aniversários e encontros especiais. Recomendamos entrar em contato previamente para melhor organização.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq4">
                           Qual o horário de funcionamento?
                        </button>
                        <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faq">
                            <div class="accordion-body">
                                Funcionamos todos os dias das 18h30 às 23h00
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq5">
                           Vocês trabalham com rodízio?
                        </button>
                        <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#faq">
                            <div class="accordion-body">
                                Não. Nosso serviço é à la carte, com foco na qualidade e apresentação das peças.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq6">
                           Vocês possuem opções vegetarianas ou sem glúten?
                        </button>
                        <div id="faq6" class="accordion-collapse collapse" data-bs-parent="#faq">
                            <div class="accordion-body">
                                Por ora não mas estamos trabalhando ao máximo para oferecer opções em breve.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq7">
                           Como funciona o Espaço Kids?
                        </button>
                        <div id="faq7" class="accordion-collapse collapse" data-bs-parent="#faq">
                            <div class="accordion-body">
                               O restaurante possui um Espaço Kids dedicado às crianças, com monitor responsável.

                                •⁠  ⁠Valor: R$ 15 por criança
                                •⁠  ⁠Tempo de permanência: livre durante o período da visita

                                O espaço foi desenvolvido para oferecer conforto e entretenimento às crianças enquanto os responsáveis aproveitam a experiência gastronômica.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq8">
                           Aceitam cartões refeição e alimentação ?
                        </button>
                        <div id="faq8" class="accordion-collapse collapse" data-bs-parent="#faq">
                            <div class="accordion-body">
                               Aceitamos:

                                Cartões refeição:
                                    •	Alelo
                                    •	Sodexo
                                    •	Pluxee
                                    •	VR
                                    •	Ticket

                                Para alimentação, aceitamos VR Alimentação.
                            </div>
                        </div>
                    </div>
                </div>
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
            "name": "É necessário fazer reserva?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Não é obrigatório fazer reserva, porém recomendamos para datas especiais, comemorações ou grupos maiores, garantindo melhor organização do atendimento. Reservas podem ser feitas através do WhatsApp do restaurante."
            }
        },
        {
            "@type": "Question",
            "name": "O atendimento é por ordem de chegada?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Sim, o atendimento no salão é realizado por ordem de chegada, respeitando a capacidade da casa."
            }
        },
        {
            "@type": "Question",
            "name": "Vocês aceitam comemorações e eventos especiais no salão?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Sim. Recebemos comemorações como aniversários e encontros especiais. Recomendamos entrar em contato previamente para melhor organização."
            }
        },
        {
            "@type": "Question",
            "name": "Qual o horário de funcionamento?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Funcionamos todos os dias das 18h30 às 23h00."
            }
        },
        {
            "@type": "Question",
            "name": "Vocês trabalham com rodízio?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Não. Nosso serviço é à la carte, com foco na qualidade e apresentação das peças."
            }
        },
        {
            "@type": "Question",
            "name": "Vocês possuem opções vegetarianas ou sem glúten?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Por ora não, mas estamos trabalhando ao máximo para oferecer opções em breve."
            }
        },
        {
            "@type": "Question",
            "name": "Como funciona o Espaço Kids?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "O restaurante possui um Espaço Kids dedicado às crianças, com monitor responsável. Valor: R$ 15 por criança. Tempo de permanência: livre durante o período da visita. O espaço foi desenvolvido para oferecer conforto e entretenimento às crianças enquanto os responsáveis aproveitam a experiência gastronômica."
            }
        },
        {
            "@type": "Question",
            "name": "Aceitam cartões refeição e alimentação?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Aceitamos cartões refeição: Alelo, Sodexo, Pluxee, VR e Ticket. Para alimentação, aceitamos VR Alimentação."
            }
        }
    ]
}
</script>

<?php
get_footer();