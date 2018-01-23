<?php

// Initialize the session

session_start();

 

// If session variable is not set it will redirect to login page

if(!isset($_SESSION['username']) || empty($_SESSION['username'])){

  header("location: login.php");

  exit;

}

?>
<!DOCTYPE html>
<html class="gr__thewildhoneypie_com" data-scrapbook-source="http://www.thewildhoneypie.com/" data-scrapbook-create="20180110104724337" lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="P22.studio">

    <link rel="apple-touch-icon" sizes="180x180" href="http://www.thewildhoneypie.com/apple-touch-icon.d19bc23240a3c289080ce9f51fb54f99.png">
    <meta name="apple-mobile-web-app-title" content="TWHP">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon-16x16.997c5bbe27756f6cdf5d8909a713e6c2.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.997c5bbe27756f6cdf5d8909a713e6c2.png">
    <link rel="manifest" href="http://www.thewildhoneypie.com/favicons/manifest.61d6fd10a9add39d36ac95340fea56d2.json">
    <link rel="mask-icon" href="http://www.thewildhoneypie.com/safari-pinned-tab.d0781f684347d583392d21df8ddf604b.svg" color="#78c6ff">
    <meta name="theme-color" content="#ffffff">

    <title>Where are my graffs</title>

    <meta property="og:title" content="The Wild Honey Pie">
    <meta property="og:locale" content="en_US">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="The Wild Honey Pie">
    <meta property="og:description" content="The Wild Honey Pie is a music discovery community where you can submit songs and find your next favorite bands">
    <meta name="description" content="The Wild Honey Pie is a music discovery community where you can submit songs and find your next favorite bands">
    <meta property="og:image" content="http://www.thewildhoneypie.com/og-image.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:url" content="http://www.thewildhoneypie.com/">

    <link href="styles.css" rel="stylesheet">

    <script async=""></script>
    <script async=""></script>
</head>

<body data-gr-c-s-loaded="true" cz-shortcut-listen="true">
    <div id="content">
        <div class="header">
            <!-- <a class="header__logo" href="">
                <img alt="The Wild Honey Pie Logo" srcset="d9a6481f70a524b08612aaf4643af892-360.png 360w,
                  b22f226f3161cb61192a3eb317fc271b-500.png 500w,
                  c7c2c3c5702dd6d34b037edd18d8de32-720.png 720w,
                  f5aa6fa00929329a8c0025501621231a-870.png 1000w" sizes="(max-width: 768px) 86vw, (max-width: 992px) 500px, 360px" src="b22f226f3161cb61192a3eb317fc271b-500.png">
            </a> -->

            <a class="mobile-nav-button" id="mobile-nav-button"></a>

            <ul class="nav" id="nav">
                <li class="nav__item hide-above-md">
                    <a class="nav__link link" href="">Home</a>
                </li>
                <li class="nav__item">
                    <a class="nav__link link " href="http://www.thewildhoneypie.com/videos">Map</a>
                </li>
                <li class="nav__item">
                    <a class="nav__link link " href="http://www.thewildhoneypie.com/playlists">Playlists</a>
                </li>
                <li class="nav__item">
                    <a class="nav__link link " href="http://www.thewildhoneypie.com/events">Events</a>
                </li>
                <li class="nav__item">
                    <a class="nav__link link " href="http://www.thewildhoneypie.com/submit">Submit</a>
                </li>
                <li class="nav__item">
                    <a class="nav__link link " href="http://www.thewildhoneypie.com/about">About</a>
                </li>
                <li class="nav__item hide-below-md">
                    <a class="nav__link link " href="http://www.thewildhoneypie.com/search">Search</a>
                </li>
                <form action="http://www.thewildhoneypie.com/search" class="hide-above-md">
                    <input name="q" class="search" placeholder="Search" value="" type="search">
                    <input value="Search" class="submit submit--hidden" type="submit">
                </form>
            </ul>
        </div>



        <div id="transition-wrapper" class="transition-wrapper">
            <div class="container container--full transition-container">

                <a class="section feature" href="http://www.thewildhoneypie.com/videos/tank-and-the-bangas">
                    <div class="feature__content">
                        <h1 class="feature__title header-text">WHERE ARE MY GRAFFS</h1>
                        <p class="feature__subtitle link">Lyon</p>
                    </div>
                    <div class="feature__image">
                        <img class="blob" src="street.png" alt="Tank and the Bangas">
                    </div>
                </a>

                <div class="section">
                    <a href="http://www.thewildhoneypie.com/videos" class="view-all">View All</a>
                    <a href="/StreetArt/commentaires/minichat.php" class="view-all">Poster</a>
                    <h2 class="header-text header-text--small">Dernieres photos postées</h2>
                    <hr class="line">

                    <div class="grid limit-6-4-4">
                        <a class="grid-item" href="http://www.thewildhoneypie.com/videos/overcoats">
                            <img class="grid-item__image" srcset="overcoats-lisaito-1240x1240.png 320w,
            overcoats-lisaito-1240x1240-1.png 500w,
            overcoats-lisaito-1240x1240-2.png 640w,
            overcoats-lisaito-1240x1240-3.png 1000w" sizes="(max-width: 576px) 86vw, 320px" src="overcoats-lisaito-1240x1240-1.png" data-transition="source" alt="Overcoats">
                            <h3 class="grid-item__title header-text header-text--small">Overcoats</h3>
                            <h4 class="grid-item__subtitle link">Released June 6, 2017</h4>
                        </a>
