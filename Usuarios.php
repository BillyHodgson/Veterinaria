<?php include_once './baseDatos/usuarioConsultas.php';?>
<html lang="es">
    <head>
        <title>Usuarios</title>
        <meta charset="iso-8859-1">
        <link href="css/style.css" rel="stylesheet" type="text/css">
        <li class="active"><a href="index.php">Home</a></li>
<!--[if IE 6]><link href="css/ie6.css" rel="stylesheet" type="text/css"><![endif]-->
<!--[if IE 7]><link href="css/ie7.css" rel="stylesheet" type="text/css"><![endif]-->
</head>
    <body>
        <div class="heading">
             <h2>Control de Usuarios</h2>
        </div>
        <form action="manteUsuarios.php" method="GET"> 
            <table rel="" type="">
            <thead>
                <tr>
                    <th>Cedula</th>
                    <th>Nombre</th>
                    <th>Direccion</th>
                    <th>Estado</th>
                    <th>Rol</th>
                    <th>Correo</th>
                    <th>Password</th>
                </tr>
            </thead>
            <tbody>
             <tbody>
                    <?php
                    $listaUsuarios = listarUsuarios();
                    if(count($listaUsuarios) > 0 ):
                        foreach($listaUsuarios as $posicion => $usuario):
                        
                    ?>
                        <tr>
                            <td><?=$usuario['cedula']?></td>
                            <td><?=$usuario['nombre']?></td>
                            <td><?=$usuario['telefono']?></td>
                            <td><?=$usuario['direccion']?></td>
                            <td><?=$usuario['estado']?></td>
                            <td><?=$usuario['rol']?></td>
                            <td><?=$usuario['correo']?></td>
                            <td><?=$usuario['password']?></td>
                            <td><a href="EditarUsuarios.php?cedula=<?=$usuario['cedula']?>">Editar</a></td>                           
                            <td><a href="manteUsuarios.php?accion=eliminar&cedula=<?=$usuario['cedula']?>">Eliminar</a></td>
                        </tr>
                    <?php 
                        endforeach;
                    endif;
                    ?>
                    
                </tbody>
            </tbody>
	</table>
            
             <footer>
             <td><a href="registroUsuarios.php">Registrar Usuario</a></td>
        <p>&copy; 2020 Todos los derechos reservados UTC<p>
        </footer>          
    </body>
</html>
     </form>   
</body>
</html>
