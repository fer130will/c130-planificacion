<?php
$conexion = pg_connect("host=localhost dbname=datosAviones898 user=postgres password=1978Wilson");
$query = "SELECT numvuelos,hora,segundo,alttotal,altprom,cargtotal,cargprom,usabilidad FROM cortoh1";
$consulta = pg_query($conexion, $query);
for ($i = 0; $i < pg_num_rows($consulta); $i++) {
    if ($obj1 = pg_fetch_object($consulta)) {
    }
}
pg_close();
//----------------Corto end -----------------------------------//
//---------- Largo ---------------------------------------//
$conexion = pg_connect("host=localhost dbname=datosAviones898 user=postgres password=1978Wilson");
$query = "SELECT numvuelos,hora,segundo,alttotal,altprom,cargtotal,cargprom,usabilidad FROM largoh1";
$consulta = pg_query($conexion, $query);
for ($i = 0; $i < pg_num_rows($consulta); $i++) {
    if ($obj2 = pg_fetch_object($consulta)) {
    }
}
pg_close();
//---------- Largo end ---------------------------------------//
//---------- tactico ---------------------------------------//
$conexion = pg_connect("host=localhost dbname=datosAviones898 user=postgres password=1978Wilson");
$query = "SELECT numvuelos,hora,segundo,alttotal,altprom,cargtotal,cargprom,usabilidad FROM tacticoh1";
$consulta = pg_query($conexion, $query);
for ($i = 0; $i < pg_num_rows($consulta); $i++) {
    if ($obj3 = pg_fetch_object($consulta)) {
    }
}
pg_close();
//---------- Tactico end ---------------------------------------//
//---------- Entrenamiento ---------------------------------------//
$conexion = pg_connect("host=localhost dbname=datosAviones898 user=postgres password=1978Wilson");
$query = "SELECT numvuelos,hora,segundo,alttotal,altprom,cargtotal,cargprom,usabilidad FROM trainingh1";
$consulta = pg_query($conexion, $query);
for ($i = 0; $i < pg_num_rows($consulta); $i++) {
    if ($obj4 = pg_fetch_object($consulta)) {
    }
}
pg_close();
//---------- Entrenamiento end ---------------------------------------//
//---------- factor de severidad ---------------------------------------//
$conexion5 = pg_connect("host=localhost dbname=datosAviones898 user=postgres password=1978Wilson");
$query = "SELECT totalhoras,fscorto,fslargo,fsentre,fstactico,fstotal FROM fseveridadh1";
$consulta = pg_query($conexion5, $query);
for ($i = 0; $i < pg_num_rows($consulta); $i++) {
    if ($obj5 = pg_fetch_object($consulta)) {
    }
}
pg_close();
//---------- factor de severidad end ---------------------------------------//
//---------- EFH ---------------------------------------//
$conexion = pg_connect("host=localhost dbname=datosAviones898 user=postgres password=1978Wilson");
$query = "SELECT cefh,lefh,eefh,tefh,total FROM efhh1";
$consulta = pg_query($conexion, $query);
for ($i = 0; $i < pg_num_rows($consulta); $i++) {
    if ($obj6 = pg_fetch_object($consulta)) {
    }
}
pg_close();
//---------- EFH end ---------------------------------------//
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>Grupo Logistico Nro.112</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <!-- Icono de página -->
    <!-- Icono de pagina -->
    <link rel="icon" href="img/icono.jpg">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">


    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="style.php" rel="stylesheet" type="text/css">
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Navbar Start -->
    <div class="container-fluid p-0">
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
                <a href="contact.html" class="nav-item nav-link">Contactanos</a>
            </div>
            <a href="ingreso.html" class="btn btn-primary d-none d-lg-block">Regresar</a>
    </div>
    </nav>
    </div>
    <!-- Navbar End -->

    <!-- Header Start -->
    <div class="jumbotron jumbotron-fluid bg-jumbotron" style="margin-bottom: 20px;">
        <div class="container text-center py-5">
            <h3 class="text-white display-3 mb-4">FAE 898</h3>
            <h5 class="text-white">Ingrese los datos de acuerdo a las aeronaves</h5>
            <div class="d-inline-flex align-items-center text-white">
                <p class="m-0"><a class="text-white" href="">Inicio</a></p>
                <i class="bi bi-airplane-engines px-3"></i>
                <p class="m-0">Parametros</p>
            </div>
        </div>
    </div>
    <!-- Header End -->

    <!-- datos inicio------------------------------------------------------------------->

    <!-- datos inicio------------------------------------------------------------------->
    <form action="conexion898.php" method="post" class="formulario-datos">
        <div class="container-fluid contFilas">
            <div class="fila1">
                <fieldset class="titulo">
                    <legend>Datos de la aeronave</legend>
                    <div class="filaRow1">
                        <div class="colColuma">
                            <fieldset class="leyendaTitulo2">
                                <legend>Fecha</legend>
                                <input type="date" class="inputg1" id="fechaInput" name="fecha" required>
                            </fieldset>
                        </div>
                        <div class="colColuma">
                            <fieldset class="leyendaTitulo2">
                                <legend>Misión</legend>
                                <select class="inputg1" aria-label="Default select example" name="mision" required id="misionInput">
                                    <option disabled selected="">Seleccione</option>
                                    <option value="corto">Logistico Corto</option>
                                    <option value="largo">Logistico largo</option>
                                    <option value="entrenamiento">Entrenamiento</option>
                                    <option value="tactico">Tactico</option>
                                </select>
                            </fieldset>
                        </div>
                        <div class="colColumah">
                            <fieldset class="leyendaTitulo2">
                                <legend>hora de vuelo</legend>
                                <div class="colColuma">
                                    <input type="number" min="0" max="12" step="1" class="horastotal inputg1" id="horaInput" value="0" name="hora" required>
                                </div>
                                <div class="colColuma">
                                    <input type="number" min="0" max="60" step="5" class="horastotal inputg1" id="segundoInput" value="0" name="segundo" required>
                                </div>
                            </fieldset>
                        </div>
                        <div class="colColuma">
                            <fieldset class="leyendaTitulo2">
                                <legend>Altura</legend>
                                <input type="number" min="0" max="33000" step="1000" class="inputg1" id="alturaInput" value="0" name="altura" required>
                            </fieldset>
                        </div>
                        <div class="colColuma">
                            <fieldset class="leyendaTitulo2">
                                <legend>Combustible</legend>
                                <input type="number" min="1000" max="65000" step="1000" class="inputg1" id="combustibleInput" value="0" name="fuel" required>
                        </div>
                        <div class="colColuma">
                            <fieldset class="leyendaTitulo2">
                                <legend>Carga/Equipos</legend>
                                <input type="number" min="1000" max="40000" step="1000" class="inputg1" id="cargaInput" value="0" name="carga" required>
                        </div>
                        <div class="colColuma">
                            <fieldset class="leyendaTitulo2">
                                <legend>Pasajeros</legend>
                                <input type="number" min="0" max="100" step="1" class="inputg1" id="pasajerosInput" value="0" name="pax" required>
                        </div>
                        <div class="colColuma">
                            <button type="button" class="button-71" role="button" onclick="calcular1()">Calcular
                                Valores</button>
                        </div>
                        <div class="colColuma">
                            <button type="submit" class="button-71" role="button">Guardar valores</button>
                        </div>
                    </div>
            </div>
            <!-- datos inicio end------------------------------------------------------------------->
            <!--............ OWE------------------------------------------------------------------->
            <div class="fila1">
                <fieldset class="titulo">
                    <legend>Operational Weight Empty (OWE)</legend>
                    <div class="filaRow1">
                        <div class="colColuma">
                            <fieldset class="leyendaTitulo2">
                                <legend>Peso vacio</legend>
                                <input type="number" class="inputg11" value="73000" id="pesoVacio" readonly>
                            </fieldset>
                        </div>
                        <div class="colColuma">
                            <fieldset class="leyendaTitulo2">
                                <legend>Oil</legend>
                                <input type="number" class="inputg11" value="359" id="aceiteNoUsado" readonly>
                            </fieldset>
                        </div>
                        <div class="colColuma">
                            <fieldset class="leyendaTitulo2">
                                <legend>Fuel</legend>
                                <div class="colColuma">
                                    <input type="number" class="inputg11" value="795" id="combustibleNoUsado" readonly>
                                </div>
                            </fieldset>
                        </div>
                        <div class="colColuma">
                            <fieldset class="leyendaTitulo2">
                                <legend>Crew</legend>
                                <input type="number" class="inputg11" value="200" id="tripulacion" readonly>
                            </fieldset>
                        </div>
                        <div class="colColuma">
                            <fieldset class="leyendaTitulo2">
                                <legend>Foot/Water</legend>
                                <input type="number" class="inputg11" value="1020" id="comidaAgua" readonly>
                        </div>
                        <div class="colColuma">
                            <fieldset class="leyendaTitulo2">
                                <legend>Accessories</legend>
                                <input type="number" class="inputg11" value="754" id="accesoriosCarga" readonly>
                        </div>
                        <div class="colColuma">
                            <fieldset class="leyendaTitulo2">
                                <legend>(OWE)</legend>
                                <input type="number" class="inputg11" value="" id="oweTotal" readonly>
                            </fieldset>
                        </div>
                    </div>
                </fieldset>
            </div>
            <!-------------------OWE end ---------------------------------------------------------------->
            <!--............ ECW ------------------------------------------------------------------->
            <div class="fila1">
                <fieldset class="titulo">
                    <legend>Efective Cargo Weight (ECW)</legend>
                    <div class="filaRow1">
                        <div class="colColuma">
                            <fieldset class="leyendaTitulo2">
                                <legend>Gross Weight</legend>
                                <input type="number" class="inputg11" value="155000" id="grossWeight" readonly>
                            </fieldset>
                        </div>
                        <div class="colColuma">
                            <fieldset class="leyendaTitulo2">
                                <legend>Fuel</legend>
                                <input type="number" class="inputg11" value="0" id="CombustibleEwc" readonly>
                            </fieldset>
                        </div>
                        <div class="colColuma">
                            <fieldset class="leyendaTitulo2">
                                <legend>Fuel</legend>
                                <div class="colColuma">
                                    <input type="number" class="inputg11" value="795" id="combustibleNoUsado" readonly>
                                </div>
                            </fieldset>
                        </div>
                        <div class="colColuma">
                            <fieldset class="leyendaTitulo2">
                                <legend>OWE</legend>
                                <input type="number" class="inputg11" value="0" id="pesoOweTotal" readonly>
                            </fieldset>
                        </div>
                        <div class="colColuma">
                            <fieldset class="leyendaTitulo2">
                                <legend>ECW</legend>
                                <input type="number" class="inputg11" value="0" id="ecwTotal" readonly>
                        </div>
                    </div>
                </fieldset>
            </div>
            <!-------------------ECW end ---------------------------------------------------------------->
            <!--............ Log. Corto ------------------------------------------------------------------->
            <div class="fila1">
                <fieldset class="titulo">
                    <legend>Mision Logistico Corto</legend>
                    <div class="filaRow1">
                        <div class="colColuma">
                            <fieldset class="leyendaTitulo2">
                                <legend>Cant de vuelos</legend>
                                <input type="number" class="inputg11" value="<?php echo '' . $obj1->numvuelos; ?>" id="vueloCorto" name="nvc" readonly>
                            </fieldset>
                        </div>
                        <div class="colColumah">
                            <fieldset class="leyendaTitulo2">
                                <legend>hora Totales</legend>
                                <div class="colColuma">
                                    <input type="number" min="0" max="12" step="1" class="horastotal inputg1" id="horaTotalCorto" value="<?php echo '' . $obj1->hora; ?>" name="hc" readonly>
                                </div>
                                <div class="colColuma">
                                    <input type="number" min="0" max="60" step="5" class="horastotal inputg1" id="segundoTotalCorto" value="<?php echo '' . $obj1->segundo; ?>" name="sc" readonly>
                                </div>
                            </fieldset>
                        </div>
                        <div class="colColuma">
                            <fieldset class="leyendaTitulo2">
                                <legend>Altura total</legend>
                                <div class="colColuma">
                                    <input type="number" class="inputg11" value="<?php echo '' . $obj1->alttotal; ?>" id="altTotalCorto" name="cat" readonly>
                                </div>
                            </fieldset>
                        </div>
                        <div class="colColuma">
                            <fieldset class="leyendaTitulo2">
                                <legend>Altura promedio</legend>
                                <input type="number" class="inputg11" value="<?php echo '' . $obj1->altprom; ?>"" id=" altPromCorto" name="cap" readonly>
                            </fieldset>
                        </div>
                        <div class="colColuma">
                            <fieldset class="leyendaTitulo2">
                                <legend>Carga total</legend>
                                <input type="number" class="inputg11" value="<?php echo '' . $obj1->cargtotal; ?>" id="cargTotalCorto" name="ctc" readonly>
                        </div>
                        <div class="colColuma">
                            <fieldset class="leyendaTitulo2">
                                <legend>Carga promedio</legend>
                                <input type="number" class="inputg11" value="<?php echo '' . $obj1->cargprom; ?>"" id=" cargPromCorto" name="ccp" readonly>
                        </div>
                        <div class="colColuma">
                            <fieldset class="leyendaTitulo2">
                                <legend>Usabilidad</legend>
                                <input type="number" class="inputg11" value="<?php echo '' . $obj1->usabilidad; ?>" id="usabCorto" name="cu" readonly>
                        </div>
                    </div>
                </fieldset>
            </div>
            <!------------------- Log Corto end ---------------------------------------------------------------->
            <!--............ Log. Largo ------------------------------------------------------------------->
            <div class="fila1">
                <fieldset class="titulo">
                    <legend>Mision Logistico Largo</legend>
                    <div class="filaRow1">
                        <div class="colColuma">
                            <fieldset class="leyendaTitulo2">
                                <legend>Cant de vuelos</legend>
                                <input type="number" class="inputg2" value="<?php echo '' . $obj2->numvuelos; ?>" id="vueloLargo" name="nvl" readonly>
                            </fieldset>
                        </div>
                        <div class="colColumah">
                            <fieldset class="leyendaTitulo2">
                                <legend>hora Totales</legend>
                                <div class="colColuma">
                                    <input type="number" min="0" max="12" step="1" class="horastotal inputg1-1" id="horaTotalLargo" value="<?php echo '' . $obj2->hora; ?>" name="hl" readonly>
                                </div>
                                <div class="colColuma">
                                    <input type="number" min="0" max="60" step="5" class="horastotal inputg1-1" id="segundoTotalLargo" value="<?php echo '' . $obj2->segundo; ?>" name="sl" readonly>
                                </div>
                            </fieldset>
                        </div>
                        <div class="colColuma">
                            <fieldset class="leyendaTitulo2">
                                <legend>Altura total</legend>
                                <div class="colColuma">
                                    <input type="number" class="inputg2" value="<?php echo '' . $obj2->alttotal; ?>" id="altTotalLargo" name="lat" readonly>
                                </div>
                            </fieldset>
                        </div>
                        <div class="colColuma">
                            <fieldset class="leyendaTitulo2">
                                <legend>Altura promedio</legend>
                                <input type="number" class="inputg2" value="<?php echo '' . $obj2->altprom; ?>" id="altPromLargo" name="lap" readonly>
                            </fieldset>
                        </div>
                        <div class="colColuma">
                            <fieldset class="leyendaTitulo2">
                                <legend>Carga total</legend>
                                <input type="number" class="inputg2" value="<?php echo '' . $obj2->cargtotal; ?>" id="cargTotalLargo" name="ctl" readonly>
                        </div>
                        <div class="colColuma">
                            <fieldset class="leyendaTitulo2">
                                <legend>Carga promedio</legend>
                                <input type="number" class="inputg2" value="<?php echo '' . $obj2->cargprom; ?>" id="cargPromLargo" name="clp" readonly>
                        </div>
                        <div class="colColuma">
                            <fieldset class="leyendaTitulo2">
                                <legend>Usabilidad</legend>
                                <input type="number" class="inputg2" value="<?php echo '' . $obj2->usabilidad; ?>" id="usabLargo" name="lu" readonly>
                        </div>
                    </div>
                </fieldset>
            </div>
            <!------------------- Log Largo end ---------------------------------------------------------------->
            <!--............ Log. Entrenamiento ------------------------------------------------------------------->
            <div class="fila1">
                <fieldset class="titulo">
                    <legend>Mision Entrenamiento</legend>
                    <div class="filaRow1">
                        <div class="colColuma">
                            <fieldset class="leyendaTitulo2">
                                <legend>Cant de vuelos</legend>
                                <input type="number" class="inputg2" value="<?php echo '' . $obj4->numvuelos; ?>" id="vueloEntren" name="nve" readonly>
                            </fieldset>
                        </div>
                        <div class="colColumah">
                            <fieldset class="leyendaTitulo2">
                                <legend>hora Totales</legend>
                                <div class="colColuma">
                                    <input type="number" min="0" max="12" step="1" class="horastotal inputg1-1" id="horaTotalEntren" value="<?php echo '' . $obj4->hora; ?>" name="eh" readonly>
                                </div>
                                <div class="colColuma">
                                    <input type="number" min="0" max="60" step="5" class="horastotal inputg1-1" id="segundoTotalEntren" value="<?php echo '' . $obj4->segundo; ?>" name="es" readonly>
                                </div>
                            </fieldset>
                        </div>
                        <div class="colColuma">
                            <fieldset class="leyendaTitulo2">
                                <legend>Altura total</legend>
                                <div class="colColuma">
                                    <input type="number" class="inputg2" value="<?php echo '' . $obj4->alttotal; ?>" id="altTotalEntren" name="ate" readonly>
                                </div>
                            </fieldset>
                        </div>
                        <div class="colColuma">
                            <fieldset class="leyendaTitulo2">
                                <legend>Altura promedio</legend>
                                <input type="number" class="inputg2" value="<?php echo '' . $obj4->altprom; ?>" id="altPromEntren" name="aep" readonly>
                            </fieldset>
                        </div>
                        <div class="colColuma">
                            <fieldset class="leyendaTitulo2">
                                <legend>Carga total</legend>
                                <input type="number" class="inputg2" value="<?php echo '' . $obj4->cargtotal; ?>" id="cargTotalLargo" name="ctl" readonly>
                        </div>
                        <div class="colColuma">
                            <fieldset class="leyendaTitulo2">
                                <legend>Carga promedio</legend>
                                <input type="number" class="inputg2" value="<?php echo '' . $obj4->cargprom; ?>" id="cargPromLargo" name="clp" readonly>
                        </div>
                        <div class="colColuma">
                            <fieldset class="leyendaTitulo2">
                                <legend>Usabilidad</legend>
                                <input type="number" class="inputg2" value="<?php echo '' . $obj4->usabilidad; ?>" id="usabEntren" name="eu" readonly>
                        </div>
                    </div>
                </fieldset>
            </div>
            <!------------------- Log Entrenamiento end ---------------------------------------------------------------->
            <!--............ Tactico ------------------------------------------------------------------->
            <div class="fila1">
                <fieldset class="titulo">
                    <legend>Misiones Tácticas</legend>
                    <div class="filaRow1">
                        <div class="colColuma">
                            <fieldset class="leyendaTitulo2">
                                <legend>Cant de vuelos</legend>
                                <input type="number" class="inputg2" value="<?php echo '' . $obj3->numvuelos; ?>" id="vueloTactico" name="nvt" readonly>
                            </fieldset>
                        </div>
                        <div class="colColumah">
                            <fieldset class="leyendaTitulo2">
                                <legend>hora Totales</legend>
                                <div class="colColuma">
                                    <input type="number" min="0" max="12" step="1" class="horastotal inputg1-1" id="horaTotalTactico" value="<?php echo '' . $obj3->hora; ?>" name="ht" readonly>
                                </div>
                                <div class="colColuma">
                                    <input type="number" min="0" max="60" step="5" class="horastotal inputg1-1" id="segundoTotalTactico" value="<?php echo '' . $obj3->segundo; ?>" name="st" readonly>
                                </div>
                            </fieldset>
                        </div>
                        <div class="colColuma">
                            <fieldset class="leyendaTitulo2">
                                <legend>Altura total</legend>
                                <div class="colColuma">
                                    <input type="number" class="inputg2" value="<?php echo '' . $obj3->alttotal; ?>" id="altTotalTactico" name="att" readonly>
                                </div>
                            </fieldset>
                        </div>
                        <div class="colColuma">
                            <fieldset class="leyendaTitulo2">
                                <legend>Altura promedio</legend>
                                <input type="number" class="inputg2" value="<?php echo '' . $obj3->altprom; ?>" id="altPromTactico" name="atp" readonly>
                            </fieldset>
                        </div>
                        <div class="colColuma">
                            <fieldset class="leyendaTitulo2">
                                <legend>Carga total</legend>
                                <input type="number" class="inputg2" value="<?php echo '' . $obj3->cargtotal; ?>" id="cargTotalTactico" name="ctt" readonly>
                        </div>
                        <div class="colColuma">
                            <fieldset class="leyendaTitulo2">
                                <legend>Carga promedio</legend>
                                <input type="number" class="inputg2" value="<?php echo '' . $obj3->cargprom; ?>" id="cargPromTactico" name="ctp" readonly>
                        </div>
                        <div class="colColuma">
                            <fieldset class="leyendaTitulo2">
                                <legend>Usabilidad</legend>
                                <input type="number" class="inputg2" value="<?php echo '' . $obj3->usabilidad; ?>" id="usabTactico" name="tu" readonly>
                        </div>
                    </div>
                </fieldset>
            </div>
            <!------------------- Tactico end ---------------------------------------------------------------->
            <!--............ Factor de severidad ------------------------------------------------------------------->
            <div class="fila1">
                <fieldset class="titulo">
                    <legend>Factor de severidad</legend>
                    <div class="filaRow1">
                        <div class="colColuma">
                            <fieldset class="leyendaTitulo2">
                                <legend>Tottal de horas</legend>
                                <input type="number" class="inputg2" value="<?php echo '' . $obj5->totalhoras; ?>" id="totalHorasMisiones" name="finalhoras" readonly>
                            </fieldset>
                        </div>
                        <div class="colColumah">
                            <fieldset class="leyendaTitulo2">
                                <legend>Corto</legend>
                                <div class="colColuma">
                                    <input type="number" class="inputg2" value="<?php echo '' . $obj5->fscorto; ?>" id="fsCorto" name="factorc" readonly>
                                </div>
                            </fieldset>
                        </div>
                        <div class="colColuma">
                            <fieldset class="leyendaTitulo2">
                                <legend>Largo</legend>
                                <div class="colColuma">
                                    <input type="number" class="inputg2" value="<?php echo '' . $obj5->fslargo; ?>" id="fsLargo" name="factorl" readonly>
                                </div>
                            </fieldset>
                        </div>
                        <div class="colColuma">
                            <fieldset class="leyendaTitulo2">
                                <legend>Entrenamiento</legend>
                                <input type="number" class="inputg2" value="<?php echo '' . $obj5->fsentre; ?>" id="fsEntren" name="entrefs" readonly>
                            </fieldset>
                        </div>
                        <div class="colColuma">
                            <fieldset class="leyendaTitulo2">
                                <legend>Tactico</legend>
                                <input type="number" class="inputg2" value="<?php echo '' . $obj5->fstactico; ?>" id="fsTactico" name="tacfs" readonly>
                        </div>
                        <div class="colColuma">
                            <fieldset class="leyendaTitulo2">
                                <legend>Total</legend>
                                <input type="number" class="inputg2" value="<?php echo '' . $obj5->fstotal; ?>" id="fsTotal" name="totalfs" readonly>
                        </div>
                    </div>
                </fieldset>
            </div>
            <!------------------- Factor de severidad end ------------------------------------------>
            <!--............ EFH ------------------------------------------------------------------->
            <div class="fila1">
                <fieldset class="titulo">
                    <legend>Horas efectivas de vuelo</legend>
                    <div class="filaRow1">
                        <div class="colColuma">
                            <fieldset class="leyendaTitulo2">
                                <legend>Corto</legend>
                                <input type="number" class="inputg2" value="<?php echo '' . $obj6->cefh; ?>" id="efhCorto" name="efhc" readonly>
                            </fieldset>
                        </div>
                        <div class="colColumah">
                            <fieldset class="leyendaTitulo2">
                                <legend>Largo</legend>
                                <div class="colColuma">
                                    <input type="number" class="inputg2" value="<?php echo '' . $obj6->lefh; ?>" id="efhLargo" name="efhl" readonly>
                                </div>
                            </fieldset>
                        </div>
                        <div class="colColuma">
                            <fieldset class="leyendaTitulo2">
                                <legend>Largo</legend>
                                <div class="colColuma">
                                    <input type="number" class="inputg2" value="<?php echo '' . $obj6->fslargo; ?>" id="fsLargo" name="factorl" readonly>
                                </div>
                            </fieldset>
                        </div>
                        <div class="colColuma">
                            <fieldset class="leyendaTitulo2">
                                <legend>Entrenamiento</legend>
                                <input type="number" class="inputg2" value="<?php echo '' . $obj6->eefh; ?>" id="efhEntren" name="efhe" readonly>
                            </fieldset>
                        </div>
                        <div class="colColuma">
                            <fieldset class="leyendaTitulo2">
                                <legend>Tactico</legend>
                                <input type="number" class="inputg2" value="<?php echo '' . $obj6->tefh; ?>" id="efhTactico" name="efht" readonly>
                        </div>
                        <div class="colColuma">
                            <fieldset class="leyendaTitulo2">
                                <legend>Total</legend>
                                <input type="number" class="inputg2" value="<?php echo '' . $obj6->total; ?>" id="efhAcumulado" name="acumulado" readonly>
                        </div>
                    </div>
                </fieldset>
            </div>
            <!------------------- EFH end ------------------------------------------>
        </div>
        </div>
    </form>

    <!-- Footer Start -->
    <div class="footer container-fluid position-relative bg-dark py-0" style="margin-top: 0px;">
        <div class="container pt-5">
            <div class="row">
                <h1 class="mb-3 text-white"><span class="text-primary">Hercules</span> C-130</h1>
            </div>
        </div>
    </div>
    <!-- Footer End -->
    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary back-to-top"><i class="bi bi-chevron-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="/lib/easing/easing.min.js"></script>
    <script src="/lib/waypoints/waypoints.min.js"></script>
    <script src="/lib/counterup/counterup.min.js"></script>
    <script src="/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- Contact Javascript File -->
    <script src="js/898.js"></script>

</body>

</html>