  <style>

        .in-season-hero-section {
            /* padding: 40px 75px; */
        }

        .in-season-hero-section h1 {
            letter-spacing: -2px;
            line-height: 0.8;
            color: #000000;
            font-size: 72px;
            font-family: "AFHVTW+Archivo SemiBold";
            text-transform: uppercase;
            margin-bottom:50px;
        }

        .in-season-hero-section p {
    letter-spacing: -2px;
    line-height: 90%;
    color: #000000;
    margin-bottom: 10px;
    font-size: 33pt;
    font-family: "SONMQO+Archivo SemiBold";
    color: #000000;
        }

       .products-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
        }

/* Image wrapper */
.product-image {
    width: 100%;
    aspect-ratio: 4 / 3;   /* keeps consistent image height */
    overflow: hidden;
}

/* Responsive image */
.product-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;     /* crop nicely without stretch */
    display: block;
}

.product-card h3 {
    font-size: 25px;
    font-family: "AFHVTW+Archivo SemiBold";
    color: #000000;
    letter-spacing: -0.0413em;
    margin-top: 15px;
    margin-bottom: 15px;
    text-transform:uppercase;
}

.product-card p {
    letter-spacing: 0px;
    line-height: 25px;
    color: #000000;
    margin-bottom: 10px;
    font-size: 20px;
    font-family: "SONMQO+Archivo SemiBold";
    color: #000000;
    text-align: justify;
}

        .wholesale-section {
            /* padding: 40px 75px; */
        }

        .wholesale-section h2 {
            font-size: 72px;
            font-family: "AFHVTW+Archivo SemiBold";
            color: #000000;
            text-transform: uppercase;
                letter-spacing: -2px;
                line-height: 1.51em;
        }

       .full-width-image {
    width: 100%;
    height: 700px;
    background-image: url('https://www.farmafrica.org/wp-content/uploads/2025/09/RS25698_Godfrey-Kirimi-displays-tomoatoes-from-his-farm-in-Tharaka-Nithi.-Photo-credit-Farm-Africa-Bertha-Lutome_lpr.jpg');
    background-size: cover;
    background-position: center;
    position: relative;
}

/* Dark overlay */
.full-width-image .overlay {
    position: absolute;
    inset: 0;
    background: rgba(0, 0, 0, 0.45);
}

/* Center content */
.cta-content {
    position: relative;
    z-index: 2;
    height: 100%;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    text-align: center;
    gap: 30px;
}
.cta-button{
    font-family: "AFHVTW+Archivo SemiBold";
    text-transform:uppercase;
    display: inline-block;
    padding: 12px 28px;
    border: 2px solid #fff;
    color: #fff;
    font-size: 20px;
    text-decoration: none;
    background: transparent;
    transition: 0.3s ease;
    margin-bottom: 50px;
}

/* Paragraph styling */
.cta-text {
    max-width: 33%;
    font-size: 40px;
    line-height: 1.2;
    letter-spacing: -1px;
    font-family: "SONMQO+Archivo SemiBold";
    color: #ffffff;
    margin: 0;
}


       footer{
    display: flex;
    align-items: center;
    justify-content: space-between; /* left & right fixed */
    padding: 80px 75px;
    position: relative;
    background:#1c1c1c;
}

/* Left */
.footer-left{
    display: flex;
    flex-direction: column;
    align-items: flex-start;
}
.footer-left span{
    font-size: 16px;
    color: #d3caca;
    line-height: 50px;
}
.footer-left a{
    color: #d3caca;
    font-style: normal;
        font-size: 16px;
        letter-spacing: .004em;
        text-transform: uppercase;
}
.footer-right a{
    color: #d3caca;
    font-style: normal;
        font-size: 16px;
        letter-spacing: .004em;
        text-transform: uppercase;
}

/* Right */
.footer-right{
    display: flex;
    flex-direction: column;
}
.footer-right span{
    font-size: 16px;
    color:#d3caca;
    line-height: 50px;
}
/* Center Logo */
.footer-center{
    position: absolute;
    left: 50%;
    transform: translateX(-50%);
}

.footer-center img{
    max-width: 140px;   /* adjust size */
    height: auto;
}
.learn-more {
    display: inline-block;
    margin-top: 10px;
    font-weight: 600;
    color: #000;
    text-decoration: none;
}

.learn-more:hover {
    text-decoration: underline;
}


        @media (max-width: 768px) {
            .products-grid {
                grid-template-columns: 1fr;
            }

            .in-season-hero-section h1,
            .wholesale-section h2 {
                font-size: 32px;
            }

            footer {
                flex-direction: column;
                gap: 30px;
                text-align: center;
            }

            .footer-right {
                align-items: center;
            }
        }
    </style>

    <div class="container">
        <section class="mb-5">
        <div class="position-relative">
            <img
                src="https://www.geocledian.com/wp-content/uploads/2024/07/farmer-farming-sustainable-support-rate-application.jpg"
                alt="Banner"
                class="img-fluid w-100 object-fit-cover"
                style="width: -webkit-fill-available;"
            >
        </div>
    </section>


<section class="in-season-hero-section">
        <h1>In Season</h1>


        <div class="products-grid">
            <div class="product-card">
                <div class="product-image">
                    <img src="assets/images/slider1.jpg" alt="">
                </div>
                <a href="whats-season.php" class="title-link"><h3>Cardoni</h3></a>
                <p>When winter comes around, we can’t help but look forward to the arrival of Blood Oranges. ⁠Bright, sweet and full of character, they come at just the right time. An antidote to cold, bitter days and a testament, as always, to our grower Carmelo’s skillful touch.⁠ We’ve been working with Carmelo for two decades now – one of our longest landing grower relationships. His orchards are located at the foot of Mount Etna in sun-soaked Sicily, high above sea level.</p>
                <a href="whats-season.php" class="learn-more">Learn more →</a>
            </div>
            <div class="product-card">
                <div class="product-image">
                    <img src="assets/images/slider2.jpg" alt="">
                </div>
                <a href="whats-season.php" class="title-link"><h3>Cardoni</h3></a>
                <p>When winter comes around, we can’t help but look forward to the arrival of Blood Oranges. ⁠Bright, sweet and full of character, they come at just the right time. An antidote to cold, bitter days and a testament, as always, to our grower Carmelo’s skillful touch.⁠ We’ve been working with Carmelo for two decades now – one of our longest landing grower relationships. His orchards are located at the foot of Mount Etna in sun-soaked Sicily, high above sea level.</p>
                <a href="whats-season.php" class="learn-more">Learn more →</a>
            </div>
        </div>
    </section>

    <section class="wholesale-section">
        <h2>Wholesale</h2>
    </section>

    <section class="full-width-image">
    <div class="overlay"></div>

    <div class="cta-content">
        <button class="cta-button">Become a Customer</button>

        <p class="cta-text">
            Supplying fresh, seasonal produce directly from trusted farmers to
            wholesalers, retailers, and businesses.
        </p>
    </div>
</section>

</div>