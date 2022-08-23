
<?php 
    $links = [
        [
            'url' => '/y.doranco-7-OOP/tp/index.php',
            'name' => '0/ Home (index.php)',
        ],
        [
            'url' => '/y.doranco-7-OOP/tp/pages/1articles.php',
            'name' => '1/ Articles (var)',
        ],
        [
            'url' => '/y.doranco-7-OOP/tp/pages/2category.php',
            'name' => '2/ Category (condit)',
        ],
        [
            'url' => '/y.doranco-7-OOP/tp/pages/3about.php',
            'name' => '3/ About Me (loop)',
        ],
        [
            'url' => '/y.doranco-7-OOP/tp/pages/4contact.php',
            'name' => '4/ Contact (func)',
        ],
        [
            'url' => '/y.doranco-7-OOP/tp/pages/5oop.php',
            'name' => '5/ (à voir) (func)',
        ],
    ]

// SVG: Scalable Vector Graphic
?>

<link rel="stylesheet" href="/y.doranco-7-OOP/tp/styles/navbar.css">

<nav>
    <svg id="menuButton" width="32" height="32" viewBox="0 0 1080 1080" fill="#245195">
        <rect y="849" width="1080" height="231" rx="93" />
        <rect width="1080" height="231" rx="93" />
        <rect y="424" width="1080" height="231" rx="93" />
    </svg>
    <p id='brand'>BRAND</p>
    <!-- <img src='php.svg'> -->
    <ul id='menu'>
        <?php
        	foreach ($links as $key => $link) {
        		echo '
                <li>
                    <a href=' . $link['url'] . ' >' . $link['name'] . '</a>
                </li>
                ';
        	}
        ?>
    </ul>
</nav>

<script src="/y.doranco-7-OOP/tp/script/navbar.js"></script>