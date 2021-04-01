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
    <form id="regForm" action="src/inscription.php" method="POST">
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
                        <input type="text" name="lastname" placeholder="Nom*" oninput="this.className = ''" required>
                        <input type="text" name="name" placeholder="Prénom*" oninput="this.className = ''" required>
                    </div>
                    <input type="text" name="username" placeholder="Nom d'utilisateur*" oninput="this.className = ''" required>
                    <input type="email" name="email" placeholder="Email*" oninput="this.className = ''" required>
                    <input type="text" name="location" placeholder="Ville, région" oninput="this.className = ''">
                    <div class="separate-pwd">
                        <input type="password" name="pwd" placeholder="Mot de passe*" oninput="this.className = ''" required>
                        <input type="password" name="confirm_pwd" placeholder="Confirmer le mot de passe*" oninput="this.className = ''" required>
                    </div>
                </div>
            </div>

            <!-- MES SKILLS -->
            <div class="tab">
                <p>Choisis ton/tes skills:</p>
                <div class="select-box">
                    <div class="options-container">
                        <div class="option">
                            <input type="checkbox" class="checkbox-invisible" id="skill-1" name="skill[]" value="skill1">
                            <label for="skill-1" class="option-label">
                                <div>
                                    Skill 1
                                </div>
                            </label>
                        </div>

                        <div class="option">
                            <input type="checkbox" class="checkbox-invisible" id="skill-2" name="skill[]" value="skill2">
                            <label for="skill-2" class="option-label">
                                <div>
                                    Skill 2
                                </div>
                            </label>
                        </div>

                        <div class="option">
                            <input type="checkbox" class="checkbox-invisible" id="skill-3" name="skill[]" value="skill3">
                            <label for="skill-3" class="option-label">
                                <div>
                                    Skill 3
                                </div>
                            </label>
                        </div>

                        <div class="option">
                            <input type="checkbox" class="checkbox-invisible" id="skill-4" name="skill[]" value="skill4">
                            <label for="skill-4" class="option-label">
                                <div>
                                    Skill 4
                                </div>
                            </label>
                        </div>

                        <div class="option">
                            <input type="checkbox" class="checkbox-invisible" id="skill-5" name="skill[]" value="skill5">
                            <label for="skill-5" class="option-label">
                                <div>
                                    Skill 5
                                </div>
                            </label>
                        </div>

                        <div class="option">
                            <input type="checkbox" class="checkbox-invisible" id="skill-6" name="skill[]" value="skill6">
                            <label for="skill-6" class="option-label">
                                <div>
                                    Skill 6
                                </div>
                            </label>
                        </div>

                        <div class="option">
                            <input type="checkbox" class="checkbox-invisible" id="skill-7" name="skill[]" value="skill7">
                            <label for="skill-7" class="option-label">
                                <div>
                                    Skill 7
                                </div>
                            </label>
                        </div>

                        <div class="option">
                            <input type="checkbox" class="checkbox-invisible" id="skill-8" name="skill[]" value="skill8">
                            <label for="skill-8" class="option-label">
                                <div>
                                    Skill 8
                                </div>
                            </label>
                        </div>

                        <div class="option">
                            <input type="checkbox" class="checkbox-invisible" id="skill-9" name="skill[]" value="skill9">
                            <label for="skill-9" class="option-label">
                                <div>
                                    Skill 9
                                </div>
                            </label>
                        </div>

                        <div class="option">
                            <input type="checkbox" class="checkbox-invisible" id="skill-10" name="skill[]" value="skill10">
                            <label for="skill-10" class="option-label">
                                <div>
                                    Skill 10
                                </div>
                            </label>
                        </div>

                        <div class="option">
                            <input type="checkbox" class="checkbox-invisible" id="skill-11" name="skill[]" value="skill11">
                            <label for="skill-11" class="option-label">
                                <div>
                                    Skill 11
                                </div>
                            </label>
                        </div>

                        <div class="option">
                            <input type="checkbox" class="checkbox-invisible" id="skill-12" name="skill[]" value="skill12">
                            <label for="skill-12" class="option-label">
                                <div>
                                    Skill 12
                                </div>
                            </label>
                        </div>

                        <div class="option">
                            <input type="checkbox" class="checkbox-invisible" id="skill-13" name="skill[]" value="skill13">
                            <label for="skill-13" class="option-label">
                                <div>
                                    Skill 13
                                </div>
                            </label>
                        </div>

                        <div class="option">
                            <input type="checkbox" class="checkbox-invisible" id="skill-14" name="skill[]" value="skill14">
                            <label for="skill-14" class="option-label">
                                <div>
                                    Skill 14
                                </div>
                            </label>
                        </div>

                        <div class="option">
                            <input type="checkbox" class="checkbox-invisible" id="skill-15" name="skill[]" value="skill15">
                            <label for="skill-15" class="option-label">
                                <div>
                                    Skill 15
                                </div>
                            </label>
                        </div>

                        <div class="option">
                            <input type="checkbox" class="checkbox-invisible" id="skill-16" name="skill[]" value="skill16">
                            <label for="skill-16" class="option-label">
                                <div>
                                    Skill 16
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="selected">
                        <p>Guitare, batterie, MAO, ... </p>
                    </div>
                </div>
            </div>



            <!-- MON STYLE DE MUSIQUE -->
            <div class="tab">
                <div class="grid-signup">

                    <div class="cat">
                        <input type="checkbox" class="checkbox-invisible" id="cat-1" name="cat[]" value="rock">
                        <label for="cat-1" class="cat-label">
                            <div class="div1">
                                <h3>Rock</h3>
                            </div>
                        </label>
                    </div>

                    <div class="cat">
                        <input type="checkbox" class="checkbox-invisible" id="cat-2" name="cat[]" value="classique">
                        <label for="cat-2" class="cat-label">
                            <div class="div2">
                                <h3>Classique</h3>
                            </div>
                        </label>
                    </div>

                    <div class="cat">
                        <input type="checkbox" class="checkbox-invisible" id="cat-3" name="cat[]" value="hiphop">
                        <label for="cat-3" class="cat-label">
                            <div class="div3">
                                <h3>Hip-Hop</h3>
                            </div>
                        </label>
                    </div>

                    <div class="cat">
                        <input type="checkbox" class="checkbox-invisible" id="cat-4" name="cat[]" value="jazz">
                        <label for="cat-4" class="cat-label">
                            <div class="div4">
                                <h3>Jazz</h3>
                            </div>
                        </label>
                    </div>

                    <div class="cat">
                        <input type="checkbox" class="checkbox-invisible" id="cat-5" name="cat[]" value="techno">
                        <label for="cat-5" class="cat-label">
                            <div class="div5">
                                <h3>Techno</h3>
                            </div>
                        </label>
                    </div>

                    <div class="cat">
                        <input type="checkbox" class="checkbox-invisible" id="cat-6" name="cat[]" value="pop">
                        <label for="cat-6" class="cat-label">
                            <div class="div6">
                                <h3>Pop</h3>
                            </div>
                        </label>
                    </div>
                </div>
            </div>

            <!-- BIENVENUE CHEZ SLYDE -->
            <div class="tab">

                <div class="fin">
                    <input type="radio" class="checkbox-invisible" id="fin-1" name="finalisation">
                    <label for="fin-1" class="fin-label">
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
    
                            <p>Fais ressortir ta personnalité à travers ton profil pour que les autres utilisateurs puissent
                                te reconnaître. </p>
                        </div>
                    </label>
                </div>

                <div class="fin">
                    <input type="radio" class="checkbox-invisible" id="fin-2" name="feed">
                    <label for="fin-2" class="fin-label">
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

                        <p>Visite notre site pour te familiariser avec nos fonctionnalités et découvrir des projets et
                            des artistes qui te plaisent.</p>
                    </div>
                </label>
            </div>
            <label class="cgu">
                <div class="conditions">
                    <input type="checkbox" name="conditions" required>
                    <span class="checkmark"></span>
                    J’accepte les
                </div>
                <a href="cgu.php" target="_blank" class="cgu-link">Conditions générales d’utilisation</a>
            </label>
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