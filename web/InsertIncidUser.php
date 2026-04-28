<?php
include_once "header.php";
include_once "conexion.php"; // $mysqli = 
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $desc = $_POST["descripcion"]; /*$variable  [columna] */
    $fecha = $_POST["data"];
    $dept = $_POST["departament"];

    $sentencia = $mysqli -> prepare("INSERT INTO INCIDENCIA (descripcio, data, departament)
    VALUES (?,?,?)"
    );
    $sentencia -> bind_param("ssi", $desc, $fecha, $dept);
            /*data type we wanna introduce: string, date, int */
    $sentencia -> execute();
    // Un cop fet l'INSERT, obtenim l'ID de la nova fila
    $id = $mysqli -> query("SELECT LAST_INSERT_ID()") -> fetch_row()[0];
}
?>