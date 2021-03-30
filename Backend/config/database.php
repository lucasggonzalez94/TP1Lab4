<?php

function conectarDB() : mysqli {
    $db = mysqli_connect('localhost', 'root', '', 'lab4Tp1');
    mysqli_set_charset($db, "utf8");

    if (!$db) {
        echo 'Error: No se pudo conectar.';
        exit;
    }

    return $db;
}