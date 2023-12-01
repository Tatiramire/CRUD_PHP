<?php
    $db_dir      = 'localhost'; //direccion base de datos
    $db_user     = 'root'; //nombre usuario base de datos
    $db_password = ''; // contraseño usuario base de datos
    $db_name     = 'php_mysql_crud'; //nombre de la base de datos

    session_start();

    $conn = mysqli_connect(
        $db_dir,
        $db_user,
        $db_password,
        $db_name
    );
?>
