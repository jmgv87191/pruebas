<?php

    include ("conn.php");

    $mensaje = $_POST['enviar_mensaje'];

    $query = "SELECT * FROM tareas WHERE name LIKE '$mensaje%'";

    $respuesta = mysqli_query($conn, $query);

    $json = array();

    while ( $row = mysqli_fetch_array($respuesta) ) {
        $json[] = array(
            "id" => $row['id'],
            "name" => $row['name'],
            "description" => $row['description']
        );
    }

    $jsonstring = json_encode($json);

    echo $jsonstring;


?>