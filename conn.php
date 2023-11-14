<?php

    $nombre = $_POST['enviar_nombre'];
    $email = $_POST['enviar_email'];
    
    $servername = 'localhost';
    $user = 'root';
    $password = '';
    $database = 'pruebas';

    $conn = new mysqli( $servername, $user, $password, $database  );

    if ( $conn ->connect_error ) {
        die( "error de conexion".$conn ->connect_error );
    }


    $sql = "INSERT INTO  prueba(nombre, email) VALUES ('$nombre','$email')";

    if (  $conn->query( $sql )) {
        echo "nombre: ".$nombre;
        
        echo "email: ".$email;
    }



$resultado = $conexion->query("SELECT * FROM prueba");

if ($resultado->num_rows > 0) {
    while ($fila = $resultado->fetch_assoc()) {
        echo "<p>{$fila['nombre']} ({$fila['email']}) <button onclick='editUser({$fila['id']})'>Editar</button> <button onclick='deleteUser({$fila['id']})'>Eliminar</button></p>";
    }
} else {
    echo "No hay usuarios";
}



?>