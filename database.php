<?php 

function conectarDB() : mysqli {
    $db = mysqli_connect('localhost', 'root', 'admin', 'ezequiel_daw', 3307);

    if(!$db) {
        echo "Error no se pudo conectar";
        exit;
    }

    return $db;

}