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

  //MARK: Open An Account Modal
  const openBtns = document.querySelectorAll('.openAccountBtn'); // multiple buttons
        const modal = document.getElementById('accountModal');
        const closeBtn = document.getElementById('closeModal');
        const form = document.getElementById('accountForm');

        // Open modal on any button click
        openBtns.forEach(btn => {
            btn.addEventListener('click', function(e) {
                e.preventDefault();
                modal.classList.add('active');
            });
        });

        // Close modal
        closeBtn.addEventListener('click', function() {
            modal.classList.remove('active');
        });

        // Close when clicking outside modal-content
        window.addEventListener('click', function(e) {
            if (e.target === modal) {
                modal.classList.remove('active');
            }
        });

        // Form submit
        form.addEventListener('submit', function(e) {
            e.preventDefault();

            const formData = {
                name: document.getElementById('name').value,
                phone: document.getElementById('phone').value,
                email: document.getElementById('email').value,
                address: document.getElementById('address').value,
                message: document.getElementById('message').value
            };

            console.log('Form submitted:', formData);
            alert('Thank you! Your account request has been submitted.');

            form.reset();
            modal.classList.remove('active');
        });