<?php

require_once 'conexion.php';


function buscarCitaIDDB($id){
   $sql = "SELECT * FROM CITAS WHERE ID =$id";
   $resultado = mysqli_query($GLOBALS['conexion'], $sql); 
       
    $cita = mysqli_fetch_assoc($resultado);
       
   return $cita;
}


function registrarCita($id, $nombreDueno, $nombreMascota,$raza,$edad,$fecha,$observaciones){ 
    $sql = "INSERT INTO CITAS VALUES($id,'$nombreDueno', '$nombreMascota','$raza','$edad','$fecha','$observaciones')";
    $resultado = mysqli_query($GLOBALS['conexion'], $sql);
   
}

function listarCitas(){
    
    $citas = array();
    $sql = "SELECT * FROM CITAS";
    $resultado = mysqli_query($GLOBALS['conexion'], $sql);
    
    
    while($cita = mysqli_fetch_assoc($resultado)){
        array_push($citas, $cita);
    }
    
    return $citas;
    
}


function modificarCita($id, $nombreDueno, $nombreMascota,$raza,$edad,$fecha,$observaciones){
    $sql= "UPDATE CITAS SET NOMBREDUENO='$nombreDueno', NOMBREMASCOTA='$nombreMascota', RAZA='$raza', EDAD='$edad', FECHA='$fecha', OBSERVACIONES='$observaciones' WHERE ID=$id";
    $resultado = mysqli_query($GLOBALS['conexion'], $sql);
    
    
}


function modificarEstado($cedula){
   $sql= "UPDATE USUARIOS SET ESTADO=activo WHERE CEDULA=$cedula";
   $resultado = mysqli_query($GLOBALS['conexion'], $sql);
   var_dump($resultado);
}


function eliminarCitaID($id){
    var_dump($id);
    $sql = "DELETE FROM CITAS WHERE ID=$id";
    $resultado = mysqli_query($GLOBALS['conexion'], $sql);
    
}

?>
