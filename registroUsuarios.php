<html>
<head>
<title>Login</title>
<meta charset="iso-8859-1">
<link href="css/style.css" rel="stylesheet" type="text/css">
</head>
        <section>
            <br>
            <h1>Registro de Usuario</h1>
            <form method="POST" action="manteUsuarios.php">		
                <input type="text" placeholder=" Cedula " name="cedula" required><br>
                <input type="text" placeholder=" Nombre "  name="nombre" required><br>
                <input type="text" placeholder=" Telefono " name="telefono" required> <br>               
                <input type="text" placeholder=" Direccion " name="direccion" required><br>
                <Select name = "rol" type="text"><br>
                        <Option value = "administrador"> Administrador </option>
                        <Option value = "asistente" selected = "selected"> Asistente </option><br>              
                </Select><br>
                <input type="text" placeholder="correo" name="correo" required><br>
                <input type="text" placeholder="password" name="password" required><br>
                <input type="submit" name="accion" value="registrar">
            </form>
        </section>
</html>