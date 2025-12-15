<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width,initial-scale=1" />
<title>Lasovrana</title>
<!-- Swiper CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
<link href="https://fonts.googleapis.com/css2?family=Archivo:wght@100..900&display=swap" rel="stylesheet">

<?php
$current_page = basename($_SERVER["PHP_SELF"], ".php");

// Page-specific assets
$page_assets = [
    "index" => [
        "css" => ["assets/css/home.css"],
        "js"  => ["assets/js/home.js"]
    ],
    "index-green" => [
        "css" => ["assets/css/home.css"],
        "js"  => ["assets/js/home.js"]
    ],
    "shop" => [
        "css" => ["assets/css/shop.css"],
        "js"  => ["assets/js/shop.js"]
    ],
    "whats-season" => [
        "css" => ["assets/css/whats-season.css"],
        "js"  => ["assets/js/whats-season.js"]
    ],
    "our-story" => [
        "css" => ["assets/css/our-story.css"],
        "js"  => ["assets/js/our-story.js"]
    ],
    "wholesale" => [
        "css" => ["assets/css/wholesale.css"],
        "js"  => ["assets/js/wholesale.js"]
    ]
];
?>

<?php
if (!empty($page_assets[$current_page]["css"])) {
    foreach ($page_assets[$current_page]["css"] as $css) {
        echo '<link rel="stylesheet" href="'.$css.'">'."\n";
    }
}
?>

</head>
<body>
<header>
        <div class="header-container">
            <a href="#" class="logo"><img src="assets/images/lasovrana-header-logo.png" alt=""></a>

            <nav id="nav">
                <a href="index.php">Home</a>
                <a href="shop.php">Shop</a>
                <a href="our-story.php">Our Story</a>
                <a href="whats-season.php">What’s in season</a>
                <a href="wholesale.php">Wholesale</a>
            </nav>

            <div class="header-buttons">
                <a href="#"><img src="assets/images/user-icon.png" alt=""></a>
                <a href="#"><img src="assets/images/cart-icon.png" alt=""></a>
            </div>

            <button class="mobile-menu-btn" onclick="toggleMenu()">☰</button>
        </div>
</header>