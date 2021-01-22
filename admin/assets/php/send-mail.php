<?php
    $pdo = new PDO('mysql:host=localhost;dbname=waen0056_slyde','waen0056_slyde','Thanhestpasdev1234');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
    $stmt = $pdo->query('SELECT email FROM newsletter');

    $mails = array();
    
    while($result = $stmt->fetch()) {
        $mails[] = $result['email'];
    }

    $to = implode(",",$mails);

    $subject = $_POST['subject'];

    $message = $_POST['message'];

    $headers[] = 'MIME-Version: 1.0';
    $headers[] = 'Content-type: text/html; charset=utf-8';
    $headers[] = 'From: SLYDE <noreply@slyde.fr>';
    $headers[] = 'Content-transfer-encoding: 8bit';

    mail($to, $subject, $message, implode("\r\n", $headers));

    $pdo = null;
?>