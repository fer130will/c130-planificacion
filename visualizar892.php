<?php
//-- datos de 892 ----------------------------------------------------------------------//
$conexion = pg_connect("host=localhost dbname=datosAviones user=postgres password=1978Wilson");
$query = "SELECT fecha,mision,hora,segundo,altura,combustible,carga,pasajero from datos892";
$consulta1 = pg_query($conexion, $query);
pg_close();
//-- datos de 892 end ----------------------------------------------------------------------//
$conexion = pg_connect("host=localhost dbname=datosAviones user=postgres password=1978Wilson");
$query = ("SELECT fecha, fstotal from fstotal");
$consulta2 = pg_query($conexion, $query);
pg_close();
//-- datos de 892 factor de severidad  end ------------------------------------------------//
//-- datos de 892 EFH ----------------------------------------------------------------------//
$conexion = pg_connect("host=localhost dbname=datosAviones user=postgres password=1978Wilson");
$query = ("SELECT fecha, efhtotal from efhtotal");
$consulta3 = pg_query($conexion, $query);
pg_close();
//-- datos de 892 EFH end ------------------------------------------------//
/////////////////////////////////////////////////////////////////////////////////////////////////////////////
//-- datos de 893 ----------------------------------------------------------------------//
$conexion2 = pg_connect("host=localhost dbname=datosAviones893 user=postgres password=1978Wilson");
$query = ("SELECT fecha,mision,hora,segundo,altura,combustible,carga,pasajero from datos893");
$consulta893 = pg_query($conexion2, $query);
pg_close();
//-- datos de 893 end ----------------------------------------------------------------------//
$conexion2 = pg_connect("host=localhost dbname=datosAviones893 user=postgres password=1978Wilson");
$query = ("SELECT fstotal from fseveridadl");
$consulta8932 = pg_query($conexion2, $query);
pg_close();
//-- datos de 892 factor de severidad  end ------------------------------------------------//
//-- datos de 893 EFH ----------------------------------------------------------------------//
$conexion2 = pg_connect("host=localhost dbname=datosAviones893 user=postgres password=1978Wilson");
$query = ("SELECT total from efhl");
$consulta8933 = pg_query($conexion2, $query);
pg_close();
//-- datos de 898 EFH end ------------------------------------------------//
/////////////////////////////////////////////////////////////////////////////////////////////////////////////
//-- datos de 898 ----------------------------------------------------------------------//
$conexion3 = pg_connect("host=localhost dbname=datosAviones898 user=postgres password=1978Wilson");
$query = ("SELECT fecha,mision,hora,segundo,altura,combustible,carga,pasajero from datos898");
$consulta8981 = pg_query($conexion3, $query);
pg_close();
//-- datos de 898 end ----------------------------------------------------------------------//
$conexion3 = pg_connect("host=localhost dbname=datosAviones898 user=postgres password=1978Wilson");
$query = ("SELECT fstotal from fseveridadh1");
$consulta8982 = pg_query($conexion3, $query);
pg_close();
//-- datos de 898 factor de severidad  end ------------------------------------------------//
//-- datos de 892 EFH ----------------------------------------------------------------------//
$conexion3 = pg_connect("host=localhost dbname=datosAviones898 user=postgres password=1978Wilson");
$query = ("SELECT total from efhh1");
$consulta8983 = pg_query($conexion3, $query);
pg_close();
//-- datos de 898 EFH end ------------------------------------------------//
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>Grupo Logistico Nro.112</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <!-- Icono de página -->
    <!-- Icono de pagina ---------------------------------------------------------------------->
    <link rel="icon" href="/img/icono.jpg">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">


    <!-- Libraries Stylesheet ---------------------------------------------------------------------->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- Customized Bootstrap Stylesheet -------------------------------------------------------------->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <!-- Navbar Start ----------------------------------------------------------------------------->
    <div class="container-fluid ">
        <nav class="navbar navbar-expand-lg bg-white navbar-light py-3 py-lg-0 px-lg-5">
            <a href="index.html" class="navbar-brand ml-lg-3">
                <h1 class="m-0 text-primary"><span class="text-dark">Hercules</span> C-130</h1>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between px-lg-3" id="navbarCollapse">
                <div class="navbar-nav m-auto py-0">
                    <a href="index.html" class="nav-item nav-link active">Inicio</a>
                    <a href="escuadrilla.html" class="nav-item nav-link">Escuadrilla C-130</a>
                    <a href="ingreso.html" class="nav-item nav-link">Ingreso</a>
                    <a href="visualizar892.php" class="nav-item nav-link">Visualizar</a>
                </div>
            </div>
        </nav>
    </div>

    <!-- Navbar End ----------------------------------------------------------------->
    <!-- tabla 892 prototipo ----------------------------------------------------------------->
    <div class="con-total">
        <div class="tituloV">
            <h2 class="c130">C-130H FAE 892</h2>
            <div class="cont-principal container-fluid">
                <div class="izquierdo cont-hijo">
                    <div class="izq-hijo1">
                        <fieldset>
                            <legend>Horas actuales de vuelo</legend>
                            <input type="number" min="0" max="70000" step="1" class="entrada" id="horaInput" value="0">
                        </fieldset>
                    </div>
                    <div class="">
                        <button class="botonEFH" type="button">Button</button>
                    </div>
                </div>

                <div class="medio cont-hijo ">
                    <fieldset>
                        <legend>Datos de misiones</legend>
                        <div class="outer-wrapper">
                            <div class="table-wrapper">
                                <table>
                                    <thead>
                                        <tr>
                                            <th>Fecha</th>
                                            <th>Misión</th>
                                            <th>hora</th>
                                            <th>Segundos</th>
                                            <th>Altura</th>
                                            <th>Combustible</th>
                                            <th>Carga</th>
                                            <th>Pasajeros</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        while ($obj = pg_fetch_object($consulta1)) { ?>

                                        <tr style="background-color: #e7e5e5;color:#180c0c;">

                                            <td>
                                                <?php echo $obj->fecha; ?>
                                            </td>
                                            <td>
                                                <?php echo $obj->mision; ?>
                                            </td>
                                            <td>
                                                <?php echo $obj->hora; ?>
                                            </td>
                                            <td>
                                                <?php echo $obj->segundo; ?>
                                            </td>
                                            <td>
                                                <?php echo $obj->altura; ?>
                                            </td>
                                            <td>
                                                <?php echo $obj->combustible; ?>
                                            </td>
                                            <td>
                                                <?php echo $obj->carga; ?>
                                            </td>
                                            <td>
                                                <?php echo $obj->pasajero; ?>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <?php
                                        }
                                        ?>
                                </table>
                            </div>
                        </div>
                    </fieldset>
                </div>



                <div class="derecha cont-hijo">
                    <div class="derechohijo">
                        <fieldset>
                            <legend>Horas efectivas de vuelo</legend>
                            <table id="Table_id" ;>
                                <thead>
                                    <tr>
                                        <th>Fecha</th>
                                        <th>Porcentaje</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    while ($obj = pg_fetch_object($consulta3)) { ?>
                                    <tr style="background-color: #e7e5e5;color:#180c0c;">
                                        <td>
                                            <?php echo $obj->fecha; ?>
                                        </td>
                                        <td>
                                            <?php echo $obj->efhtotal; ?>
                                        </td>
                                    </tr>
                                </tbody>
                                <?php
                                        }
                                    

                                    ?>
                            </table>
                        </fieldset>
                    </div>
                    <div class="derechohijo">
                        <fieldset>
                            <legend>Factor de SEveridad</legend>
                            <table id="Table_id" ;>
                                <thead>
                                    <tr>
                                        <th>Fecha</th>
                                        <th>Porcentaje</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    while ($obj = pg_fetch_object($consulta2)) { ?>
                                    <tr style="background-color: #e7e5e5;color:#180c0c;">
                                        <td>
                                            <?php echo $obj->fecha; ?>
                                        </td>
                                        <td>
                                            <?php echo $obj->fstotal; ?>
                                        </td>
                                    </tr>
                                </tbody>
                                <?php
                                        }
                                    
                                    ?>
                            </table>
                        </fieldset>
                    </div>
                </div>
                <div class="Fin cont-hijo">
                    <fieldset>
                        <legend>Horas estructurales</legend>
                        <input type="text" class="entrada">
                    </fieldset>
                </div>
            </div>
        </div>
        <br>

        <div class="tituloV">
            <h2 class="c130">L-100-30 FAE 893</h2>
            <div class="cont-principal container-fluid">
                <div class="izquierdo cont-hijo">
                    <div class="izq-hijo1">
                        <fieldset>
                            <legend>Horas actuales de vuelo</legend>
                            <input type="number" min="0" max="70000" step="1" class="entrada" id="horaInput" value="0">
                        </fieldset>
                    </div>
                    <div class="">
                        <button class="botonEFH" type="button">Button</button>
                    </div>
                </div>

                <div class="medio cont-hijo ">
                    <fieldset>
                        <legend>Datos de misiones</legend>
                        <div class="outer-wrapper">
                            <div class="table-wrapper">
                                <table>
                                    <thead>
                                        <th>Fecha</th>
                                        <th>Mision</th>
                                        <th>Hora</th>
                                        <th>Segundo</th>
                                        <th>Altura</th>
                                        <th>Combustible</th>
                                        <th>Carga</th>
                                        <th>Pasajeros</th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Value 1</td>
                                            <td>Value 2</td>
                                            <td>Value 3</td>
                                            <td>Value 4</td>
                                            <td>Value 5</td>
                                            <td>Value 6</td>
                                            <td>Value 7</td>
                                            <td>Value 8</td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                </div>

                </fieldset>

                <div class="derecha cont-hijo">
                    <div class="derechohijo">
                        <fieldset>
                            <legend>Factor de severidad</legend>
                            <table>
                                <thead>
                                    <th>Fecha</th>
                                    <th>F.Severidad</th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Value 1</td>
                                        <td>Value 2</td>
                                    </tr>
                                </tbody>
                            </table>
                        </fieldset>
                    </div>
                    <div class="derechohijo">
                        <fieldset>
                            <legend>Horas Efectivas de Vuelo</legend>
                            <table>
                                <thead>
                                    <th>Fecha</th>
                                    <th>EFH</th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Value 1</td>
                                        <td>Value 2</td>
                                    </tr>
                                </tbody>
                            </table>
                        </fieldset>
                    </div>
                </div>
                <div class="Fin cont-hijo">
                    <fieldset>
                        <legend>Horas estructurales</legend>
                        <input type="text class=" entrada"">
                    </fieldset>
                </div>
            </div>
        </div>
        <br>
        <div class="tituloV">
            <h2 class="c130">C-130H FAE 898</h2>
            <div class="cont-principal container-fluid">
                <div class="izquierdo cont-hijo">
                    <div class="izq-hijo1">
                        <fieldset>
                            <legend>Horas actuales de vuelo</legend>
                            <input type="number" min="0" max="70000" step="1" class="entrada" id="horaInput" value="0">
                        </fieldset>
                    </div>
                    <div class="">
                        <button class="botonEFH" type="button">Button</button>
                    </div>
                </div>

                <div class="medio cont-hijo ">
                    <fieldset>
                        <legend>Datos de misiones</legend>
                        <div class="outer-wrapper">
                            <div class="table-wrapper">
                                <table>
                                    <thead>
                                        <th>Fecha</th>
                                        <th>Mision</th>
                                        <th>Hora</th>
                                        <th>Segundo</th>
                                        <th>Altura</th>
                                        <th>Combustible</th>
                                        <th>Carga</th>
                                        <th>Pasajeros</th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Value 1</td>
                                            <td>Value 2</td>
                                            <td>Value 3</td>
                                            <td>Value 4</td>
                                            <td>Value 5</td>
                                            <td>Value 6</td>
                                            <td>Value 7</td>
                                            <td>Value 8</td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                </div>

                </fieldset>

                <div class="derecha cont-hijo">
                    <div class="derechohijo">
                        <fieldset>
                            <legend>Factor de severidad</legend>
                            <table>
                                <thead>
                                    <th>Fecha</th>
                                    <th>F.Severidad</th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Value 1</td>
                                        <td>Value 2</td>
                                    </tr>
                                </tbody>
                            </table>
                        </fieldset>
                    </div>
                    <div class="derechohijo">
                        <fieldset>
                            <legend>Horas Efectivas de Vuelo</legend>
                            <table>
                                <thead>
                                    <th>Fecha</th>
                                    <th>EFH</th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Value 1</td>
                                        <td>Value 2</td>
                                    </tr>
                                </tbody>
                            </table>
                        </fieldset>
                    </div>
                </div>
                <div class="Fin cont-hijo">
                    <fieldset>
                        <legend>Horas estructurales</legend>

                        <input type="text" class="entrada" value="<?php $datos = pg_num_rows($consulta3);
                        echo $datos; ?>">
                    </fieldset>
                </div>
            </div>
        </div>
    </div>










    <!-- Footer Start ---------------------------------------------------------------->
    <div class="footer container-fluid position-relative bg-dark py-0" style="margin-top: 0px;">
        <div class="container pt-5">
            <div class="row">
                <h1 class="mb-3 text-white"><span class="text-primary">Hercules</span> C-130</h1>
            </div>
        </div>
    </div>
    <!-- Footer End --------------------------------------------------------------------->

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary back-to-top"><i class="bi bi-chevron-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="/js/visualizar_notificacion.js"></script>







</body>

</html>