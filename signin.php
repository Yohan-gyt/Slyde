<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" lang="fr"
        content="Rachel Albersario, Thanh-Trang Luu, Jules Cointrel, Paul Barbosa & Yohan Guyot">
    <meta name="description" content="Bienvenue sur Slyde, la première plateforme de collaboration musicale !">

    <meta property="og:type" content="website">
    <meta property="og:url" content="https://slyde.fr/index.html">
    <meta property="og:title" content="SLYDE - Créer, collaborer, partager">
    <meta property="og:description" content="Bienvenue sur Slyde, la première plateforme de collaboration musicale !">
    <meta property="og:image" content="https://www.slyde.fr/assets/img/card/card.jpg">

    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://slyde.fr/index.html">
    <meta property="twitter:title" content="SLYDE - Créer, collaborer, partager">
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
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@500;800&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
    <link rel="apple-touch-icon" sizes="120x120" href="assets/card/apple-touch-icon-120x120-precomposed.png">
    <link rel="apple-touch-icon" sizes="152x152" href="assets/card/apple-touch-icon-152x152-precomposed.png">
</head>

<body>
    <div class="wrapper">
        <section id="bg-left">
            <h1 class="title">Connexion</h1>
        </section>

        <section id="signin">
            <nav class="header-signin">
                <a href="index.php"><span class="yellow">←</span> Retour à l'accueil</a>
                <p>Pas encore membre ? <a href="signup-personalinfo.php"><span class="yellow">S'inscrire<span></a></p>
            </nav>

            <div class="wrapper-right">
                <h2>Connexion à mon compte Slyde</h2>
                <hr>
                <form action="assets/php/" method="POST" class="form-singin">
                    <input type="email" name="email" placeholder="johndoe@exemple.fr" required>
                    <input type="password" name="password" placeholder="Mot de passe" required>
                    <a href="#" class="forgot-pwd">Mot de passe oublié ?</a>
                    <button type="submit">Se connecter</button>
                </form>
            </div>
        </section>
    </div>

</body>

</html>