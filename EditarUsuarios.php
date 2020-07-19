<?php 
require_once './baseDatos/usuarioConsultas.php';
if (isset($_GET['cedula'])){
    $cedula = $_GET['cedula'];
    $usuario = buscarUsuarioCedulaDB($cedula);
    
}

?>     
<section>
            <br>
            <h1>EDITAR USUARIOS</h1>
            <form method="POST" action="manteUsuarios.php">		
                <input type="text" placeholder="cedula" name="cedula" required value="<?=$usuario['cedula']?>"><br>
                <input type="text" placeholder="nombre"  name="nombre" required value="<?=$usuario['nombre']?>"><br>
                <input type="text" placeholder="telefono"  name="telefono" required value="<?=$usuario['telefono']?>"><br>
                <input type="text" placeholder="direccion"  name="direccion" required value="<?=$usuario['direccion']?>"><br>
                <Select name = "estado" type="text"><br>
                        <Option value = "activo"> activo </option>
                        <Option value = "inactivo" selected = "selected"> inactivo </option><br>              
                </Select><br>
                <Select name = "rol" type="text"><br>
                        <Option value = "administrador"> Administrador </option>
                        <Option value = "asistente" selected = "selected"> Asistente </option><br>              
                </Select><br>
                <input type="text" placeholder="correo"  name="correo" required value="<?=$usuario['correo']?>"><br>
                <input type="text" placeholder="password"  name="password" required value="<?=$usuario['password']?>"><br>
                <input type="submit" value="actualizar" name='accion'>
            </form>
 </section>

