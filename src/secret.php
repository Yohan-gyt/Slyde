<?php
$db = new PDO ('mysql:host=localhost;dbname=waen0056_slyde;port=3306;charset=utf8', 'waen0056_slyde', 'Thanhestpasdev1234', array(

    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION

));