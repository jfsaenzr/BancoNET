<?php

function conectar()
{
    $conexion = mysqli_connect("localhost", "root", "", "creditos");
    return $conexion;
}
