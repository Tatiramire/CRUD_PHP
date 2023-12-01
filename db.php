<?php
    $db_dir      = 'localhost';
    $db_user     = 'root';
    $db_password = '';
    $db_name     = 'php_mysql_crud';

    session_start();

    $conn = mysqli_connect(
        $db_dir,
        $db_user,
        $db_password,
        $db_name
    );
?>