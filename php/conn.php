<?php

    $servername = "localhost";
    $user = "root";
    $password = "";
    $database = "pruebas";

    $conn = mysqli_connect($servername, $user, $password, $database);

    if (!$conn) {
        die("fallo la conexion".mysqli_connect_error());
    }

    echo "conexion exitosa"

?>