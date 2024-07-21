<?php
$mision = $_POST['mision'];
$corto = "corto";
$largo = "largo";
$entrenamiento = "entrenamiento";
$tactico = "tactico";

//////////////////////////////////////////////////////////////////////////////////////////////////
//conexion a la BD para enviar datos generales a la BD datos 898//
$conexion = pg_connect("host=localhost dbname=datosAviones898 user=postgres password=1978Wilson");
if ($conexion) {
    $query = ("INSERT INTO datos898(fecha,mision,hora,segundo,altura,combustible,carga,pasajero)
VALUES('$_REQUEST[fecha]','$_REQUEST[mision]','$_REQUEST[hora]','$_REQUEST[segundo]','$_REQUEST[altura]',
'$_REQUEST[fuel]','$_REQUEST[carga]','$_REQUEST[pax]')");
    $consulta = pg_query($conexion, $query);
    pg_close();
    // header('Location:892.html');
} else {
    echo 'Lo sentimos. No fue posible realizar la conexión.';
    header('Location:ingreso.html');
};
/////////////////////////////////////////////////////////////////////////////////////////////////
/*------------------- opción de almacenamiento en corto------------------------------------------*/
if ($mision == $corto) {
    $conexion = pg_connect("host=localhost dbname=datosAviones898 user=postgres password=1978Wilson");
    if ($conexion) {
        $query = ("INSERT INTO cortoh1 (fecha,numvuelos,hora,segundo,alttotal,altprom,cargtotal,cargprom,usabilidad)
    VALUES('$_REQUEST[fecha]','$_REQUEST[nvc]','$_REQUEST[hc]','$_REQUEST[sc]','$_REQUEST[cat]','$_REQUEST[cap]','$_REQUEST[ctc]',
    '$_REQUEST[ccp]','$_REQUEST[cu]')");
        $consulta = pg_query($conexion, $query);
        pg_close();
        // header('Location:892.html');
    } else {
        echo 'Lo sentimos. No fue posible realizar la conexión.';
        header('Location:ingreso.html');
    };
} else {
    if ($mision == $largo) {
        $conexion = pg_connect("host=localhost dbname=datosAviones898 user=postgres password=1978Wilson");
        if ($conexion) {
            $query = ("INSERT INTO largoh1 (fecha,numvuelos,hora,segundo,alttotal,altprom,cargtotal,cargprom,usabilidad)
      VALUES('$_REQUEST[fecha]','$_REQUEST[nvl]','$_REQUEST[hl]','$_REQUEST[sl]','$_REQUEST[lat]','$_REQUEST[lap]','$_REQUEST[ctl]',
      '$_REQUEST[clp]','$_REQUEST[lu]')");
            $consulta = pg_query($conexion, $query);
            pg_close();
            // header('Location:892.html');
        } else {
            echo 'Lo sentimos. No fue posible realizar la conexión.';
            header('Location:ingreso.html');
        }
        ;
    } else {
        if ($mision == $entrenamiento) {
            $conexion = pg_connect("host=localhost dbname=datosAviones898 user=postgres password=1978Wilson");
            if ($conexion) {
                $query = ("INSERT INTO trainingh1 (fecha,numvuelos,hora,segundo,alttotal,altprom,cargtotal,cargprom,usabilidad)
        VALUES('$_REQUEST[fecha]','$_REQUEST[nve]','$_REQUEST[eh]','$_REQUEST[es]','$_REQUEST[ate]','$_REQUEST[aep]','$_REQUEST[cet]',
        '$_REQUEST[cep]','$_REQUEST[eu]')");
                $consulta = pg_query($conexion, $query);
                pg_close();
                // header('Location:892.html');
            } else {
                echo 'Lo sentimos. No fue posible realizar la conexión.';
                header('Location:ingreso.html');
            }
            ;
        } else {
            if ($mision == $tactico) {
                $conexion = pg_connect("host=localhost dbname=datosAviones898 user=postgres password=1978Wilson");
                if ($conexion) {
                    $query = ("INSERT INTO tacticoh1 (fecha,numvuelos,hora,segundo,alttotal,altprom,cargtotal,cargprom,usabilidad)
          VALUES('$_REQUEST[fecha]','$_REQUEST[nvt]','$_REQUEST[ht]','$_REQUEST[st]','$_REQUEST[att]','$_REQUEST[atp]','$_REQUEST[ctt]',
          '$_REQUEST[ctp]','$_REQUEST[tu]')");
                    $consulta = pg_query($conexion, $query);
                    pg_close();
                    // header('Location:892.html');
                } else {
                    echo 'Lo sentimos. No fue posible realizar la conexión.';
                    header('Location:ingreso.html');
                }
                ;
            }
        }
    }
}

/*------------- conexión a factor de severidad --------------------------------------*/
$conexion = pg_connect("host=localhost dbname=datosAviones898 user=postgres password=1978Wilson");
if ($conexion) {
    $query = ("INSERT INTO fseveridadh1(totalhoras,fscorto,fslargo,fsentre,fstactico,fstotal)
    VALUES('$_REQUEST[finalhoras]','$_REQUEST[factorc]','$_REQUEST[factorl]',
    '$_REQUEST[entrefs]','$_REQUEST[tacfs]','$_REQUEST[totalfs]')");
    $consulta = pg_query($conexion, $query);
    pg_close();
    // header('Location:892.html');
} else {
    echo 'Lo sentimos. No fue posible realizar la conexión.';
    header('Location:ingreso.html');
}
;
/*------------- conexión a factor de EFH --------------------------------------*/
$conexion = pg_connect("host=localhost dbname=datosAviones898 user=postgres password=1978Wilson");
if ($conexion) {
    $query = ("INSERT INTO efhh1 (cefh,lefh,eefh,tefh,total)
    VALUES('$_REQUEST[efhc]','$_REQUEST[efhl]','$_REQUEST[efhe]','$_REQUEST[efht]','$_REQUEST[acumulado]')");
    $consulta = pg_query($conexion, $query);
    pg_close();
    header('Location:892.html');
} else {
    echo 'Lo sentimos. No fue posible realizar la conexión.';
    header('Location:ingreso.html');
};
