<?php 
    include_once "header.php";

    $mysqli = include_once "conexion.php";
    $id = $_GET["id"];
    $sentencia = $mysqli -> prepare("SELECT * FROM INCIDENCIA WHERE idIncidencia = ?");
    $sentencia -> bind_param("i", $id);
    $sentencia -> execute();
    $resultado = $sentencia -> get_result();

    #Obtenim només la fila (incidencia) que volem editar
    $incidencia = $resultado -> fetch_assoc();
    if(!$incidencia) {
        exit("No existeix aquesta incidència!");
    }
?>

<h1>Actualitzar incidència:</h1>
<form action="UpdateAdmin.php" method="POST">
    <input type="hidden" name="idIncidencia" value="<?php echo $incidencia["idIncidencia"]; ?>">

    <label for="prioritat">Prioritat:</label>
    <select name="prioritat" id="prioritat">
        <option value="Alta" <?php if($incidencia["prioritat"] == "Alta") echo "selected"; ?>>Alta</option>
        <option value="Mitjana" <?php if($incidencia["prioritat"] == "Mitja") echo "selected"; ?>>Mitjana</option>
        <option value="Baixa" <?php if($incidencia["prioritat"] == "Baixa") echo "selected"; ?>>Baixa</option>
    </select>
    
    <label for="tipo">Tipo:</label>
    <select name="tipo" id="tipo">
        <option value="Software" <?php if($incidencia["tipo"] == "Software") echo "selected"; ?>>Software</option>
        <option value="Hardware" <?php if($incidencia["tipo"] == "Hardware") echo "selected"; ?>>Hardware</option>
        <option value="Internet" <?php if($incidencia["tipo"] == "Internet") echo "selected"; ?>>Internet</option>
        <option value="Corrent" <?php if($incidencia["tipo"] == "Corrent") echo "selected"; ?>>Corrent</option>
    </select>
    <label for="tecnic">Assignar técnic:</label>
    <input type="number" name="tecnic" id="tecnic" value="<?php echo $incidencia["tecnic"]; ?>" placeholder="Técnic">
</form>

<?php include_once "footer.php"; ?>