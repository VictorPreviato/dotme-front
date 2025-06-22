<div class="footer">
  <img src="IMG/LOGOS/DotPetLogT.png" alt="" class="logofoot">
  <div class="linkfoot">
    <a href="">Sobre Nós</a>
    <a href="">Contato</a>
    <a href="">Apoie o Projeto</a>
    <a href="">FAQ</a>
    <a href="">Redes Sociais</a>
    <div style="text-align: center; margin-top:5%"><?php echo "© " . date("Y") . " DotMe | Todos os direitos reservados " ?></div>
  </div>

</div>

<script src="//cdn.jsdelivr.net/gh/freeps2/a7rarpress@main/swiper-bundle.min.js"></script>

<script src="//cdn.jsdelivr.net/gh/freeps2/a7rarpress@main/script.js"></script>

<script>
  var swiper = new Swiper(".slide-content", {
    slidesPerView: 3,
    spaceBetween: 25,
    loop: true,
    centerSlide: 'true',
    fade: 'true',
    grabCursor: 'true',
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
      dynamicBullets: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },

    breakpoints: {
      0: {
        slidesPerView: 1,
      },
      520: {
        slidesPerView: 2,
      },
      950: {
        slidesPerView: 3,
      },
    },
  });
</script>

<script>
  window.onload = () => {
    let sliderImagesBox = document.querySelectorAll('.cards-box');
    sliderImagesBox.forEach(el => {
      let imageNodes = el.querySelectorAll('.card:not(.hide)')
      let arrIndexes = []; // Index array
      (() => {
        // The loop that added values to the arrIndexes array for the first time
        let start = 0;
        while (imageNodes.length > start) {
          arrIndexes.push(start++);
        }
      })();

      let setIndex = (arr) => {
        for (let i = 0; i < imageNodes.length; i++) {
          imageNodes[i].dataset.slide = arr[i] // Set indexes
        }
      }
      el.addEventListener('click', () => {
        arrIndexes.unshift(arrIndexes.pop());
        setIndex(arrIndexes)
      })
      setIndex(arrIndexes) // The first indexes addition
    });
  };
</script>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>

</body>

</html>