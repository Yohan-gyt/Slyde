<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" lang="fr"
        content="Rachel Albersario, Thanh-Trang Luu, Jules Cointrel, Paul Barbosa & Yohan Guyot">
    <meta name="description" content="Bienvenue sur Slyde, la première plateforme de collaboration musicale !">

    <meta property="og:type" content="website">
    <meta property="og:url" content="https://slyde.fr/inscription.php">
    <meta property="og:title" content="SLYDE - Inscription">
    <meta property="og:description" content="Bienvenue sur Slyde, la première plateforme de collaboration musicale !">
    <meta property="og:image" content="https://www.slyde.fr/assets/img/card/card.jpg">

    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://slyde.fr/inscription.php">
    <meta property="twitter:title" content="SLYDE - Inscription">
    <meta property="twitter:description"
        content="Bienvenue sur Slyde, la première plateforme de collaboration musicale !">
    <meta property="twitter:image" content="https://www.slyde.fr/assets/card/card.jpg">

    <title>SLYDE - Inscription</title>

    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="icon" href="assets/img/favicon.ico">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;800&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
    <link rel="apple-touch-icon" sizes="120x120" href="assets/card/apple-touch-icon-120x120-precomposed.png">
    <link rel="apple-touch-icon" sizes="152x152" href="assets/card/apple-touch-icon-152x152-precomposed.png">
</head>

