<?php
$conexion = mysqli_connect("localhost", "root", "", "muebles");
mysqli_set_charset($conexion,"utf8mb4");

function db_query($query) {
    $connection = mysqli_connect("localhost","root","","muebles");
    $result = mysqli_query($connection,$query);
    return $result;
}
?>