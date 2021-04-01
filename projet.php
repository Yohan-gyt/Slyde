<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" lang="fr"
        content="Rachel Albersario, Thanh-Trang Luu, Jules Cointrel, Paul Barbosa & Yohan Guyot">
    <meta name="description" content="Bienvenue sur Slyde, la première plateforme de collaboration musicale !">

    <meta property="og:type" content="website">
    <meta property="og:url" content="https://slyde.fr/index.php">
    <meta property="og:title" content="SLYDE - Nom du projet>
    <meta property=" og:description" content="Bienvenue sur Slyde, la première plateforme de collaboration musicale !">
    <meta property="og:image" content="https://www.slyde.fr/assets/img/card/card.jpg">

    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://slyde.fr/index.php">
    <meta property="twitter:title" content="SLYDE - Nom du projet">
    <meta property="twitter:description"
        content="Bienvenue sur Slyde, la première plateforme de collaboration musicale !">
    <meta property="twitter:image" content="https://www.slyde.fr/assets/card/card.jpg">

    <!-- FAIRE EN SORTE QUE LE TITRE DE LA PAGE SOIT LE NOM DU PROJET -->
    <title>SLYDE - Nom du projet</title>

    <link rel="stylesheet" href="assets/css/styles.css">

    <link rel="icon" href="assets/img/favicon.ico">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">

    <link rel="apple-touch-icon" sizes="120x120" href="assets/img/card/apple-touch-icon-120x120-precomposed.png">
    <link rel="apple-touch-icon" sizes="152x152" href="assets/img/card/apple-touch-icon-152x152-precomposed.png">
</head>

