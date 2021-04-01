<?php

require_once('secret.php');

if (isset($_POST))

{

    $stmt = $db -> prepare("SELECT * FROM users WHERE email = :email");
    $stmt -> execute(array(
        "email" => $_POST['email']
    ));
    $user = $stmt -> fetch();

    if($user !== false && password_verify($_POST['password'], $user->password)) //false car j'utilise des objets

    {   
        session_start();
        $_SESSION['username'] = $user -> username;
        $_SESSION['id'] = $user->id;

        $_SESSION['name'] = $user -> firstname." ".$user -> lastname;
        $_SESSION['location'] = $user -> location;

        header('Location: ../feed.php');

    }

    else

    {

        header('Location: ../index.php?error=true');

    }


}