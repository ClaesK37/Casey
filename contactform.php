<?php

if (isset($_POST["verzenden"])) {

    $name = $_POST['vnaam'];
    $achternaam = $_POST['achternaam'];
    $visitor_email = $_POST['email'];
    $message = $_POST['vragen'];

    $to = "claeskim33@hotmail.com";
    $onderwerp = "ingevuld formulier";
    $bericht = "Naam: .$name.\n"."Achternaam: ".$achternaam."\n". "Schreef: "."\n\n".$message;
 
    $headers="From: ".$email;
    if(mail($to, $onderwerp, $bericht, $headers)) {
        echo "<h1>Verzonden!"." ".$name.", Ik contacteer je zo snel mogelijk.</h1>";
    } else {
        echo "oeps!";
    }
    header("locaction: index.html");

}

?> 

