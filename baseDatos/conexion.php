<?php

// Establecer conexion con la base de datos

$servidor = '127.0.0.1';
$usuario='root';
$password='';
$baseDatos='veterinaria';


$conexion= mysqli_connect($servidor, $usuario, $password, $baseDatos);


mysqli_query($conexion, "SET NAMES 'utf8");

session_start();

?>