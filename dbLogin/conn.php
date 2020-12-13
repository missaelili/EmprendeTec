<?php

function conn_db(){
    $db_server ="localhost";
    $db_user ="root";
    $db_pass ="";
    $db_name ="tecnologico";
    // Se realiza la conexion a la base de datos
    $conn = mysqli_connect($db_server,$db_user,$db_pass,$db_name);
    $conn->set_charset("utf8mb4");
    /*en caso de que ocurra un error, se pediran las credenciales para crear la base de datos
      en caso de que no ocurra un error, regresara la conexion a la base de datos.*/
    if($conn){
        return $conn;
    }
}