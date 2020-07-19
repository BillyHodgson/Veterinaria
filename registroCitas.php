<html>
<head>
<title>Registro</title>
<meta charset="iso-8859-1">
<link href="css/style.css" rel="stylesheet" type="text/css">
</head>
        <section>
            <br>
            <h1>Registro de Citas</h1>
            <form method="POST" action="manteCitas.php">		
                <input type="text" placeholder=" Nombre del Dueno "  name="nombreDueno"><br>
                <input type="text" placeholder=" Nombre de la Mascota " name="nombreMascota"> <br>               
                <input type="text" placeholder=" Raza " name="raza"><br>
                <input type="text" placeholder="Edad" name="edad"><br>
                <input type="date" placeholder="Fecha" name="fecha"><br>
                <input type="text" placeholder="Observaciones" name="observaciones"><br>
                <input type="submit" name="accion" value="registrar">
                <input type="submit" name="accion" value="cancelar">
            </form>
        </section>
</html>