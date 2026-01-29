  <style>

        .in-season-hero-section {
            padding: 40px 160px;
        }

        .in-season-hero-section h1 {
            letter-spacing: -4px;
            line-height: 0.8;
            color: #000000;
            font-size: 6em;
            font-family: "AFHVTW+Archivo SemiBold";
            text-transform: uppercase;
            margin-bottom:50px;
        }

        .in-season-hero-section p {
    letter-spacing: -2px;
    line-height: 90%;
    color: #000000;
    margin-bottom: 100px;
    font-size: 33pt;
    font-family: "SONMQO+Archivo SemiBold";
    color: #000000;
        }

       .products-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 24px;
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
    font-size: 3em;
    font-family: "AFHVTW+Archivo SemiBold";
    color: #000000;
    letter-spacing: -0.0413em;
    margin-top: 40px;
    margin-bottom: 30px;
}

.product-card p {
    letter-spacing: -2px;
    line-height: 90%;
    color: #000000;
    margin-bottom: 100px;
    font-size: 33pt;
    font-family: "SONMQO+Archivo SemiBold";
    color: #000000;
    text-align: justify;
}

        .wholesale-section {
            padding: 40px 160px;
        }

        .wholesale-section h2 {
            font-size: 6em;
            font-family: "AFHVTW+Archivo SemiBold";
            color: #000000;
            font-family: "AFHVTW+Archivo SemiBold";
            text-transform: uppercase;
                letter-spacing: -0.04em;
                line-height: 1.51em;
        }

        .full-width-image {
            width: 100%;
            height: 700px;
            background-image: url('https://www.farmafrica.org/wp-content/uploads/2025/09/RS25698_Godfrey-Kirimi-displays-tomoatoes-from-his-farm-in-Tharaka-Nithi.-Photo-credit-Farm-Africa-Bertha-Lutome_lpr.jpg');
            background-size: cover;
            background-position: center;
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .cta-button {
            background: #f6ff01;
            color: #000;
            padding: 18px 50px;
            font-size: 4.164642em;
            border-radius: 15px;
            font-weight: 900;
            text-transform: uppercase;
            border: none;
            cursor: pointer;
            letter-spacing: -2px;
            font-family: "AFHVTW+Archivo SemiBold";
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3);
            transition: transform 0.3s ease;
        }

        .cta-button:hover {
            transform: translateY(-2px);
            box-shadow: 0 12px 25px rgba(0,0,0,0.4);
        }

       footer{
    display: flex;
    align-items: center;
    justify-content: space-between; /* left & right fixed */
    padding: 80px 160px;
    position: relative;
}

/* Left */
.footer-left{
    display: flex;
    flex-direction: column;
    align-items: flex-start;
}
.footer-left span{
    font-size: 2.416667em;
    font-family: "SONMQO+Archivo SemiBold";
    color: #000000;
    line-height: 80px;
}

/* Right */
.footer-right{
    display: flex;
    flex-direction: column;
    align-items: flex-end;
}
.footer-right span{
    font-size: 2.416667em;
    font-family: "SONMQO+Archivo SemiBold";
    color: #000000;
    line-height: 80px;
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

<section class="in-season-hero-section">
        <h1>In Season</h1>
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh
euismod tincidunt ut laoreet dolore magna. Lorem ipsum dolor sit amet, consectetuer
adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna .</p>

        <div class="products-grid">
            <div class="product-card">
                <div class="product-image">
                    <img src="assets/images/slider1.jpg" alt="">
                </div>
                <h3>Cardoni</h3>
                <p>met, consectetuer
adipiscing elit, sed diam
nonummy nibh euismod
tincidunt ut laoreet dolore
magna aliquam erat volutpat.
Ut wisi enim ad minim
veniam, quis nostrud
exerci tation</p>
            </div>
            <div class="product-card">
                <div class="product-image">
                    <img src="assets/images/slider2.jpg" alt="">
                </div>
                <h3>Cardoni</h3>
                <p>met, consectetuer
adipiscing elit, sed diam
nonummy nibh euismod
tincidunt ut laoreet dolore
magna aliquam erat volutpat.
Ut wisi enim ad minim
veniam, quis nostrud
exerci tation</p>
            </div>
            <div class="product-card">
                <div class="product-image">
                    <img src="assets/images/slider3.jpg" alt="">
                </div>
                <h3>Cardoni</h3>
                <p>met, consectetuer
adipiscing elit, sed diam
nonummy nibh euismod
tincidunt ut laoreet dolore
magna aliquam erat volutpat.
Ut wisi enim ad minim
veniam, quis nostrud
exerci tation</p>
            </div>
        </div>
    </section>

    <section class="wholesale-section">
        <h2>Wholesale</h2>
    </section>

    <section class="full-width-image">
        <button class="cta-button">Become a Customer</button>
    </section>