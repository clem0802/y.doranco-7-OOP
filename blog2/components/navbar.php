<link rel="stylesheet" href="./public/styles/navbar.css">

<nav>
    <div class="brand">
        <svg id="menuButton" width="32" height="32" viewBox="0 0 1080 1080" fill="#245195">
            <rect y="849" width="1080" height="231" rx="93" />
            <rect width="1080" height="231" rx="93" />
            <rect y="424" width="1080" height="231" rx="93" />
        </svg>
        <p class="brandText">BRAND</p>
    </div>
    
    <ul class="menu">
        <li class="link"><a href="./index.php">Accueil</a></li>
        <?php
        	if (isset($_SESSION['user'])) {
        		echo '<li class="link"><a href="./profil.php">Profil</a></li>';
        		echo '<li class="link"><a href="./routes/logout.php">Se déconnecter</a></li>';
        	} else {
        		echo ' <li class="link"><a href="./auth.php">Se connecter</a></li>';
        	}
        ?>

        <!-- <li class="link"><a href="./profil.php">Profil</a></li> -->
    </ul>
</nav>

<script src="./public/scripts/navbar.js"></script>