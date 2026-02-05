<footer>
    <!-- Left: Email + Address -->
    <div class="footer-left">
        <span style="font-weight:bold;">EMAIL</span>
        <span>
            <a href="mailto:info@lasovrana.co.uk">info@lasovrana.co.uk</a>
        </span>

        <span style="margin-top:20px;font-weight:bold;">ADDRESS</span>
        <span>Unit 427–428 Distribution Block B, SW8 5EQ</span>
    </div>

    <!-- Center: Logo -->
    <div class="footer-center">
        <img src="assets/images/footer-logo.png" alt="Lasovrana Logo">
    </div>

    <!-- Right: Quick Links -->
    <div class="footer-right">
        <span style="font-weight:bold;">QUICK LINKS</span>
        <span><a href="/">Home</a></span>
        <span><a href="/shop">Shop</a></span>
        <span><a href="/wholesale">Wholesale</a></span>
        <span><a href="/contact">Contact</a></span>
    </div>
</footer>

<div class="footer-bottom">
    <p>© 2026 Lasovrana. All Rights Reserved.</p>
</div>

<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
<?php
if (!empty($page_assets[$current_page]["js"])) {
    foreach ($page_assets[$current_page]["js"] as $js) {
        echo '<script src="'.$js.'"></script>'."\n";
    }
}
?>
</body>
</html>