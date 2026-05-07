<?php
require_once "../header.php";
$misqli = include_once "../conexion.php";
# creamos una variable que haga un SELECT a la BD mediante conexion.php
$return = $misqli -> query("SELECT * FROM TECNIC");

$v_tecnics = $return -> fetch_all(MYSQLI_ASSOC);
?>

<link rel="stylesheet" href="../css/responsive.css">

<div>
    <h2>Escull el teu usuari:</h2>
    <!--Fem un bucle per seleccionar les incidències d'un tenic (no fem un php extern)-->
    <?php # bucle para recorrer los tecnicos
    foreach ($v_tecnics as $tecnic) {
        $id = $tecnic["idTecnic"];
        echo "<a href='tecnic.php?id=$id'>"
        . $tecnic["nom"] . "</a><br>";
    }
    ?>
</div>

<div>
    <a href="../index.php" class="btn rounded text-white btn-index" style="background-color: #7a1b0c">INICI</a>
</div>

<?php require_once "../footer.php" ?>