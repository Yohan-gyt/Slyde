<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex">
    <title>SLYDE - Envoyer un mail</title>
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="icon" href="../assets/img/favicon.ico">
</head>

<body>
    <div>
        <img class="logo" src="../assets/img/logos/logo.png">
    </div>
    <h1>ENVOYER UN MAIL</h1>

    <form action="assets/php/send-mail.php" method="POST">
        <input type="text" name="subject" placeholder="Sujet" required>
        <textarea type="text" name="message" placeholder="Message" required>
<?php echo 
'<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Titre</title>
    </head>
    <body>
        Message
    </body>
</html>'
?>
        </textarea>
        <button type="submit">Valider</button>
    </form>
</body>

</html>