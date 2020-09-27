<?php

if (isset($_POST["verzenden"])) {
    $to = "claeskim33@hotmail.com";
    $name = $_POST['vnaam'];
    $achternaam = $_POST['achternaam'];
    $from = $_POST['email'];
    $message = $_POST['vragen'];

    
    $onderwerp = "ingevuld formulier";
    $bericht = $name . " " . $achternaam . "schreef het volgende:" . "\n\n" . $message;
 
    $headers="From: ". $from;
    mail($to, $onderwerp, $bericht, $headers);
        echo "<h1>Verzonden!"." ".$name.", Ik contacteer je zo snel mogelijk.</h1>";
}

?> 

