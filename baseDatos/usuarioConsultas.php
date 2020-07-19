<?php

require_once 'conexion.php';

function buscarUsuario($correo,$password){
    $sql ="SELECT * FROM USUARIOS WHERE CORREO='$correo' AND PASSWORD='$password'";
    $resultado = mysqli_query($GLOBALS['conexion'], $sql);
    
    $usuario = mysqli_fetch_assoc($resultado);
    
    return $usuario;
}

function buscarUsuarioCedulaDB($cedula){
   $sql = "SELECT * FROM USUARIOS WHERE CEDULA = $cedula";
   $resultado = mysqli_query($GLOBALS['conexion'], $sql); 
       
    $usuario = mysqli_fetch_assoc($resultado);
       
   return $usuario;
}


function registrarUsuarios($cedula, $nombre, $telefono,$direccion,$estado,$rol,$correo,$password){
        
    $sql = "INSERT INTO USUARIOS VALUES($cedula,'$nombre', $telefono,'$direccion','$estado','$rol','$correo','$password')";
    $resultado = mysqli_query($GLOBALS['conexion'], $sql);
}

function listarUsuarios(){
    
    $usuarios = array();
    $sql = "SELECT * FROM USUARIOS ORDER BY NOMBRE ASC";
    $resultado = mysqli_query($GLOBALS['conexion'], $sql);
    
    
    while($usuario = mysqli_fetch_assoc($resultado)){
        array_push($usuarios, $usuario);
    }
    
    return $usuarios;
    
}


function modificarUsuario($cedula, $nombre, $telefono,$direccion,$estado,$rol,$correo,$password){
    $sql= "UPDATE USUARIOS SET NOMBRE= '$nombre', TELEFONO=$telefono, DIRECCION='$direccion', ESTADO='$estado', ROL='$rol', CORREO='$correo', PASSWORD='$password' WHERE CEDULA=$cedula";
    $resultado = mysqli_query($GLOBALS['conexion'], $sql);
    
    
}


function modificarEstado($cedula){
   $sql= "UPDATE USUARIOS SET ESTADO=activo WHERE CEDULA=$cedula";
   $resultado = mysqli_query($GLOBALS['conexion'], $sql);
   var_dump($resultado);
}


function eliminarUsuarioCedula($cedula){
    $sql = "DELETE FROM USUARIOS WHERE CEDULA=$cedula";
    $resultado = mysqli_query($GLOBALS['conexion'], $sql);
    
}

?>