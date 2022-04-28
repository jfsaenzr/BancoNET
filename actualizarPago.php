<?php

include("conexionBD.php");
$conexion = conectar();

session_start();

$id = $_POST['id'];

mysqli_query($conexion, "UPDATE usuarios SET saldo = 0 WHERE  id = '$id' ");
mysqli_close($conexion);

echo '<script>alert("Pago exitoso")</script>';
echo "<script>window.location = '/login/cliente.php';</script>";
