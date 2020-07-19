<?php
require_once './baseDatos/citaConsultas.php';


if(isset($_POST['accion'])){
    switch($_POST['accion']){
        case 'registrar': registroCita(); header('location:citas.php');break; 
        case 'actualizar':actualizarCita();header('location:citas.php'); break;
        case 'cancelar':header('location:citas.php'); break;
        
    }
}

if(isset($_GET['accion'])){
    switch($_GET['accion']){ 
        case 'eliminar':eliminarCita();header('location:citas.php');break;      
    }
}



function validarUsuario(){
    $correo = $_POST['correo'];
    $password = $_POST['password'];
    
     $usuario=buscarUsuario($correo,$password);  
     return $usuario;
}

function registroCita(){
    $id ="NULL";
    $nombreDueno = $_POST['nombreDueno'];
    $nombreMascota = $_POST['nombreMascota'];
    $raza = $_POST['raza'];
    $edad = "edad";
    $fecha = $_POST['fecha'];
    $observaciones = $_POST['observaciones'];
    
    
    registrarCita($id, $nombreDueno, $nombreMascota,$raza,$edad,$fecha,$observaciones);
    
}

function actualizarCita(){
    $id =$_POST['id'];
    $nombreDueno = $_POST['nombreDueno'];
    $nombreMascota = $_POST['nombreMascota'];
    $raza = $_POST['raza'];
    $edad = $_POST['edad'];
    $fecha = $_POST['fecha'];
    $observaciones = $_POST['observaciones'];
    
    
    modificarCita($id, $nombreDueno, $nombreMascota,$raza,$edad,$fecha,$observaciones);
}

function eliminarCita(){
    $id = $_GET['id'];
    eliminarCitaID($id);
    
}




?>
