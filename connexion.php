<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" lang="fr"
        content="Rachel Albersario, Thanh-Trang Luu, Jules Cointrel, Paul Barbosa & Yohan Guyot">
    <meta name="description" content="Bienvenue sur Slyde, la première plateforme de collaboration musicale !">

    <meta property="og:type" content="website">
    <meta property="og:url" content="https://slyde.fr/connexion.php">
    <meta property="og:title" content="SLYDE - Connexion">
    <meta property="og:description" content="Bienvenue sur Slyde, la première plateforme de collaboration musicale !">
    <meta property="og:image" content="https://www.slyde.fr/assets/img/card/card.jpg">

    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://slyde.fr/connexion.php">
    <meta property="twitter:title" content="SLYDE - Connexion">
    <meta property="twitter:description"
        content="Bienvenue sur Slyde, la première plateforme de collaboration musicale !">
    <meta property="twitter:image" content="https://www.slyde.fr/assets/card/card.jpg">

    <title>SLYDE - Connexion</title>

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
    <div class="wrapper-sign">
        <section id="bg-left">
            <h1 class="title">CONNEXION</h1>
        </section>

        <section id="sign">
            <nav class="header-sign">
                <a href="index.html" class="back-home">
                    <svg xmlns="http://www.w3.org/2000/svg" width="41" height="22.121" viewBox="0 0 41 22.121" class="arrow">
                        <g id="Group_23" data-name="Group 23" transform="translate(1.5 1.061)">
                            <line id="Line_161" data-name="Line 161" x1="39" transform="translate(0.5 10.5)" fill="none" stroke="#fee12e" stroke-width="3"/>
                            <path id="Path_2" data-name="Path 2" d="M0,0,10,10,20,0" transform="translate(10) rotate(90)" fill="none" stroke="#fee12e" stroke-linejoin="round" stroke-width="3"/>
                        </g>
                    </svg>
                    <div class="back-text" id="back-home">
                        Retour à l'accueil 
                    </div>
                </a>
                <p id="member"> Pas encore membre ? 
                    <a href="inscription.php" class="link-sign">
                        S'inscrire
                    </a>
                </p>
            </nav>

            <div class="wrapper-right">
                <h2>Connexion à mon compte Slyde</h2>
                <hr>
                <form action="assets/php/" method="POST" class="form-singin">
                    <input type="email" name="email" placeholder="Email" required>
                    <input type="password" name="password" placeholder="Mot de passe" required>
                    <a href="#" class="forgot-pwd">Mot de passe oublié ?</a>
                    <button type="submit">Se connecter</button>
                </form>
            </div>
        </section>
    </div>
</body>

</html>