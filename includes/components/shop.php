 <!-- Shop Section -->
    <section class="shop-title-section" id="home">
        <div class="container">
            <h1 class="shop-title">SHOP</h1>
        </div>
    </section>
    <section class="shop" id="home">
        <!-- <img src="https://images.unsplash.com/photo-1610832958506-aa56368176cf?w=1920" alt="Fresh Figs" class="shop-image"> -->


        <!-- product section start -->
         <div class="overlay" onclick="toggleMobileMenu()"></div>

    <button class="mobile-menu-toggle" onclick="toggleMobileMenu()">
        📋 Menu Categories
    </button>

    <div class="container">
        <!-- Sidebar -->
        <aside class="sidebar" id="sidebar">
            <div class="category">
                <div class="category-header active">
                    <img src="assets/images/food-tray.png" alt="Featured" class="category-icon">
                    <span class="category-title">Seasonals</span>
                </div>
            </div>

            <div class="category">
                <div class="category-header" onclick="toggleCategory(this)">
                    <img src="assets/images/food-tray.png" alt="Grinch" class="category-icon">
                    <span class="category-title">Italians</span>
                </div>
            </div>

            <div class="category">
                <div class="category-header" onclick="toggleCategory(this)">
                    <img src="assets/images/food-tray.png" alt="Extra Value" class="category-icon">
                    <span class="category-title">Mushrooms</span>
                </div>
            </div>

            <div class="category">
                <div class="category-header" onclick="toggleCategory(this)">
                    <img src="assets/images/food-tray.png" alt="McValue" class="category-icon">
                    <span class="category-title">Salads</span>
                </div>
            </div>

            <div class="category">
                <div class="category-header" onclick="toggleCategory(this)">
                    <img src="assets/images/food-tray.png" alt="McValue" class="category-icon">
                    <span class="category-title">Dry Goods</span>
                </div>
            </div>

            <div class="category">
                <div class="category-header" onclick="toggleCategory(this)">
                    <img src="assets/images/food-tray.png" alt="McValue" class="category-icon">
                    <span class="category-title">Charcuteries</span>
                </div>
            </div>

            <div class="category">
                <div class="category-header" onclick="toggleCategory(this)">
                    <img src="assets/images/food-tray.png" alt="McNuggets" class="category-icon">
                    <span class="category-title">Chees</span>
                </div>
            </div>

            <div class="category">
                <div class="category-header" onclick="toggleCategory(this)">
                    <img src="assets/images/food-tray.png" alt="Snack Wrap" class="category-icon">
                    <span class="category-title">Diary</span>
                </div>
            </div>

            <div class="category">
                <div class="category-header" onclick="toggleCategory(this)">
                    <img src="assets/images/food-tray.png" alt="McNuggets" class="category-icon">
                    <span class="category-title">Herbs</span>
                </div>
            </div>

            <div class="category">
                <div class="category-header" onclick="toggleCategory(this)">
                    <img src="assets/images/food-tray.png" alt="Snack Wrap" class="category-icon">
                    <span class="category-title">Juices</span>
                </div>
            </div>

            <div class="category">
                <div class="category-header" onclick="toggleCategory(this)">
                    <img src="assets/images/food-tray.png" alt="McValue" class="category-icon">
                    <span class="category-title">Vegetables</span>
                </div>
            </div>


            <!-- <div class="category">
                <div class="category-header" onclick="toggleCategory(this)">
                    <img src="assets/images/food-tray.png" alt="Breakfast" class="category-icon">
                    <span class="category-title">Breakfast</span>
                    <div class="arrow"></div>
                </div>
                <div class="subcategories">
                    <div class="subcategory-item">All Breakfast</div>
                    <div class="subcategory-item">McMuffins</div>
                    <div class="subcategory-item">Biscuits</div>
                    <div class="subcategory-item">Hotcakes & Sausage</div>
                </div>
            </div> -->

            <!-- <div class="category">
                <div class="category-header" onclick="toggleCategory(this)">
                    <img src="assets/images/food-tray.png" alt="Burgers" class="category-icon">
                    <span class="category-title">Burgers</span>
                    <div class="arrow"></div>
                </div>
                <div class="subcategories">
                    <div class="subcategory-item">Beef Burgers</div>
                    <div class="subcategory-item">Chicken Burgers</div>
                    <div class="subcategory-item">Value Burgers</div>
                </div>
            </div> -->

            <!-- <div class="category">
                <div class="category-header" onclick="toggleCategory(this)">
                    <img src="assets/images/food-tray.png" alt="Chicken" class="category-icon">
                    <span class="category-title">Chicken Sandwiches</span>
                    <div class="arrow"></div>
                </div>
                <div class="subcategories">
                    <div class="subcategory-item">Crispy Chicken</div>
                    <div class="subcategory-item">Grilled Chicken</div>
                    <div class="subcategory-item">Fish Filet</div>
                </div>
            </div> -->


            <!-- <div class="category">
                <div class="category-header" onclick="toggleCategory(this)">
                    <img src="assets/images/food-tray.png" alt="Fries" class="category-icon">
                    <span class="category-title">Fries & Sides</span>
                    <div class="arrow"></div>
                </div>
                <div class="subcategories">
                    <div class="subcategory-item">French Fries</div>
                    <div class="subcategory-item">Apple Slices</div>
                    <div class="subcategory-item">Side Salad</div>
                </div>
            </div> -->
        </aside>

        <!-- Main Content -->
        <main class="main-content">
            <!-- <div class="header">
                <h1>McDonald's Menu</h1>
            </div>

            <h2 class="section-title">Featured Favorites</h2> -->

            <div style="text-align: center;">
                <span class="badge">Category 1</span>
            </div>

            <div class="product-grid">

                <div class="product-card" data-name="Egg McMuffin" data-price="4.99">
                    <img src="assets/images/footer-logo.png" class="product-image">
                    <div class="product-name">Tomato</div>
                    <button class="add-btn" onclick="activateQty(this)">Add to Cart</button>


                    <div class="qty-box" style="display:none;">
                        <button class="qty-btn" onclick="decreaseQty(this)">−</button>
                        <span class="qty-value">1</span>
                        <button class="qty-btn" onclick="increaseQty(this)">+</button>
                    </div>
                </div>

                <div class="product-card" data-name="Sausage Burrito" data-price="2.99">
                    <img src="assets/images/footer-logo.png" class="product-image">
                    <div class="product-name">Apple</div>
                    <button class="add-btn" onclick="activateQty(this)">Add to Cart</button>

                    <div class="qty-box" style="display:none;">
                        <button class="qty-btn" onclick="decreaseQty(this)">−</button>
                        <span class="qty-value">1</span>
                        <button class="qty-btn" onclick="increaseQty(this)">+</button>
                    </div>
                </div>

                <div class="product-card" data-name="McCafe Iced Coffee" data-price="2.49">
                    <img src="assets/images/footer-logo.png" class="product-image">
                    <div class="product-name">Orange</div>
                    <button class="add-btn" onclick="activateQty(this)">Add to Cart</button>

                    <div class="qty-box" style="display:none;">
                        <button class="qty-btn" onclick="decreaseQty(this)">−</button>
                        <span class="qty-value">1</span>
                        <button class="qty-btn" onclick="increaseQty(this)">+</button>
                    </div>
                </div>

                <div class="product-card" data-name="McCafe Iced Coffee" data-price="2.49">
                    <img src="assets/images/footer-logo.png" class="product-image">
                    <div class="product-name">Tomato</div>
                    <button class="add-btn" onclick="activateQty(this)">Add to Cart</button>

                    <div class="qty-box" style="display:none;">
                        <button class="qty-btn" onclick="decreaseQty(this)">−</button>
                        <span class="qty-value">1</span>
                        <button class="qty-btn" onclick="increaseQty(this)">+</button>
                    </div>
                </div>

                <div class="product-card" data-name="McCafe Iced Coffee" data-price="2.49">
                    <img src="assets/images/footer-logo.png" class="product-image">
                    <div class="product-name">Apple</div>
                    <button class="add-btn" onclick="activateQty(this)">Add to Cart</button>

                    <div class="qty-box" style="display:none;">
                        <button class="qty-btn" onclick="decreaseQty(this)">−</button>
                        <span class="qty-value">1</span>
                        <button class="qty-btn" onclick="increaseQty(this)">+</button>
                    </div>
                </div>

            </div>


            <div style="text-align: center; margin-top: 40px;">
                <span class="badge">Category 2</span>
            </div>

            <div class="product-grid">
                <div class="product-card" data-name="Egg McMuffin" data-price="4.99">
                    <img src="assets/images/footer-logo.png" class="product-image">
                    <div class="product-name">Tomato</div>
                    <button class="add-btn" onclick="activateQty(this)">Add to Cart</button>


                    <div class="qty-box" style="display:none;">
                        <button class="qty-btn" onclick="decreaseQty(this)">−</button>
                        <span class="qty-value">1</span>
                        <button class="qty-btn" onclick="increaseQty(this)">+</button>
                    </div>
                </div>

                <div class="product-card" data-name="Egg McMuffin" data-price="4.99">
                    <img src="assets/images/footer-logo.png" class="product-image">
                    <div class="product-name">Apple</div>
                    <button class="add-btn" onclick="activateQty(this)">Add to Cart</button>


                    <div class="qty-box" style="display:none;">
                        <button class="qty-btn" onclick="decreaseQty(this)">−</button>
                        <span class="qty-value">1</span>
                        <button class="qty-btn" onclick="increaseQty(this)">+</button>
                    </div>
                </div>

                <div class="product-card" data-name="Egg McMuffin" data-price="4.99">
                    <img src="assets/images/footer-logo.png" class="product-image">
                    <div class="product-name">Orange</div>
                    <button class="add-btn" onclick="activateQty(this)">Add to Cart</button>


                    <div class="qty-box" style="display:none;">
                        <button class="qty-btn" onclick="decreaseQty(this)">−</button>
                        <span class="qty-value">1</span>
                        <button class="qty-btn" onclick="increaseQty(this)">+</button>
                    </div>
                </div>

                <div class="product-card" data-name="Egg McMuffin" data-price="4.99">
                    <img src="assets/images/footer-logo.png" class="product-image">
                    <div class="product-name">Tomato</div>
                    <button class="add-btn" onclick="activateQty(this)">Add to Cart</button>


                    <div class="qty-box" style="display:none;">
                        <button class="qty-btn" onclick="decreaseQty(this)">−</button>
                        <span class="qty-value">1</span>
                        <button class="qty-btn" onclick="increaseQty(this)">+</button>
                    </div>
                </div>

                <div class="product-card" data-name="Egg McMuffin" data-price="4.99">
                    <img src="assets/images/footer-logo.png" class="product-image">
                    <div class="product-name">Apple <span class="comeback-badge">Tag</span> </div>
                    <button class="add-btn" onclick="activateQty(this)">Add to Cart</button>


                    <div class="qty-box" style="display:none;">
                        <button class="qty-btn" onclick="decreaseQty(this)">−</button>
                        <span class="qty-value">1</span>
                        <button class="qty-btn" onclick="increaseQty(this)">+</button>
                    </div>
                </div>

            </div>
        </main>
    </div>

    <!-- Footer Sticky Bar -->
    <div class="footer-bar">
        <div class="total-info">
            Total: $<span id="totalAmount">200.00</span>
        </div>
        <button class="order-btn" onclick="placeOrder()">Order Now</button>
    </div>
    <!-- Product section end -->

    </section>