<?php
// Connexion à la base de données
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=street;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

// Récupération des 10 derniers messages
$reponse = $bdd->query('SELECT pseudo, message FROM minichat ORDER BY ID DESC LIMIT 0, 10');

// Affichage de chaque message (toutes les données sont protégées par htmlspecialchars)
while ($donnees = $reponse->fetch())
{
	echo '<p><strong>' . htmlspecialchars($donnees['pseudo']) . '</strong> : '  . htmlspecialchars($donnees['message']) .'</p>';
}

$reponse->closeCursor();

?>
                        
                    </div>

                </div>

                <hr class="line line--bee-left">
               
                <a class="section feature feature--reverse" href="http://www.thewildhoneypie.com/buzzing-daily">
                    <div class="feature__content">
                        <h1 class="feature__title header-text">Location of works:</h1>
                        <p class="feature__subtitle link">Follow us</p>
                    </div>
                    <div class="feature__image">
                        <img class="blob"
                   src="logostreetartmap.png" alt="Buzzing Daily">
                    </div>
                </a>
                

                <div class="section">
                    <a href="http://www.thewildhoneypie.com/playlists" class="view-all">View All</a>
                    <h2 class="header-text header-text--small">Recently Updated Playlists</h2>
                    <hr class="line">

                    <div class="grid limit-3-4-4">
                        <a class="grid-item" href="http://www.thewildhoneypie.com/playlists/guest-list">
                            <img class="grid-item__image" srcset="Guest_List-modesta.jpg 320w,
            Guest_List-modesta-1.jpg 500w,
            Guest_List-modesta-2.jpg 640w,
            Guest_List-modesta-3.jpg 1000w" sizes="(max-width: 576px) 86vw, 320px" src="Guest_List-modesta-1.jpg" data-transition="source" alt="Guest List">
                            <h3 class="grid-item__title header-text header-text--small">Guest List</h3>
                            <h4 class="grid-item__subtitle link">Updated January 8, 2018</h4>
                        </a>

                        <a class="grid-item" href="http://www.thewildhoneypie.com/playlists/top-100-songs-of-2017">
                            <img class="grid-item__image" srcset="TOP100SONGS_WILDHONEY_preview.jpg 320w,
            TOP100SONGS_WILDHONEY_preview-1.jpg 500w,
            TOP100SONGS_WILDHONEY_preview-2.jpg 640w,
            TOP100SONGS_WILDHONEY_preview-3.jpg 1000w" sizes="(max-width: 576px) 86vw, 320px" src="TOP100SONGS_WILDHONEY_preview-1.jpg" data-transition="source" alt="Top 100 Songs of 2017">
                            <h3 class="grid-item__title header-text header-text--small">Top 100 Songs of 2017</h3>
                            <h4 class="grid-item__subtitle link">Updated December 21, 2017</h4>
                        </a>

                        <a class="grid-item" href="http://www.thewildhoneypie.com/playlists/top-30-albums-of-2017">
                            <img class="grid-item__image" srcset="TOP30ALBUMS_WILDHONEY_preview.jpg 320w,
            TOP30ALBUMS_WILDHONEY_preview-1.jpg 500w,
            TOP30ALBUMS_WILDHONEY_preview-2.jpg 640w,
            TOP30ALBUMS_WILDHONEY_preview-3.jpg 1000w" sizes="(max-width: 576px) 86vw, 320px" src="TOP30ALBUMS_WILDHONEY_preview-1.jpg" data-transition="source" alt="Top 30 Albums of 2017 ">
                            <h3 class="grid-item__title header-text header-text--small">Top 30 Albums of 2017 </h3>
                            <h4 class="grid-item__subtitle link">Updated December 21, 2017</h4>
                        </a>

                        <a class="grid-item" href="http://www.thewildhoneypie.com/playlists/weeks-top-releases">
                            <img class="grid-item__image" srcset="Weeks_Top_Releases-modesta.jpg 320w,
            Weeks_Top_Releases-modesta-1.jpg 500w,
            Weeks_Top_Releases-modesta-2.jpg 640w,
            Weeks_Top_Releases-modesta-3.jpg 1000w" sizes="(max-width: 576px) 86vw, 320px" src="Weeks_Top_Releases-modesta-1.jpg" data-transition="source" alt="Week's Top Releases ">
                            <h3 class="grid-item__title header-text header-text--small">Week's Top Releases </h3>
                            <h4 class="grid-item__subtitle link">Updated October 3, 2017</h4>
                        </a>

                    </div>

                </div>

                <hr class="line line--bee-right">

                <div class="section section__header header-text header-text--medium">
                    <a href="http://www.thewildhoneypie.com/submit"> Sortez de chez vous avant de trouver une raison valable de rester enfermé.</a>
                </div>

                <hr class="line line--bee-left">

                <a class="section feature" href="http://bit.ly/RCywAt">
                    <div class="feature__content">
                        <h1 class="feature__title header-text">Welcome newcomer </h1>
                        <p class="feature__subtitle link">Attend the event</p>
                    </div>
                    <div class="feature__image">
                        <img class="blob" src="graffeurs.jpg" alt="Welcome Campers">
                    </div>
                </a>

                <div class="section socials">
                    <hr class="line line--bee-right">
                    <span class="header-text header-text--center">Subscribe</span>
                    <div class="socials__icon-wrap">
                        <a class="social-link" href="http://bit.ly/2gPhRIW" target="_blank" rel="nofollow">
                            <img class="social-link__icon" srcset="facebook.png 140w,
                facebook-1.png 240w" sizes="(max-width: 575px) 92px, (max-width: 980px) 116px, 67px" src="facebook-1.png" alt="Facebook">
                        </a>
                        <a class="social-link" href="http://bit.ly/TzrASr" target="_blank" rel="nofollow">
                            <img class="social-link__icon" srcset="youtube.png 140w,
                youtube-1.png 240w" sizes="(max-width: 575px) 92px, (max-width: 980px) 116px, 67px" src="youtube-1.png" alt="YouTube">
                        </a>
                        <a class="social-link" href="http://bit.ly/2zW4IVN" target="_blank" rel="nofollow">
                            <img class="social-link__icon" srcset="instagram.png 140w,
                instagram-1.png 240w" sizes="(max-width: 575px) 92px, (max-width: 980px) 116px, 67px" src="instagram-1.png" alt="Instagram">
                        </a>
                        <a class="social-link" href="http://bit.ly/18kWJ7g" target="_blank" rel="nofollow">
                            <img class="social-link__icon" srcset="twitter.png 140w,
                twitter-1.png 240w" sizes="(max-width: 575px) 92px, (max-width: 980px) 116px, 67px" src="twitter-1.png" alt="Twitter">
                        </a>
                        <a class="social-link" href="http://spoti.fi/2yjqtCz" target="_blank" rel="nofollow">
                            <img class="social-link__icon" srcset="spotify.png 140w,
                spotify-1.png 240w" sizes="(max-width: 575px) 92px, (max-width: 980px) 116px, 67px" src="spotify-1.png" alt="Spotify">
                        </a>
                        <a class="social-link" href="http://www.thewildhoneypie.com/subscribe">
                            <img class="social-link__icon" src="e756ddec0a93e243d8d5106e6e8fc570-291.png" alt="Email">
                        </a>
                    </div>
                </div>

                

        <!-- Footer -->
       
                <p class="footer__copyright paragraph">© 2018 The Wild Vivi. All rights reserved.</p>
           
   

    <!-- Bootstrap core JavaScript -->
    <script></script>
    <script></script>

    <script></script>




</body>

</html>