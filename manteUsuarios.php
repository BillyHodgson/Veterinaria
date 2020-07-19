<?php
require_once './baseDatos/usuarioConsultas.php';


if(isset($_POST['accion'])){
    switch($_POST['accion']){
        case 'Ingresar':
            $usuario = validarUsuario();
            if(!empty($usuario)){
                if($usuario['estado']== "activo"){
                    if($usuario['rol'] == "asistente"){
                        $_SESSION['asistenteLogeado'] = $usuario;
                        header('location:index.php');
                    }else{
                        $_SESSION['administradorLogeado'] = $usuario;
                        header('location:index.php');
                    }
                }else{
                    echo "<script>
                alert('Usuario Inactivo');
                window.location= 'login.php'
                </script>";
                }
            }else{
                header('location:login.php');
            }
            break;
        case 'registrar': registroUsuario();header('location:Usuarios.php'); break; 
        case 'actualizar':actualizarUsuario();header('location:Usuarios.php'); break;
        
    }
}

if(isset($_GET['accion'])){
    switch($_GET['accion']){ 
        case 'eliminar':eliminarUsuario();header('location:Usuarios.php');break;
        case 'cambioEstado':cambiarEstado();header('location:Usuarios.php');break;
    }
}



function validarUsuario(){
    $correo = $_POST['correo'];
    $password = $_POST['password'];
    
     $usuario=buscarUsuario($correo,$password);  
     return $usuario;
}

function registroUsuario(){
    $cedula = $_POST['cedula'];
    $nombre = $_POST['nombre'];
    $telefono = $_POST['telefono'];
    $direccion = $_POST['direccion'];
    $estado = "inactivo";
    $rol = $_POST['rol'];
    $correo = $_POST['correo'];
    $password = $_POST['password'];
    
    
    registrarUsuarios($cedula, $nombre, $telefono,$direccion,$estado,$rol,$correo,$password);
    
}

function actualizarUsuario(){
    $cedula = $_POST['cedula'];
    $nombre = $_POST['nombre'];
    $telefono = $_POST['telefono'];
    $direccion = $_POST['direccion'];
    $estado = $_POST['estado'];
    $rol = $_POST['rol'];
    $correo = $_POST['correo'];
    $password = $_POST['password'];
    
    
    modificarUsuario($cedula, $nombre, $telefono,$direccion,$estado,$rol,$correo,$password);
}

function eliminarUsuario(){
    $cedula = $_GET['cedula'];
    eliminarUsuarioCedula($cedula);
    
}


function cambiarEstado(){
    $cedula = $_GET['cedula'];
    modificarEstado($usuario); 
}



?>