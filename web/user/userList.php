<?php include_once "../header.php";?>

<?php
$mysqli = include_once "../conexion.php";
$resultado = $mysqli->query("SELECT * FROM INCIDENCIA");
$incidencies = $resultado->fetch_all(MYSQLI_ASSOC);  
?>
<table class="table">
    <thead>
        <legend>Llista d'incidències completa</legend>
        <tr>
            <th>ID</th>
            <th>Descripcio</th>
            <th>Data Creació</th>
            <th>Departament</th>
            <th>Data Finalitzacio</th>
            <th>Tipus</th>
        </tr>
    </thead>
    <tbody>
        <?php
            foreach ($incidencies as $INCIDENCIA) { ?>
            <tr>
                <td><?php echo $INCIDENCIA["idIncidencia"]?></td>
                <td><?php echo $INCIDENCIA["descripcio"]?></td>
                <td><?php echo $INCIDENCIA["data"]?></td>
                <td><?php echo $INCIDENCIA["departament"]?></td>
                <td><?php echo $INCIDENCIA["dataFinalitzacio"]?></td>
                <td><?php echo $INCIDENCIA["tipo"]?></td>
            </tr>           
        <?php } ?>
    </tbody>
</table>

<a href="../index.php" class="btn rounded text-white btn-index" style="background-color:#129987">INICI</a>
<a href="CrearIncidUser.php" class="btn rounded text-white btn-index" style="background-color:#129987">VOLVER</a>

<?php include_once "../footer.php";?>