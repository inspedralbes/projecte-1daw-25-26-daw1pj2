<?php
//Són els paràmetres de connexió a la BD
$host = "db"; /* db és el nom del servei en DOcker*/
$usuario = "user";
$contrasenia = "123456";
$base_de_datos = "incidencies";

/* CReació de la connexió utilitzant MySQLi */
$mysqli = new mysqli($host, $usuario, $contrasenia, $base_de_datos);

/* charset: per soportar caràcters specials */
$mysqli->set_charset("utf8mb4");

/* Si la connexió falla mostrará un missatge d'error */
if ($mysqli->connect_errno) {
    echo "Falló la conexión a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

/* Devuelve la connexió (el objeto mysqli) para usarlo en los archivos que hagan un require/include_once del archivo */
return $mysqli;