<?php
session_start();

include("conexionBD.php");
$conexion = conectar();

$usuario = $_POST['usuario'];
$contraseña = $_POST['contraseña'];

$_SESSION['usuario'] = $usuario;

$consulta = "SELECT * FROM usuarios where numero_ident='$usuario' and contraseña='$contraseña'";
$resultado = mysqli_query($conexion, $consulta);

$filas = mysqli_fetch_array($resultado);

if ($filas['persona'] == 'Funcionario') { //administrador
    header("location:admin.php");
} else
if ($filas['persona'] == 'Cliente') { //cliente
    header("location:cliente.php");
} else {
?>
   
    <?php
    echo "<script>window.location = '/login/index.html';</script>";
    ?>

<?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);
?>