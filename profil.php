<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" lang="fr"
        content="Rachel Albersario, Thanh-Trang Luu, Jules Cointrel, Paul Barbosa & Yohan Guyot">
    <meta name="description" content="Bienvenue sur Slyde, la première plateforme de collaboration musicale !">

    <meta property="og:type" content="website">
    <meta property="og:url" content="https://slyde.fr/profil.php">
    <meta property="og:title" content="SLYDE - Profil">
    <meta property="og:description" content="Bienvenue sur Slyde, la première plateforme de collaboration musicale !">
    <meta property="og:image" content="https://www.slyde.fr/assets/img/card/card.jpg">

    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://slyde.fr/profil.php">
    <meta property="twitter:title" content="SLYDE - Profil">
    <meta property="twitter:description"
        content="Bienvenue sur Slyde, la première plateforme de collaboration musicale !">
    <meta property="twitter:image" content="https://www.slyde.fr/assets/card/card.jpg">

    <title>SLYDE - Profil</title>

    <link rel="stylesheet" href="assets/css/styles.css">

    <link rel="icon" href="assets/img/favicon.ico">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">

    <link rel="apple-touch-icon" sizes="120x120" href="assets/img/card/apple-touch-icon-120x120-precomposed.png">
    <link rel="apple-touch-icon" sizes="152x152" href="assets/img/card/apple-touch-icon-152x152-precomposed.png">
</head>

<body>
    <!-- LOGO -->
    <a href="feed.php">
        <img class="logo fixed" src="assets/img/logos/logo.png" alt="logo" draggable="false">
    </a>

    <!-- NAVBAR -->
    <nav class="navbar">
        <div class="search-bar">
            <input type="search" placeholder="Un projet, un artiste, un instrument ..." name="the_search">
        </div>

        <div class="absolute-right">
            <div class="wrapper-absolute-right">
                <a class="create-project" href="inscription.php">Créer un projet</a>

                <!-- <div class="dropdown">
                    <div onclick="myFunction()" class="profile">
                        <img src="../assets/img/icons/notif.svg" alt="notif" class="notif" draggable="false">
                    </div>
                    <div id="myDropdown" class="dropdown-content">
                        <a href="#">Notifications</a>
                        <a href="#">Notifications</a>
                        <a href="#">Notifications</a>
                    </div>
                </div> -->

                <div class="dropdown">
                    <div onclick="myFunction()" class="profile">
                        <img src="../assets/img/icons/notif.svg" alt="Profil" class="dropbtn notif" draggable="false">
                    </div>
                    <div id="myDropdown" class="dropdown-content">
                        <a href="#">Profil</a>
                    </div>
                </div>

                <div class="dropdown">
                    <div onclick="myFunction2()" class="profile">
                        <img src="../assets/img/icons/messages.svg" alt="Profil" class="dropbtn messages"
                            draggable="false">
                    </div>
                    <div id="myDropdown2" class="dropdown-content">
                        <a href="#">Profil</a>
                        <a href="#">Editer le profil</a>
                        <a href="#">Paramètres</a>
                    </div>
                </div>

                <div class="dropdown">
                    <div onclick="myFunction3()" class="profile">
                        <img src="assets/img/background/john.jpg" alt="Profil" class="dropbtn" draggable="false">
                    </div>
                    <div id="myDropdown3" class="dropdown-content">
                        <a href="#">Profil</a>
                        <a href="#">Editer le profil</a>
                        <a href="#">Paramètres</a>
                        <hr>
                        <a href="#">Se deconnecter</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- WRAPPER -->
    <div class="wrapper-feed">
        <div class="profile-header">


            <img src="https://source.unsplash.com/44OGRilO66Y/1600x900" alt="" class="profile-cover">

            <div class="profile-menu">
                <div class="infos">
                        <img src="https://source.unsplash.com/COgbRUTvL-s/900x900" alt="" class="profile-img">
                    <h2 class="profile-name">Kimy Dos Santos</h2>
                </div>
                <div class="profile-links">
                    <a class="profile-menu-link active">PROJETS EN COURS</a>
                <a class="profile-menu-link">PROJETS EFFECTUÉS</a>
                </div>
                
            </div>
        </div>

        <!-- Projets -->
        <div class="wrapper-card">
            <a href="projet.html">
                <div class="card-body">
                    <img class="card" src="assets/img/background/pexels-pixabay.jpg" alt="">
                    <div class="card-desc">
                        <h4><span class="yellow">Pop & RnB</span></h4>
                        <h4 class="card-title">Nom du projet</h4>
                        <p class="user">John Doe</p>
                        <a href="#" class="btn btn-primary">Complet</a>
                    </div>
                </div>
            </a>

            <a href="##">
                <div class="card-body">
                    <img class="card" src="assets/img/background/pexels-pixabay.jpg" alt="">
                    <div class="card-desc">
                        <h4><span class="yellow">Hip-Hop</span></h4>
                        <h4 class="card-title">Nom du projet</h4>
                        <p class="user">John Doe</p>
                        <a href="#" class="btn btn-primary">Complet</a>
                    </div>
                </div>
            </a>

            <a href="##">
                <div class="card-body">
                    <img class="card" src="assets/img/background/pexels-pixabay.jpg" alt="">
                    <div class="card-desc">
                        <h4><span class="yellow">Pop & RnB</span></h4>
                        <h4 class="card-title">Nom du projet</h4>
                        <p class="user">John Doe</p>
                        <a href="#" class="btn btn-primary">Complet</a>
                    </div>
                </div>
            </a>
        </div>
    </div>

    <footer>
        <div class="container-footer">
            <div class="wrapper-left-footer">
                <img src="assets/img/logos/logo-large.png" alt="" class="logo-2" draggable="false">
                <p class="slogan-3">Créer, collaborer, partager.</p>
                <div class="icons-footer">
                    <a href="https://www.instagram.com/slyde.fr/" target="_blank" class="insta">
                        <img class="link-icon" src="assets/img/icons/instagram.svg" alt="instagram" draggable="false">
                    </a>
                    <a href="https://www.linkedin.com/company/slydefr/" target="_blank" class="linkedin">
                        <img class="link-icon" src="assets/img/icons/linkedin.svg" alt="linkedin" draggable="false">
                    </a>
                </div>
            </div>
            <div class="wrapper-right-footer">
                <div class="contact">
                    <p>Nous contacter</p>
                    <a href="mailto:contact@slyde.fr">contact@slyde.fr</a>
                </div>
            </div>
        </div>

        <div class="separator"></div>

        <p class="copyright"> © 2020 Slyde, tous droits réservés</p>
        <div class="wrapper-logo">
            <img class="logo-footer" src="assets/img/logos/logo.png" alt="" draggable="false">
            <p>Paris, France</p>
            <p class="copyright-mobile"> © 2020 Slyde, tous droits réservés</p>
        </div>
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script type="text/javascript" src="assets/js/navbar.js"></script>

</body>

</html>