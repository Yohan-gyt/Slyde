<?php
require_once('secret.php');

if (isset($_POST))

{

    if($_POST['conditions'] === 'on'){
        
        if($_POST['pwd'] !== $_POST['confirm_pwd'])

        {
    
            header('Location: ../inscription.php?error=pwd');
    
        }
    
        else
    
        {
    
            $stmt_login = $db -> prepare("SELECT * FROM users where username = :username");
            $stmt_login -> execute(array(
        
                'username' => $_POST['username']
        
            ));
        
    
            if($stmt_login->rowcount() !== 1 ) 
        
            {
    
    
            $stmt = $db -> prepare("INSERT INTO users(firstname, lastname, email, username, location, password) VALUES(:firstname, :lastname, :email, :username, :location, :password)");
            $stmt -> execute(array(
                
                'firstname'=> $_POST['name'],
                'lastname' => $_POST['lastname'],
                'email'    => $_POST['email'],
                'username' => $_POST['username'],
                'location' => $_POST['location'],
                'password' => password_hash($_POST['pwd'],PASSWORD_DEFAULT)
        
            ));

            // foreach($_POST['skill'] as $skill){

            // }

            $stmt_id = $db -> prepare("SELECT id FROM users WHERE username=:username");
            $stmt_id -> execute(array("username" => $_POST['username']));
            $user = $stmt_id -> fetch();
            
            session_start();
            $_SESSION['username'] = $_POST['username'];
            $_SESSION['id'] = $user->id;

            $_SESSION['name'] = $_POST['name']." ".$_POST["lastname"];
            $_SESSION['location'] = $_POST['location'];

            if(isset($_POST["finalisation"])){
                header('Location: ../profil.php');
                die();
            }else{
                if(isset($_POST["feed"])){
                    header('Location: ../feed.php');
                    die();
            }}
            
            }
    
            else
    
            {

                header('Location: ../inscription.php?error=pseudo'); 

            }

        }
    }

    else

    {

        header('Location: ../inscription.php?error=checked');

    }


}