<body>
    <div>
        <!-- CHANGER LA REDIRECTION EN FONCTION DE SI ON EST CONNECTÉ OU NON -->
        <a href="feed.php">
            <img class="logo" src="assets/img/logos/logo.png" alt="" draggable="false">
        </a>
    </div>

    <nav class="navbar">
        <div class="search-bar">
            <input type="search" placeholder="Un projet, un artiste, un instrument ..." name="the_search">
        </div>
        <div class="absolute-right">
            <div class="wrapper-absolute-right">
                <a class="create-project" href="#">Créer un projet</a>

                <img src="../assets/img/icons/notif.svg" alt="notif" class="notif" draggable="false">
                <img src="../assets/img/icons/messages.svg" alt="messages" class="messages" draggable="false">

                <div class="dropdown">
                    <div onclick="myFunction()" class="profile">
                        <img src="assets/img/background/john.jpg" alt="Profil" class="dropbtn" draggable="false">
                    </div>
                    <div id="myDropdown" class="dropdown-content">
                        <a href="profil.php">Profil</a>
                        <a href="#">Editer le profil</a>
                        <a href="#">Paramètres</a>
                        <hr>
                        <a href="#">Se deconnecter</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <div class="projet">
        <div class="preview">
            <div class="img-projet">
                <img src="assets/img/background/img-projet.jpg" alt="" draggable="false">
            </div>
            <div class="desc-projet">
                <h1>Nom du projet</h1>
                <p class="owner">Lancé par John Doe</p>
                <div class="state-wrapper">
                    <div class="type">Hip-Hop</div>
                    <div class="state">Incomplet</div>
                    <div class="dot">·</div>
                    <div class="date">16 Janv 2021</div>
                </div>
                <div class="resume">
                    Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut
                    labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores
                    et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
                    Lorem ipsum dolor sit.
                </div>
                <p class="criteres">Profils recherchés :</p>
                <div class="profils">
                    <div class="profil">
                        Guitariste
                    </div>
                    <div class="profil">
                        Beatmaker
                    </div>
                    <div class="profil">
                        Mixeur
                    </div>
                    <div class="add"></div>
                </div>
                <div class="btns">
                    <div class="modifier">
                        Modifier la page
                    </div>
                    <div class="messagerie">
                        Messagerie
                    </div>
                </div>
                <div class="bot-icons">
                    <div class="like">
                        <img src="assets/img/icons/like.svg" alt="" draggable="false">
                    </div>
                    <div class="share">
                        <img src="assets/img/icons/share.svg" alt="" draggable="false">
                    </div>
                </div>
            </div>
        </div>

        <div class="section">
            <h2>ANNEXES</h2>
            <div class="grid-img">
                <div class="cover">
                    <div class="artwork">
                        <audio id="audio"
                            src="https://sampleswap.org/samples-ghost/MELODIC%20LOOPS/GUITAR%20LOOPS/1844[kb]090_flangy-guitar-picked-melody.wav.mp3"
                            preload="auto">
                        </audio>
                        <img src="assets/img/projet/offonoff.jpg" alt="">
                        <div class="play" onClick="togglePlay()"></div>
                    </div>
                    <div class="desc-cover">
                        <div class="titre-son">
                            Offonoff - bath
                        </div>
                        <div class="date-son">
                            19/01/2021
                        </div>
                    </div>
                </div>

                <div class="cover">
                    <div class="artwork">
                        <audio id="audio"
                            src="https://sampleswap.org/samples-ghost/MELODIC%20LOOPS/GUITAR%20LOOPS/1844[kb]090_flangy-guitar-picked-melody.wav.mp3"
                            preload="auto">
                        </audio>
                        <img src="assets/img/projet/theweeknd.jpg" alt="">
                        <div class="play" onClick="togglePlay()"></div>
                    </div>
                    <div class="desc-cover">
                        <div class="titre-son">
                            The Weeknd - Escape from LA
                        </div>
                        <div class="date-son">
                            19/01/2021
                        </div>
                    </div>
                </div>

                <div class="cover">
                    <div class="artwork">
                        <audio id="audio"
                            src="https://sampleswap.org/samples-ghost/MELODIC%20LOOPS/GUITAR%20LOOPS/1844[kb]090_flangy-guitar-picked-melody.wav.mp3"
                            preload="auto">
                        </audio>
                        <img src="assets/img/projet/franckocean.jpg" alt="">
                        <div class="play" onClick="togglePlay()"></div>
                    </div>
                    <div class="desc-cover">
                        <div class="titre-son">
                            Frank Ocean - Ivy
                        </div>
                        <div class="date-son">
                            19/01/2021
                        </div>
                    </div>
                </div>

                <div class="cover">
                    <div class="artwork">
                        <audio id="audio"
                            src="https://sampleswap.org/samples-ghost/MELODIC%20LOOPS/GUITAR%20LOOPS/1844[kb]090_flangy-guitar-picked-melody.wav.mp3"
                            preload="auto">
                        </audio>
                        <img src="assets/img/projet/pinksweats.jpg" alt="">
                        <div class="play" onClick="togglePlay()"></div>
                    </div>
                    <div class="desc-cover">
                        <div class="titre-son">
                            Pink Sweats - Honesty
                        </div>
                        <div class="date-son">
                            19/01/2021
                        </div>
                    </div>
                </div>

                <div class="cover">
                    <div class="artwork">
                        <audio id="audio"
                            src="https://sampleswap.org/samples-ghost/MELODIC%20LOOPS/GUITAR%20LOOPS/1844[kb]090_flangy-guitar-picked-melody.wav.mp3"
                            preload="auto">
                        </audio>
                        <img src="assets/img/projet/tyler.png" alt="">
                        <div class="play" onClick="togglePlay()"></div>
                    </div>
                    <div class="desc-cover">
                        <div class="titre-son">
                            Tyler, The Creator - I THINK
                        </div>
                        <div class="date-son">
                            19/01/2021
                        </div>
                    </div>
                </div>

                <div class="cover">
                    <div class="artwork">
                        <audio id="audio"
                            src="https://sampleswap.org/samples-ghost/MELODIC%20LOOPS/GUITAR%20LOOPS/1844[kb]090_flangy-guitar-picked-melody.wav.mp3"
                            preload="auto">
                        </audio>
                        <img src="assets/img/projet/lany.jpg" alt="">
                        <div class="play" onClick="togglePlay()"></div>
                    </div>
                    <div class="desc-cover">
                        <div class="titre-son">
                            Lany - Malibu nights
                        </div>
                        <div class="date-son">
                            19/01/2021
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="section">
            <h2>INSPIRATIONS</h2>
            <div class="grid-img">
                <div class="cover">
                    <div class="artwork">
                        <img src="assets/img/projet/offonoff.jpg" alt="">
                    </div>
                    <div class="desc-cover">
                        <div class="titre-son">
                            Offonoff - bath
                        </div>
                        <div class="date-son">
                            19/01/2021
                        </div>
                    </div>
                </div>

                <div class="cover">
                    <div class="artwork">
                        <img src="assets/img/projet/theweeknd.jpg" alt="">
                    </div>
                    <div class="desc-cover">
                        <div class="titre-son">
                            The Weeknd - Escape from LA
                        </div>
                        <div class="date-son">
                            19/01/2021
                        </div>
                    </div>
                </div>

                <div class="cover">
                    <div class="artwork">
                        <img src="assets/img/projet/franckocean.jpg" alt="">
                    </div>
                    <div class="desc-cover">
                        <div class="titre-son">
                            Frank Ocean - Ivy
                        </div>
                        <div class="date-son">
                            19/01/2021
                        </div>
                    </div>
                </div>

                <div class="cover">
                    <div class="artwork">
                        <img src="assets/img/projet/pinksweats.jpg" alt="">
                    </div>
                    <div class="desc-cover">
                        <div class="titre-son">
                            Pink Sweats - Honesty
                        </div>
                        <div class="date-son">
                            19/01/2021
                        </div>
                    </div>
                </div>

                <div class="cover">
                    <div class="artwork">
                        <img src="assets/img/projet/tyler.png" alt="">
                    </div>
                    <div class="desc-cover">
                        <div class="titre-son">
                            Tyler, The Creator - I THINK
                        </div>
                        <div class="date-son">
                            19/01/2021
                        </div>
                    </div>
                </div>

                <div class="cover">
                    <div class="artwork">
                        <audio id="audio"
                            src="https://sampleswap.org/samples-ghost/MELODIC%20LOOPS/GUITAR%20LOOPS/1844[kb]090_flangy-guitar-picked-melody.wav.mp3"
                            preload="auto">
                        </audio>
                        <img src="assets/img/projet/lany.jpg" alt="">
                        <div class="play" onClick="togglePlay()"></div>
                    </div>
                    <div class="desc-cover">
                        <div class="titre-son">
                            Lany - Malibu nights
                        </div>
                        <div class="date-son">
                            19/01/2021
                        </div>
                    </div>
                </div>

                <div class="desc-inspi">
                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt
                        ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo
                        dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor
                        sit amet. Lorem ipsum dolor sitet, consetur sadipscing elitr, sed diam nonumy eirmod tempor
                        invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et
                        justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem
                        ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscig elitr, sed diam nonumy
                        eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos
                        et accusam et jus.</p>
                </div>
            </div>
        </div>

        <div class="section">
            <h2>COLLARATEURS</h2>
            <div class="collaborateurs">
                <div class="personne">
                    <div class="profil-pers">
                        <img src="assets/img/background/john.jpg" alt="">
                    </div>
                    <div class="infos-pers">
                        <div class="nom">
                            Rachel Albersario
                        </div>
                        <div class="role-pers">
                            Rappeuse
                        </div>
                    </div>
                </div>

                <div class="personne">
                    <div class="profil-pers">
                        <img src="assets/img/background/john.jpg" alt="">
                    </div>
                    <div class="infos-pers">
                        <div class="nom">
                            Paul Barbosa
                        </div>
                        <div class="role-pers">
                            Violoniste
                        </div>
                    </div>
                </div>

                <div class="personne">
                    <div class="profil-pers">
                        <img src="assets/img/background/john.jpg" alt="">
                    </div>
                    <div class="infos-pers">
                        <div class="nom">
                            Thanh-Trang Luu
                        </div>
                        <div class="role-pers">
                            Compositrice
                        </div>
                    </div>
                </div>

                <div class="personne">
                    <div class="profil-pers">
                        <img src="assets/img/background/john.jpg" alt="">
                    </div>
                    <div class="infos-pers">
                        <div class="nom">
                            Yohan Guyot
                        </div>
                        <div class="role-pers">
                            Pianiste
                        </div>
                    </div>
                </div>

                <div class="personne">
                    <div class="profil-pers">
                        <img src="assets/img/background/john.jpg" alt="">
                    </div>
                    <div class="infos-pers">
                        <div class="nom">
                            Jules Cointrel
                        </div>
                        <div class="role-pers">
                            Rappeur
                        </div>
                    </div>
                </div>
            </div>
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
                <div class="info">
                    <p>Nous contacter</p>
                    <a href="mailto:contact@slyde.fr">contact@slyde.fr</a>
                    <a href="cgu.php">
                        <p class="cgu">Conditions générales d'utilisation</p>
                    </a>
                    <a href="confidentialité.php">
                        <p>Confidentialité</p>
                    </a>
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

    <script type="text/javascript" src="assets/js/navbar.js"></script>

    <script>
        var audio = document.getElementById("audio");
        var isPlaying = false;

        function togglePlay() {
            isPlaying ? audio.pause() : audio.play();
        };

        audio.onplaying = function () {
            isPlaying = true;
        };
        audio.onpause = function () {
            isPlaying = false;
        };

        var monElementAudio = document.getElementById('audio');
        monElementAudio.volume = 0.3;
    </script>
</body>

</html>