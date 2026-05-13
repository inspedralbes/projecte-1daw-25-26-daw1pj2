<?php
require_once "conexion.php";

if (!isset($_GET['id'])) {
    echo "Introdueix un ID vàlid.";
    exit;
}

$id = $_GET['id'];

$sql = "SELECT i.*, d.nom AS nomDept, t.nom AS nomTech FROM INCIDENCIA i LEFT JOIN DEPARTMENT d ON i.department = d.idDepartment LEFT JOIN TECNIC t ON i.tecnic = t.idTecninc  WHERE i.idIncidencia = ?";
$stmt = $conn ->prepare($sql);
$stmt -> bind_param("i", $id);

$stmt -> execute();

$result -> $stmt -> get_result();

if ($result -> num_rows < 0) {
    echo "No s'ha trobat la incidència";
    exit;
} 

$incidenica = $result -> fetch_assoc();
?>

<h1>Incidència <?php echo $incidencia['idIncidencia'] ?></h1>

<ul>
    <li><strong>Descripció:</strong> <?= $incidencia['descripcio'] ?></li>
    <li><strong>Data:</strong> <?= $incidencia['data'] ?></li>
    <li><strong>Departament:</strong> <?= $incidencia['departament'] ?></li>
    <li><strong>Tècnic:</strong> <?= $incidencia['tecnic'] ?></li>
    <li><strong>Data finalització:</strong> <?= $incidencia['dataFinalitzacio'] ?></li>
    <li><strong>Tipus:</strong> <?= $incidencia['tipo'] ?></li>
    <li><strong>Prioritat:</strong> <?= $incidencia['prioritat'] ?></li>
</ul>

<div class="table-responsive">
    <legend>Detalls de la incidència</legend>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Descripció</th>
                <th>Data Creació</th>
                <th>Departament</th>
                <th>Data Finalització</th>
                <th>Tipo</th>
            </tr>
        </thead>
        <tbody>
            <tr></tr>
        </tbody>
    </table>
</div>