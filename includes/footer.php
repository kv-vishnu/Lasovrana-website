<!-- Footer -->
    <footer>
        <div class="footer-container">
            <img src="assets/images/footer-logo.png" alt="">
        </div>
        <div class="footer-bottom">
            <p>&copy; 2025 Lasovrana. All rights reserved</p>
        </div>
    </footer>
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