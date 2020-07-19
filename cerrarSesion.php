<?php

session_start();

if(isset($_SESSION['administradorLogeado'])){
    session_destroy();
}else{
    if(isset($_SESSION['asistenteLogeado'])){}
    session_destroy();
}

header('location:index.php');

?>
