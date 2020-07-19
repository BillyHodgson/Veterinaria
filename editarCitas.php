<?php 
require_once './baseDatos/citaConsultas.php';
var_dump($_GET['id']);
if (isset($_GET['id'])){
    $id = $_GET['id'];
    $cita = buscarCitaIDDB($id);
    
}

?>     
<section>
            <br>
            <h1>EDITAR CITA</h1>
            <form method="POST" action="manteCitas.php">
                <input type="text" placeholder="" name="id" required value="<?=$cita['id']?>"><br>
                <input type="text" placeholder="" name="nombreDueno" required value="<?=$cita['nombreDueno']?>"><br>
                <input type="text" placeholder=""  name="nombreMascota" required value="<?=$cita['nombreMascota']?>"><br>
                <input type="text" placeholder=""  name="raza" required value="<?=$cita['raza']?>"><br>
                <input type="text" placeholder=""  name="edad" required value="<?=$cita['edad']?>"><br>               
                <input type="date" placeholder=""  name="fecha" required value="<?=$cita['fecha']?>"><br>
                <input type="text" placeholder=""  name="observaciones" required value="<?=$cita['observaciones']?>"><br>
                <input type="submit" value="actualizar" name='accion'>
            </form>
 </section>