<?php

$conn = mysqli_connect("localhost", "root", "", "database_name");


if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}


$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$edad = $_POST["edad"];
$fecha_nacimiento = $_POST["fecha_nacimiento"];
$identidad = $_POST["identidad"];
$lugar_residencia = $_POST["lugar_residencia"];
$municipio = $_POST["municipio"];
$departamento = $_POST["departamento"];
$numero_telefono = $_POST["numero_telefono"];
$sexo = $_POST["sexo"];
$nombre_padre = $_POST["nombre_padre"];
$apellido_padre = $_POST["apellido_padre"];
$edad_padre = $_POST["edad_padre"];
$ocupacion_padre = $_POST["ocupacion_padre"];
$nombre_madre = $_POST["nombre_madre"];
$apellido_madre = $_POST["apellido_madre"];
$edad_madre = $_POST["edad_madre"];
$ocupacion_madre = $_POST["ocupacion_madre"];
$jornada = $_POST['jornada'];
$seccion = $_POST['seccion'];
$carrera = $_POST['carrera'];
$ciclo = $_POST['ciclo'];


$sql = "INSERT INTO pre_matricula (nombre, apellido, edad, fecha_nacimiento, identidad, lugar_residencia, municipio, departamento, numero_telefono, sexo,nombre_padre,apellido_padre,edad_padre,ocupacion_padre,nombre_madre,apellido_madre,edad_madre,ocupacion_madre,jornada,seccion,carrera,ciclo)
VALUES ('$nombre', '$apellido', '$edad', '$fecha_nacimiento', '$identidad', '$lugar_residencia', '$municipio', '$departamento', '$numero_telefono', '$sexo','$nombre_padre','$apellido_padre','$edad_padre','$ocupacion_padre','$nombre_madre','$apellido_madre','$edad_madre','$ocupacion_madre','$jornada','$seccion','$carrera','$ciclo')";

if (mysqli_query($conn, $sql)) {

	echo "TU MATRICULA SE HA COMPLETADO CON EXITO";
} else {
	echo "Error: " . mysqli_error($conn);
}


mysqli_close($conn);
?>
