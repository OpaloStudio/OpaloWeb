<?php
    $destino = "hola@opalo.studio";
    $nombre = $_Post["name"];
    $correo = $_Post["mail"];
    $r1 = $_Post["message1"];
    $r2 = $_Post["message2"];
    $r3 = $_Post["message3"];
    $r4 = $_Post["message4"];
    $r5 = $_Post["message5"];
    $r6 = $_Post["message6"];

    $contenido = "Nombre: " . $nombre . "\nCorreo: " . $correo . "\nR1: " . $r1 . "\nR2: " . $r2 . "\nR3: " . $r3 . "\nR4: " . $r4 . "\nR5: " . $r5 . "\nR6: " . $r6;
    mail($destino, "formulario LMS", $contenido);
    
?>