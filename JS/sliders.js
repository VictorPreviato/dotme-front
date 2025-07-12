document.addEventListener("DOMContentLoaded", () => {
  // === Inicialização segura do Swiper ===
  const checkSwiper = setInterval(() => {
    if (typeof Swiper !== 'undefined' && document.querySelector('.slide-content')) {
      clearInterval(checkSwiper);

      // Seleciona todos os carrosseis com a classe slide-wrapper (envolve cada bloco individualmente)
      document.querySelectorAll('.slide-wrapper').forEach(wrapper => {
        const sliderEl = wrapper.querySelector('.slide-content');
        const paginationEl = wrapper.querySelector('.swiper-pagination');
        const nextBtn = wrapper.querySelector('.swiper-button-next');
        const prevBtn = wrapper.querySelector('.swiper-button-prev');

        if (sliderEl) {
          new Swiper(sliderEl, {
            slidesPerView: 3,
            spaceBetween: 25,
            loop: true,
            centerSlide: true,
            fade: true,
            grabCursor: true,
            pagination: {
              el: paginationEl,
              clickable: true,
              dynamicBullets: true,
            },
            navigation: {
              nextEl: nextBtn,
              prevEl: prevBtn,
            },
            breakpoints: {
              0: { slidesPerView: 1 },
              520: { slidesPerView: 2 },
              950: { slidesPerView: 3 },
            },
          });
        }
      });
    }
  }, 100);
  
  // === Slider manual (cards-box) continua como antes ===
  const cardSliders = document.querySelectorAll('.cards-box');
  if (cardSliders.length) {
    cardSliders.forEach(el => {
      const imageNodes = el.querySelectorAll('.card:not(.hide)');
      const arrIndexes = [];

      (() => {
        let start = 0;
        while (imageNodes.length > start) {
          arrIndexes.push(start++);
        }
      })();

      const setIndex = (arr) => {
        for (let i = 0; i < imageNodes.length; i++) {
          imageNodes[i].dataset.slide = arr[i];
        }
      };

      el.addEventListener('click', () => {
        arrIndexes.unshift(arrIndexes.pop());
        setIndex(arrIndexes);
      });

      setIndex(arrIndexes);
    });
  }
});
