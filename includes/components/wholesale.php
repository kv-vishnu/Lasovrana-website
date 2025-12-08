<div class="wholesale">
    <section class="wholesale-banner">
        <div class="wholesale-content">
            <h1 class="wholesale-title">Wholesale</h1>
            <p class="wholesale-desc"> Our brand strategy is at the centre of everything we do. It defines our
core essence. It shapes what we want to stand for in people's minds,
and how we want to show up in the world. It forms the foundation of
every piece of communication we create.</p>
        </div>
    </section>

     <!-- Section start -->
        <section class="hero-section-with-title-and-button">
            <img src="https://www.geocledian.com/wp-content/uploads/2024/07/farmer-farming-sustainable-support-rate-application.jpg"
                alt="background" class="hero-bg">

            <div class="overlay"></div>

            <div class="hero-content">
                <a href="#" class="hero-btn openAccountBtn">Open An Account</a>

                <p class="hero-description">
                    But today, too much of the food we buy is<br>
produced for quantity and not quality.<br>
 Mass production, complex supply chains and<br>
unnatural harvest cycles are depriving our<br>
tastebuds of the richest, sweetest and juiciest<br>
experiences that nature has to offer.

                </p>
            </div>
        </section>
        <!-- Section end -->

<!-- Two coloumn Layout start -->
        <section class="two-coloum-layout-with-image-text">
            <div class="container">
                <h2 class="what-season_tab_title">Manifesto</h2>
            </div>

            <!-- FIRST ROW : IMAGES -->
            <div class="container images-row">

                <div class="split-image">
                    <img src="https://cdn.sanity.io/images/ftjhtw5n/production/c39c79710a09f5e5b32aa3555ed0c118d89bad98-1080x1350.jpg?w=1920&h=2400&q=70&fit=crop&crop=center&auto=format">
                </div>

                <div class="split-image">
                    <img src="https://cdn.sanity.io/images/ftjhtw5n/production/c39c79710a09f5e5b32aa3555ed0c118d89bad98-1080x1350.jpg?w=1920&h=2400&q=70&fit=crop&crop=center&auto=format">
                </div>

            </div>

            <!-- SECOND ROW : PARAGRAPHS -->
            <div class="container content-row">
                <p>La Sovrana doesn’t sell fruit and vegetables.
 We share the joy of authentic Italian produce with
kitchens, shops and homes around the world.
Passed down through generations, we bring our rich
expertise straight from our farms to the table.
Selecting the very best that mother nature has to offer,
every day and every season.
 Perfectly ripe. Always fresh. Never rushed.
 Hand picked at its peak. The only way it should be.
 We deliver pride, passion and promise in abundance.
 Freshness you can feel. Flavour you can’t forget.
 Simple. Seasonal. Sensational.
 Picked by hand, shared with heart</p>
                <p>La Sovrana</p>
                <p>Picked by hand, shared with heart.</p>

                <!-- THIRD ROW : BUTTON -->
                <a href="#" class="btn openAccountBtn">Open An Account</a>
            </div>
        </section>

        <!-- Two coloumn Layout end -->


    </section>
    <?php include 'includes/components/swiper.php'; ?>
</div>

<!-- Modal Popup -->
    <div id="accountModal" class="modal">
        <div class="modal-content">
            <span class="close-btn" id="closeModal">&times;</span>
            <h2>Open An Account</h2>
            <form id="accountForm">
                <div class="form-group">
                    <label for="name">Name *</label>
                    <input type="text" id="name" name="name" required>
                </div>

                <div class="form-group">
                    <label for="phone">Phone *</label>
                    <input type="tel" id="phone" name="phone" required>
                </div>

                <div class="form-group">
                    <label for="email">Email *</label>
                    <input type="email" id="email" name="email" required>
                </div>

                <div class="form-group">
                    <label for="address">Address *</label>
                    <input type="text" id="address" name="address" required>
                </div>

                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea id="message" name="message"></textarea>
                </div>

                <button type="submit" class="submit-btn">Submit</button>
            </form>
        </div>
    </div>
    <!-- Modal Popup End -->