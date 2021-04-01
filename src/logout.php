<?php 

require_once('secret.php');

session_start();
if(isset($_SESSION)){
    session_destroy();
    header('Location: ../index.php');
}