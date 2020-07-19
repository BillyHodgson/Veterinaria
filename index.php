<!DOCTYPE html>
<html>
<head>
<title>Veterinaria Tanuki</title>
<meta charset="iso-8859-1">
<link href="css/style.css" rel="stylesheet" type="text/css">
<!--[if IE 6]><link href="css/ie6.css" rel="stylesheet" type="text/css"><![endif]-->
<!--[if IE 7]><link href="css/ie7.css" rel="stylesheet" type="text/css"><![endif]-->
</head>
<body>
<div id="header"> <a href="#" id=""><img src="images/logo.jpg" width="310" height="114" alt=""></a>
  <ul class="navigation">
    <li class="active"><a href="index.php">Home</a></li>    
    <li><a href="login.php">Iniciar Sesion</a></li>
    
<?php 
include_once 'manteUsuarios.php';
if(isset($_SESSION['asistenteLogeado'])):?>
    <li><a href="citas.php">Citas</a></li>
    <li><a href="cerrarSesion.php">Salir</a></li>
<?php elseif(isset($_SESSION['administradorLogeado'])):?>
    <li><a href="citas.php">Citas</a></li>
    <li><a href="Usuarios.php">Usuarios</a></li>
    <li><a href="cerrarSesion.php">Salir</a></li>
<?php   
endif;?>
  </ul>
</div>
<div id="body">
  <div class="banner">&nbsp;</div>
  <div id="content">
    <div class="content">
      <ul>
      </ul>
    </div>
  </div>
</div>
</body>
</html>