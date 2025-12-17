// --- swiper.js content moved here ---
function initSwiperComponent() {
  return {
    direction: 'horizontal',
    loop: true,
    autoplay: {
      delay: 5000,
      disableOnInteraction: false,
    },
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
      type: 'bullets',
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    effect: 'slide',
    speed: 400,
    spaceBetween: 60,
    slidesPerView: 2,
    centeredSlides: true,
    grabCursor: true,
    initialSlide: 0,
    autoHeight: false,
    breakpoints: {
      0: { slidesPerView: 1, spaceBetween: 2 },
      700: { slidesPerView: 2, spaceBetween: 2 },
      1100: { slidesPerView: 2, spaceBetween: 2 },
    }
  };
}
// --- end swiper.js content ---


// initialize
document.addEventListener("DOMContentLoaded", function () {
  const config = initSwiperComponent();
  new Swiper('.swiper', config);
});


//MARK:Toggle Menu
function toggleMenu() {
            const nav = document.getElementById('nav');
            nav.classList.toggle('active');
        }

        // Close menu when clicking on a link
        document.querySelectorAll('nav a').forEach(link => {
            link.addEventListener('click', () => {
                document.getElementById('nav').classList.remove('active');
            });
        });

        // Smooth scrolling
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });
