<?php

    $servername = "localhost";
    $user = "root";
    $password = "";
    $database = "pruebas";

    $conn = mysqli_connect( $servername, $user, $password, $database );

    if (!$conn) {
        die(" no se establecion una conexion ");
    }



?>