<body>
    <form id="regForm" action="">
        <!-- TITRE DE GAUCHE -->
        <section id="bg-left">
            <h1 class="title" id="t1">MES INFORMATIONS <br> PERSONNELLES</h1>
            <h1 class="title" id="t2">MES SKILLS</h1>
            <h1 class="title" id="t3">MON STYLE <br> DE MUSIQUE</h1>
            <h1 class="title" id="t4">BIENVENUE SUR SLYDE !</h1>
            <p class="numbers" id="n1">01 -04</p>
            <p class="numbers" id="n2">02 -04</p>
            <p class="numbers" id="n3">03 -04</p>
            <p class="numbers" id="n4">04 -04</p>
        </section>
        <section id="sign">
            <!-- NAVIGATEUR -->
            <nav class="header-sign">
                <a href="index.php" id="back-home">
                    <svg xmlns="http://www.w3.org/2000/svg" width="41" height="22.121" viewBox="0 0 41 22.121"
                        class="arrow">
                        <g id="Group_23" data-name="Group 23" transform="translate(1.5 1.061)">
                            <line id="Line_161" data-name="Line 161" x1="39" transform="translate(0.5 10.5)" fill="none"
                                stroke="#fee12e" stroke-width="3" />
                            <path id="Path_2" data-name="Path 2" d="M0,0,10,10,20,0"
                                transform="translate(10) rotate(90)" fill="none" stroke="#fee12e"
                                stroke-linejoin="round" stroke-width="3" />
                        </g>
                    </svg>
                    <div class="back-text back-home">
                        Retour à l'accueil
                    </div>
                </a>
                <div id="prevBtn" onclick="nextPrev(-1)">
                    <svg xmlns="http://www.w3.org/2000/svg" width="41" height="22.121" viewBox="0 0 41 22.121"
                        class="arrow">
                        <g id="Group_23" data-name="Group 23" transform="translate(1.5 1.061)">
                            <line id="Line_161" data-name="Line 161" x1="39" transform="translate(0.5 10.5)" fill="none"
                                stroke="#fee12e" stroke-width="3" />
                            <path id="Path_2" data-name="Path 2" d="M0,0,10,10,20,0"
                                transform="translate(10) rotate(90)" fill="none" stroke="#fee12e"
                                stroke-linejoin="round" stroke-width="3" />
                        </g>
                    </svg>
                    <div class="back-text back-home">
                        Retour à l'étape précédente
                    </div>
                </div>

                <div id="member">
                    <p>Déjà membre ?
                        <a href="connexion.php" class="link-sign">
                            Se connecter
                        </a>
                    </p>
                </div>
            </nav>
            <div>
                <a href="index.php">
                    <img class="logo res-nav" src="assets/img/logos/logo.png" alt="" draggable="false">
                </a>
            </div>

            <!-- MES INFORMATIONS PERSONNELLES -->
            <div class="tab">
                <div class="res-nav">
                    <h2 id="t1">Mes informations personnelles</h2>
                    <hr>
                </div>
                <div class="form-signup">
                    <div class="separate-name">
                        <input type="text" name="lastname" placeholder="Nom*" value="wfwef@greg.fr"
                            oninput="this.className = ''" required>
                        <input type="text" name="name" placeholder="Prénom*" value="wfwef@greg.fr"
                            oninput="this.className = ''" required>
                    </div>
                    <input type="text" name="username" placeholder="Nom d'utilisateur*" value="wfwef@greg.fr"
                        oninput="this.className = ''" required>
                    <input type="email" name="email" placeholder="Email*" value="wfwef@greg.fr"
                        oninput="this.className = ''" required>
                    <input type="text" name="location" placeholder="Ville, région" value="wfwef@greg.fr"
                        oninput="this.className = ''">
                    <div class="separate-pwd">
                        <input type="password" name="pwd" placeholder="Mot de passe*" value="wfwef@greg.fr"
                            oninput="this.className = ''" required>
                        <input type="password" name="pwd" placeholder="Confirmer le mot de passe*" value="wfwef@greg.fr"
                            oninput="this.className = ''" required>
                    </div>
                </div>
                <label>
                    <div class="conditions">
                        <input type="checkbox" name="conditions" required>
                        <span class="checkmark"></span>
                        J’accepte les
                    </div>
                    <a href="cgu.php" target="_blank" class="cgu-link">Conditions générales d’utilisation</a>
                </label>
            </div>

            <!-- MES SKILLS -->
            <div class="tab">
                <p>Choisis ton/tes skills:</p>
                <select name="skill" id="" class="classic">
                    <option value="">Choisis tes skills</option>
                    <option value="dog">Dog</option>
                    <option value="cat">Cat</option>
                    <option value="hamster">Hamster</option>
                    <option value="parrot">Parrot</option>
                    <option value="spider">Spider</option>
                    <option value="goldfish">Goldfish</option>
                </select>
            </div>

            <!-- MON STYLE DE MUSIQUE -->
            <div class="tab">
                <div class="grid-signup">

                    <a href="#" class="focus">
                        <div class="div1">
                            <h3 class="title">Rock</h3>
                        </div>
                    </a>
                    <a href="#" class="focus">
                        <div class="div2">
                            <h3 class="title">Classique</h3>
                        </div>
                    </a>
                    <a href="#" class="focus">
                        <div class="div3">
                            <h3 class="title">Hip-Hop</h3>
                        </div>
                    </a>
                    <a href="#" class="focus">
                        <div class="div4">
                            <h3 class="title">Jazz</h3>
                        </div>
                    </a>
                    <a href="#" class="focus">
                        <div class="div5">
                            <h3 class="title">Techno</h3>
                        </div>
                    </a>
                    <a href="#" class="focus">
                        <div class="div6">
                            <h3 class="title">Pop</h3>
                        </div>
                    </a>
                </div>
            </div>

            <!-- BIENVENUE CHEZ SLYDE -->
            <div class="tab">
                <a href="#" class="focus">
                    <div tabindex="0" class="bienvenue">
                        <h3>Finaliser mon profil</h3>

                        <svg xmlns="http://www.w3.org/2000/svg" width="41" height="22.121" viewBox="0 0 41 22.121"
                            class="arrow">
                            <g id="Group_23" data-name="Group 23" transform="translate(1.5 1.061)">
                                <path
                                    d="M21.883 12l-7.527 6.235.644.765 9-7.521-9-7.479-.645.764 7.529 6.236h-21.884v1h21.883z"
                                    fill="none" stroke="#ffff" stroke-linejoin="round" stroke-width="3" />
                            </g>
                        </svg>
                        <img src="assets/img/3d/card.png" alt="card" class="card-svg">

                        <p>Fais ressortir ta personnalité à travers ton profil pour que les autres utilisateurs puissent te reconnaître. </p>
                    </div>
                </a>
                <!-- Je laisse le <a> au cas où ce soit utile, même si on peut l'enlever -->
                <a href="#1" class="focus">
                    <div tabindex="1" class="bienvenue">
                        <h3>Découvrir Slyde</h3>
                        <svg xmlns="http://www.w3.org/2000/svg" width="41" height="22.121" viewBox="0 0 41 22.121"
                            class="arrow">
                            <g id="Group_23" data-name="Group 23" transform="translate(1.5 1.061)">
                                <path
                                    d="M21.883 12l-7.527 6.235.644.765 9-7.521-9-7.479-.645.764 7.529 6.236h-21.884v1h21.883z"
                                    fill="none" stroke="#ffff" stroke-linejoin="round" stroke-width="3" />
                            </g>
                        </svg>
                        
                        <img src="assets/img/3d/card-2.png" alt="card illustration" class="card-svg card2-svg">

                        <p>Visite notre site pour te familiariser avec nos fonctionnalités et découvrir des projets et des artistes qui te plaisent.</p>
                    </div>
                </a>
            </div>

            <button type="button" id="nextBtn" class="nextbutton" onclick="nextPrev(1)"></button>

            <div id="member" class="res-nav">
                <p>Déjà membre ?
                    <a href="connexion.php" class="link-sign">
                        Se connecter
                    </a>
                </p>
            </div>
    </form>

    <script type="text/javascript" src="assets/js/form.js"></script>
</body>

</html>