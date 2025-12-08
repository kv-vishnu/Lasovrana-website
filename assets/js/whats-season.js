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
      0: { slidesPerView: 1, spaceBetween: 20 },
      700: { slidesPerView: 2, spaceBetween: 20 },
      1100: { slidesPerView: 2, spaceBetween: 20 },
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

  //MARK: What Season Tabs
  function openTab(evt, tabName) {
            const tabContents = document.getElementsByClassName('tab-content');
            for (let i = 0; i < tabContents.length; i++) {
                tabContents[i].classList.remove('active');
            }

            const tabButtons = document.getElementsByClassName('tab-button');
            for (let i = 0; i < tabButtons.length; i++) {
                tabButtons[i].classList.remove('active');
            }

            document.getElementById(tabName).classList.add('active');
            evt.currentTarget.classList.add('active');
        }

  //MARK: Masonry Gallery
   const images = [
      'https://picsum.photos/500/400',
      'https://picsum.photos/500/600',
      'https://picsum.photos/500/400',
      'https://picsum.photos/500/400',
      'https://picsum.photos/500/400'
    ];

    let currentIndex = 0;

    function openLightbox(index) {
      currentIndex = index;
      const lightbox = document.getElementById('lightbox');
      const lightboxImg = document.getElementById('lightbox-img');
      lightboxImg.src = images[currentIndex];
      lightbox.classList.add('active');
      document.body.style.overflow = 'hidden';
    }

    function closeLightbox(event) {
      if (event.target.id === 'lightbox' || event.target.classList.contains('lightbox-close')) {
        const lightbox = document.getElementById('lightbox');
        lightbox.classList.remove('active');
        document.body.style.overflow = 'auto';
      }
    }

    function changeImage(direction, event) {
      event.stopPropagation();
      currentIndex += direction;

      if (currentIndex < 0) {
        currentIndex = images.length - 1;
      } else if (currentIndex >= images.length) {
        currentIndex = 0;
      }

      const lightboxImg = document.getElementById('lightbox-img');
      lightboxImg.style.animation = 'none';
      setTimeout(() => {
        lightboxImg.src = images[currentIndex];
        lightboxImg.style.animation = 'zoomIn 0.3s ease';
      }, 10);
    }

    document.addEventListener('keydown', (e) => {
      const lightbox = document.getElementById('lightbox');
      if (lightbox.classList.contains('active')) {
        if (e.key === 'Escape') {
          closeLightbox({ target: lightbox });
        } else if (e.key === 'ArrowLeft') {
          changeImage(-1, e);
        } else if (e.key === 'ArrowRight') {
          changeImage(1, e);
        }
      }
    });
    // End of Masonry Gallery