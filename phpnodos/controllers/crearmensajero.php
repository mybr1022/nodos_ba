<?php
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
header("Allow: GET, POST, OPTIONS, PUT, DELETE");

include_once('../Models/conexion.php');

// Proteger contra SQL Injection
$Id_Mensajero=$_GET['Id_Mensajero'];
$Nombre_Mensajero=$_GET['Nombre_Mensajero'];
$Codigo_Nomina=$_GET['Codigo_Nomina'];
$Id_Nodo=$_GET['Id_Nodo'];


$sql = "INSERT INTO mensajeros (Id_Mensajero, Nombre_Mensajero, Codigo_Nomina, Id_Nodo) VALUES ('$Id_Mensajero' ,'$Nombre_Mensajero' ,'$Codigo_Nomina', 
'$Id_Nodo ')";

if ($conn->query($sql) === TRUE) {
    echo "Usuario creado con éxito";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>