<?php

    $entreprise = htmlspecialchars($_POST["entreprise"]);
    $name = htmlspecialchars($_POST["name"]);
    $firstname = htmlspecialchars($_POST["firstname"]);
    $email = htmlspecialchars($_POST["email"]);
    $tel = htmlspecialchars($_POST["tel"]);
    $message = htmlspecialchars($_POST["message"]);


    $monfichier = fopen('contact.txt', 'a+');
    fputs($monfichier, "========================\n");
    fputs($monfichier, $entreprise."\n");
    fputs($monfichier, $name."\n");
    fputs($monfichier, $firstname."\n");
    fputs($monfichier, $email."\n");
    fputs($monfichier, $tel."\n");
    fputs($monfichier, $message."\n");

    fclose($monfichier);




?>