  <style>

        .in-season-hero-section {
            padding: 40px 60px;
        }

        .in-season-hero-section h1 {
           font-size: 6.730591em;
            letter-spacing: -4px;
            line-height: 0.8;
            color: #000000;
            font-size: 6.730591em;
            font-family: "AFHVTW+Archivo SemiBold";
            text-transform: uppercase;
            margin-bottom:30px;
        }

        .in-season-hero-section p {
    font-size: 33pt;
    font-weight: 600;
    letter-spacing: -2px;
    line-height: 90%;
    color: #000000;
    margin-bottom: 100px;
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
    font-size: 33pt;
    font-weight: 852;
    line-height: 1.05;
    margin-top: 40px;
    margin-bottom: 30px;
    letter-spacing: -4px;
    transform: scaleY(1.09);
    transform-origin: center;
    line-height: 90%;
    color: #000000;
    text-transform: capitalize;
}

.product-card p {
    font-size: 33pt;
    font-weight: 600;
    letter-spacing: -2px;
    line-height: 90%;
    color: #000000;
}

        .wholesale-section {
            padding: 40px 60px;
        }

        .wholesale-section h2 {
            letter-spacing: -4px;
            line-height: 0.8;
            color: #000000;
            font-size: 6.7em;
            font-family: "AFHVTW+Archivo SemiBold";
            text-transform: uppercase;
        }

        .full-width-image {
            width: 100%;
            height: 800px;
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
            font-size: 50px;
            border-radius: 15px;
            font-weight: 900;
            text-transform: uppercase;
            border: none;
            cursor: pointer;
            letter-spacing: -2px;
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
    padding: 80px 80px;
    position: relative;
}

/* Left */
.footer-left{
    display: flex;
    flex-direction: column;
    align-items: flex-start;
}
.footer-left span{
    font-size: 33pt;
    font-weight: 500;
    letter-spacing: -1px;
    line-height: 1.1;
    color: #000000;
}

/* Right */
.footer-right{
    display: flex;
    flex-direction: column;
    align-items: flex-end;
}
.footer-right span{
    font-size: 33pt;
    font-weight: 500;
    letter-spacing: -1px;
    line-height: 1.1;
    color: #000000;
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
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna.</p>

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
exerci</p>
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
exerci</p>
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
exerci</p>
            </div>
        </div>
    </section>

    <section class="wholesale-section">
        <h2>Wholesale</h2>
    </section>

    <section class="full-width-image">
        <button class="cta-button">Become a Customer</button>
    </section>