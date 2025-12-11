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

// MARK:Shop filter
 let total = 0;

        function toggleCategory(element) {
            const category = element.parentElement;
            const subcategories = category.querySelector('.subcategories');

            if (subcategories) {
                const isActive = subcategories.classList.contains('active');

                // Close all other subcategories
                document.querySelectorAll('.subcategories').forEach(sub => {
                    sub.classList.remove('active');
                });

                // Toggle current subcategory
                if (!isActive) {
                    subcategories.classList.add('active');
                    element.classList.add('active');
                } else {
                    element.classList.remove('active');
                }
            }

            // Remove active class from all headers except Featured Favorites
            document.querySelectorAll('.category-header').forEach(header => {
                if (header !== element && !header.textContent.includes('Featured Favorites')) {
                    header.classList.remove('active');
                }
            });

            // Add active class to clicked header if it's not a subcategory toggle
            if (!subcategories || !element.classList.contains('active')) {
                element.classList.add('active');
            }
        }

        function placeOrder() {
            if (total > 0) {
                alert(`Order placed! Total: $${total.toFixed(2)}`);
                total = 0;
                document.getElementById('totalAmount').textContent = '0.00';
            } else {
                alert('Please add items to your cart firsttttt!');
            }
        }

        function toggleMobileMenu() {
            const sidebar = document.getElementById('sidebar');
            const overlay = document.querySelector('.overlay');
            sidebar.classList.toggle('active');
            overlay.classList.toggle('active');
        }

         function activateQty(button) {
            let card = button.closest(".product-card");
            let qtyBox = card.querySelector(".qty-box");

            button.style.display = "none";
            qtyBox.style.display = "flex";
        }



          function increaseQty(btn) {
              let qty = btn.parentElement.querySelector(".qty-value");
              qty.innerText = parseInt(qty.innerText) + 1;
          }

          function decreaseQty(btn) {
              let qty = btn.parentElement.querySelector(".qty-value");
              let addBtn = btn.closest(".product-card").querySelector(".add-btn");

              let value = parseInt(qty.innerText) - 1;

              if (value <= 0) {
                  // Hide qty box and show Add to Cart button
                  btn.parentElement.style.display = "none";
                  addBtn.style.display = "inline-block";
                  qty.innerText = 1; // reset value for next time
              } else {
                  qty.innerText = value;
              }
          }

        // Shop filter

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
