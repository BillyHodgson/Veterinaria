<?php include_once './baseDatos/citaConsultas.php';?>
<html lang="es">
    <head>
        <title>CITAS</title>
        <meta charset="iso-8859-1">
        <link href="css/style.css" rel="stylesheet" type="text/css">
<!--[if IE 6]><link href="css/ie6.css" rel="stylesheet" type="text/css"><![endif]-->
<!--[if IE 7]><link href="css/ie7.css" rel="stylesheet" type="text/css"><![endif]-->
<li class="active"><a href="index.php">Home</a></li>  
</head>
    <body>
        <div class="heading">
             <h2>CITAS</h2>
        </div>
        <form action="citas.php" method="GET"> 
            <table rel="" type="">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre Dueño</th>
                    <th>Nombre Mascota</th>
                    <th>Raza</th>
                    <th>Edad</th>
                    <th>Fecha</th>
                    <th>Observaciones</th>
                </tr>
            </thead>
            <tbody>
             <tbody>
                    <?php
                    $listaCitas = listarCitas();
                    if(count($listaCitas) > 0 ):
                        foreach($listaCitas as $posicion => $cita):
                        
                    ?>
                        <tr>
                            <td><?=$cita['id']?></td>
                            <td><?=$cita['nombreDueno']?></td>
                            <td><?=$cita['nombreMascota']?></td>
                            <td><?=$cita['raza']?></td>
                            <td><?=$cita['edad']?></td>
                            <td><?=$cita['fecha']?></td>
                            <td><?=$cita['observaciones']?></td>
                            <td><a href="editarCitas.php?id=<?=$cita['id']?>">Editar</a></td>
                            <td><a href="manteCitas.php?accion=eliminar&id=<?=$cita['id']?>">Eliminar</a></td>
                        </tr>
                    <?php 
                        endforeach;
                    endif;
                    ?>
                    
                </tbody>
            </tbody>
	</table>
            
             <footer>
                 <td><a href="registroCitas.php">Registrar Cita</a></td>
        <p>&copy; 2020 Todos los derechos reservados UTC<p>
        </footer>          
    </body>
</html>
     </form>   
</body>
</html>
