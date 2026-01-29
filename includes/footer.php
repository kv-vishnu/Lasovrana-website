<footer>
    <div class="footer-left">
        <span>info@lasovrana.co.uk</span>
    </div>

    <div class="footer-center">
        <img src="assets/images/footer-logo.png" alt="">
    </div>

    <div class="footer-right">
        <span>Unit 427-428 Distribution Block B, SW8 5EQ</span>
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