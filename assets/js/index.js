$(".owl-carousel-tecnique").owlCarousel({
  items: 1,
  smartSpeed: 450,
  dots: true,
  autoplay: true,
});

$(".owl-carousel-statements").owlCarousel({
  items: 2,
  stagePadding: 50,
  center: true,
  loop: true,
  margin: 24,
  responsive: {
    0: {
      items: 1,
    },
    768: {
      items: 2,
    },
  },
});

// GALERIA //
const cards = document.querySelectorAll(".gallery-card");
let order = [...cards];
function updateStack() {
  order.forEach((card, i) => {
    gsap.to(card, {
      duration: 0.5,
      rotate: [-6, 4, 0][i] || 0,
      x: [-40, 40, 0][i] || 0,
      scale: [0.92, 0.96, 1][i] || 0.9,
      zIndex: i,
    });
  });
}

document.querySelector(".next").onclick = () => {
  const last = order.pop();

  order.unshift(last);

  updateStack();
};

document.querySelector(".prev").onclick = () => {
  const first = order.shift();

  order.push(first);

  updateStack();
};

updateStack();

// *** //

// SCROLL ANIMATION - SCROLLYTELLING //
gsap.registerPlugin(ScrollTrigger, ScrollToPlugin);

const slides = gsap.utils.toArray("#tecnique-section .tecnique-item");
const wrapper = document.querySelector("#tecnique-section .tecnique-wrapper");
const section = document.querySelector("#tecnique-section");
const progressDots = document.querySelectorAll(".progress-dot");

if (slides.length > 0 && section) {
  // Estado inicial: todos ocultos exceto o primeiro
  // autoAlpha combina opacity + visibility automaticamente
  gsap.set(slides, {
    autoAlpha: 0,
    y: 50,
    scale: 0.98,
  });

  gsap.set(slides[0], {
    autoAlpha: 1,
    y: 0,
    scale: 1,
  });

  // Função para atualizar dots ativos
  function updateProgressDots(activeIndex) {
    progressDots.forEach((dot, index) => {
      if (index === activeIndex) {
        dot.classList.add("active");
      } else {
        dot.classList.remove("active");
      }
    });
  }

  // Timeline principal controlada pelo scroll
  const tl = gsap.timeline({
    scrollTrigger: {
      trigger: section,
      start: "top top",
      end: () => "+=" + window.innerHeight * slides.length * 1.2,
      pin: true,
      pinSpacing: true,
      scrub: 1.5,
      onUpdate: (self) => {
        // Usa o progresso do scroll (0-1) para determinar o slide ativo
        // Divide o progresso em segmentos iguais para cada slide
        const progress = self.progress;
        const segmentSize = 1 / slides.length;
        let activeIndex = Math.floor(progress / segmentSize);

        // Garante que não ultrapasse o último slide
        activeIndex = Math.min(activeIndex, slides.length - 1);

        updateProgressDots(activeIndex);
      },
    },
  });

  // Cria a animação de transição entre slides (sequencial, sem sobreposição)
  // Cada slide ocupa 1 segmento de tempo na timeline (0-1, 1-2, 2-3, etc.)
  slides.forEach((slide, index) => {
    if (index > 0) {
      // Posição na timeline onde a transição acontece
      const transitionStart = index;

      // Saída completa do slide anterior
      tl.to(
        slides[index - 1],
        {
          autoAlpha: 0,
          y: -30,
          scale: 1.01,
          duration: 0.4,
          ease: "sine.out",
        },
        transitionStart,
      );

      // Entrada do novo slide (após saída completa)
      tl.to(
        slide,
        {
          autoAlpha: 1,
          y: 0,
          scale: 1,
          duration: 0.4,
          ease: "sine.out",
        },
        transitionStart + 0.4,
      );
    }
  });

  // Adiciona tempo de pausa no final para o último slide ficar visível
  tl.to({}, { duration: 0.5 });

  // Click nos dots para navegar
  progressDots.forEach((dot, index) => {
    dot.addEventListener("click", () => {
      const scrollTriggerInstance = tl.scrollTrigger;
      // Calcula o progresso alvo baseado no segmento do slide
      const segmentSize = 1 / slides.length;
      const targetProgress = index * segmentSize + segmentSize / 2; // Centro do segmento
      const targetScroll =
        scrollTriggerInstance.start +
        (scrollTriggerInstance.end - scrollTriggerInstance.start) *
          targetProgress;

      gsap.to(window, {
        scrollTo: targetScroll,
        duration: 0.8,
        ease: "power2.inOut",
      });
    });
  });
}
