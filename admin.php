<?php
session_start();

include("conexionBD.php");
$conexion = conectar();

if (!isset($_SESSION['usuario'])) {
    header("location:index.html");
}

$iduser = $_SESSION['usuario'];

$sql = "SELECT * FROM usuarios WHERE numero_ident ='$iduser'";
$resultado = $conexion->query($sql);
mysqli_close($conexion);
$row = $resultado->fetch_assoc();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href="css/login.css">
</head>

<body>

    <ul class="nav nav-pills mb-3 row" id="pills-tab" role="tablist">

        <div class="col-1">
            <img src="img/logo2.png" height="50">
        </div>

        <div class="col-3"></div>

        <li class="nav-item col-1" role="presentation">
            <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Inicio</button>
        </li>

        <li class="nav-item col-1" role="presentation">
            <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Nosotros</button>
        </li>

        <li class="nav-item col-1" role="presentation">
            <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Clientes</button>
        </li>

        <li class="nav-item col-1" role="presentation">
            <button class="nav-link" id="pills-pago-tab" data-bs-toggle="pill" data-bs-target="#pills-pago" type="button" role="tab" aria-controls="pills-pago" aria-selected="false">Contactenos</button>
        </li>

        <div class="col-1"></div>

        <div class="col-3">
            <div class="row">
                <div class="col-10 nombreUsuario2">
                    <div class="nombreUsuario">Bienvenido: <?php echo utf8_decode($row['nombres'] . ' ' . $row['apellidos']); ?></div>
                    <div class="nombreUsuario"><?php echo "<text style='color:yellow;'>" . $row['persona'] . "</text>"; ?></div>
                </div>
                <div class="col-2 imgUsuario">
                    <img src="img/logo2.png" height="50" class="btn btn-link dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" href="./salir.php">Cerrar sesion</a></li>
                    </ul>
                </div>
            </div>
        </div>

    </ul>

    <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">

            <div class="container">

                <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active" data-bs-interval="10000">
                            <img src="img/banco3.jpg" class="d-block w-100 bordeFondo" alt="...">
                            <div class="carousel-caption d-none d-md-block textoCarrusel">
                                <h3>BancoNET</h3>
                                <p>Elige la forma de pagar tu casa propia con tasas y cuotas preferenciales.</p>
                            </div>
                        </div>
                        <div class="carousel-item" data-bs-interval="2000">
                            <img src="img/banco2.jpg" class="d-block w-100 bordeFondo" alt="...">
                            <div class="carousel-caption d-none d-md-block textoCarrusel">
                                <h3>BancoNET</h3>
                                <p>En BancoNET estamos trabajando para que sigas adelante.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="img/banco1.jpg" class="d-block w-100 bordeFondo" alt="...">
                            <div class="carousel-caption d-none d-md-block textoCarrusel">
                                <h3>BancoNET</h3>
                                <p>Disfruta de los beneficios que dan nuestras tarjetas de crédito y débito.</p>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>

            </div>


        </div>
        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">

            <div class="p-5 text-white text-center container">
                <h1>BancoNET</h1>
                <p>Somos una entidad financiera colombiana con sede principal en la ciudad de Bogota, tenemos una trayectoria de 56 años de experiencia,
                    bajo una cultura de liderazgo, innovación, oportunidad y efectividad que ha contribuido a generar relaciones a largo plazo con nuestros clientes.
                    Contamos con una red de más de 180 oficinas, 25 credicentros y más de 3.200 cajeros automáticos en Colombia, además de filiales en Panamá y Barbados.</p>
            </div>

            <div class="container mt-5">
                <div class="row">
                    <div class="col-sm-4">
                        <h2>Nuestro propósito es:</h2>
                        <p>Hacer realidad el desarrollo de las personas, el crecimiento de los negocios y la transformación del País.</p>
                        <hr class="d-sm-none">
                    </div>
                    <div class="col-sm-8">
                        <h2>Mision</h2>
                        <p>Aportar a la calidad de vida de las personas de menores ingresos,
                            facilitándoles productos y servicios financieros sencillos,
                            innovadores y oportunos, de manera responsable, rentable y sostenible.</p>

                        <h2 class="mt-5">Visión</h2>

                        <p>Ser el Banco mejor valorado por sus colaboradores, clientes,
                            accionistas y la comunidad por aportar a su bienestar y calidad de vida en forma transparente,
                            eficiente, innovadora y rentable.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
            <br>
            <br>
            <br>
            <div class="container">
                <div class="row">

                    <table class="table table-light table-hover text-center">
                        <tr>
                            <td class="tdTitulo">Nombres</td>
                            <td class="tdTitulo">Apellidos</td>
                            <td class="tdTitulo">Identificacion</td>
                            <td class="tdTitulo">Perosona</td>
                            <td class="tdTitulo">Fecha pago</td>
                            <td class="tdTitulo">Valor a pagar</td>
                            <td class="tdTitulo">Estado</td>
                        </tr>

                        <?php
                        $conexion = conectar();
                        $iduser = $_SESSION['usuario'];
                        $sql = "SELECT * FROM usuarios";
                        $result = mysqli_query($conexion, $sql);
                        while ($mostrar = mysqli_fetch_array($result)) {
                        ?>
                            <tr>
                                <td><?php echo $mostrar['nombres'] ?></td>
                                <td><?php echo $mostrar['apellidos'] ?></td>
                                <td><?php echo $mostrar['numero_ident'] ?></td>
                                <td><?php echo $mostrar['persona'] ?></td>
                                <td><?php echo $mostrar['fecha'] ?></td>
                                <td><?php echo $mostrar['saldo'] ?></td>
                                <td>
                                    <?php
                                    if ($mostrar['saldo'] == 0) {
                                        echo "<p class='estado' style='color:green;'>" . 'Pago al dia' . "</p>";
                                    } else {
                                        echo "<p class='estado' style='color:red;'>" . 'Pago en mora' . "</p>";
                                    }
                                    ?>
                                </td>
                            </tr>
                        <?php
                        }
                        ?>

                        <?php
                        mysqli_close($conexion);
                        ?>

                    </table>

                </div>
            </div>


        </div>
        <div class="tab-pane fade" id="pills-pago" role="tabpanel" aria-labelledby="pills-pago-tab">

            <div class="container contact">
                <div class="row">
                    <div class="col-md-3 contenidoContact">
                        <div class="contact-info">
                            <img src="https://image.ibb.co/kUASdV/contact-image.png" alt="image" />
                            <h2>Contactanos</h2>
                            <h4>Nos encantaría saber de usted !</h4>
                        </div>
                    </div>
                    <div class="col-md-9 contenidoContact2">
                        <div class="contact-form">
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="fname">Nombres:</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="fname" placeholder="Enter First Name" name="fname">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="lname">Apellidos:</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="lname" placeholder="Enter Last Name" name="lname">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="email">Correo:</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="comment">Comentarios:</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" rows="5" id="comment"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <button type="submit" class="btn btn-default">Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

</body>


</html>