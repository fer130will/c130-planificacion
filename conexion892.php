<?php
$mision = $_POST['mision'];


//////////////////////////////////////////////////////////////////////////////////////////////////
//conexion a la BD para enviar datos generales a la BD datos 892//
$conexion = pg_connect("host=localhost dbname=datosAviones user=postgres password=1978Wilson");
if ($conexion) {
  $query = ("INSERT INTO datos892(fecha,mision,hora,segundo,altura,combustible,carga,pasajero)
VALUES('$_REQUEST[fecha]','$_REQUEST[mision]','$_REQUEST[hora]','$_REQUEST[segundo]','$_REQUEST[altura]',
  '$_REQUEST[fuel]','$_REQUEST[carga]','$_REQUEST[pax]')");
  $consulta = pg_query($conexion, $query);
  pg_close();
  header('Location:892.php');
} else {
  echo 'Lo sentimos. No fue posible realizar la conexión.';
  //header('Location:ingreso.html');
};
/////////////////////////////////////////////////////////////////////////////////////////////////
/*------------------- opción de almacenamiento en corto------------------------------------------*/
if ($mision == 'corto') {
  $conexion = pg_connect("host=localhost dbname=datosAviones user=postgres password=1978Wilson");
  if ($conexion) {
    $query = ("INSERT INTO cortoh (fecha,numvuelos,hora,segundo,alttotal,altprom,cargtotal,cargprom,usabilidad)
    VALUES('$_REQUEST[fecha]','$_REQUEST[nvc]','$_REQUEST[hc]','$_REQUEST[sc]','$_REQUEST[cat]','$_REQUEST[cap]','$_REQUEST[ctc]',
    '$_REQUEST[ccp]','$_REQUEST[cu]')");
     $consulta = pg_query($conexion, $query);
    pg_close();
    header('Location:892.php');
  } else {
    echo 'Lo sentimos. No fue posible realizar la conexión.';
   // header('Location:ingreso.html');
  };
};
  if ($mision == 'largo') {
    $conexion = pg_connect("host=localhost dbname=datosAviones user=postgres password=1978Wilson");
    if ($conexion) {
      $query = ("INSERT INTO largoh (fecha,numvuelos,hora,segundo,alttotal,altprom,cargtotal,cargprom,usabilidad)
      VALUES('$_REQUEST[fecha]','$_REQUEST[nvl]','$_REQUEST[hl]','$_REQUEST[sl]','$_REQUEST[lat]','$_REQUEST[lap]','$_REQUEST[ctl]',
      '$_REQUEST[clp]','$_REQUEST[lu]')");
      $consulta = pg_query($conexion, $query);
      pg_close();
       header('Location:892.php');
    } else {
      echo 'Lo sentimos. No fue posible realizar la conexión.';
     // header('Location:ingreso.html');
    };
  };
    if ($mision == 'entrenamiento') {
      $conexion = pg_connect("host=localhost dbname=datosAviones user=postgres password=1978Wilson");
      if ($conexion) {
        $query = ("INSERT INTO trainingh (fecha,numvuelos,hora,segundo,alttotal,altprom,cargtotal,cargprom,usabilidad)
        VALUES('$_REQUEST[fecha]','$_REQUEST[nve]','$_REQUEST[eh]','$_REQUEST[es]','$_REQUEST[ate]','$_REQUEST[aep]','$_REQUEST[ctl]',
        '$_REQUEST[clp]','$_REQUEST[eu]')");
        $consulta = pg_query($conexion, $query);
        pg_close();
         header('Location:892.php');
      } else {
        echo 'Lo sentimos. No fue posible realizar la conexión.';
        header('Location:ingreso.html');
      };
    };
      if ($mision == 'tacticoh') {
        $conexion = pg_connect("host=localhost dbname=datosAviones user=postgres password=1978Wilson");
        if ($conexion) {
          $query = ("INSERT INTO tacticoh (fecha,numvuelos,hora,segundo,alttotal,altprom,cargtotal,cargprom,usabilidad)
          VALUES('$_REQUEST[fecha]','$_REQUEST[nvt]','$_REQUEST[ht]','$_REQUEST[st]','$_REQUEST[att]','$_REQUEST[atp]','$_REQUEST[ctt]',
          '$_REQUEST[ctp]','$_REQUEST[tu]')");
          $consulta = pg_query($conexion, $query);
          pg_close();
          header('Location:892.php');
        } else {
          echo 'Lo sentimos. No fue posible realizar la conexión.';
          header('Location:ingreso.html');
        };
      };
    
  


/*------------- conexión a factor de severidad vuelos --------------------------------------*/
      /*------------- conexión a factor de severidad corto --------------------------------------*/
$conexion = pg_connect("host=localhost dbname=datosAviones user=postgres password=1978Wilson");
if ($conexion) {
  $query = ("INSERT INTO fscorto(fecha,fscorto)
    VALUES('$_REQUEST[fecha]','$_REQUEST[factorc]')");
  $consulta = pg_query($conexion, $query);
  pg_close();
  header('Location:892.php');
} else {
  echo 'Lo sentimos. No fue posible realizar la conexión.';
  header('Location:ingreso.html');
};
/*------------- conexión a factor de severidad largo --------------------------------------*/
$conexion = pg_connect("host=localhost dbname=datosAviones user=postgres password=1978Wilson");
if ($conexion) {
  $query = ("INSERT INTO fslargo1(fecha,fslargo)
    VALUES('$_REQUEST[fecha]','$_REQUEST[factorl]')");
  $consulta = pg_query($conexion, $query);
  pg_close();
  header('Location:892.php');
} else {
  echo 'Lo sentimos. No fue posible realizar la conexión.';
  header('Location:ingreso.html');
};
/*------------- conexión a factor de severidad entrenamiento --------------------------------------*/
$conexion = pg_connect("host=localhost dbname=datosAviones user=postgres password=1978Wilson");
if ($conexion) {
  $query = ("INSERT INTO fsentre(fecha,fsentre)
    VALUES('$_REQUEST[fecha]','$_REQUEST[entrefs]')");
  $consulta = pg_query($conexion, $query);
  pg_close();
  header('Location:892.php');
} else {
  echo 'Lo sentimos. No fue posible realizar la conexión.';
  header('Location:ingreso.html');
};
/*------------- conexión a factor de severidad tactico --------------------------------------*/
$conexion = pg_connect("host=localhost dbname=datosAviones user=postgres password=1978Wilson");
if ($conexion) {
  $query = ("INSERT INTO fstactico(fecha,fstactico)
    VALUES('$_REQUEST[fecha]','$_REQUEST[tacfs]')");
  $consulta = pg_query($conexion, $query);
  pg_close();
  header('Location:892.php');
} else {
  echo 'Lo sentimos. No fue posible realizar la conexión.';
  header('Location:ingreso.html');
};
/*------------- conexión a factor de severidad total --------------------------------------*/
$conexion = pg_connect("host=localhost dbname=datosAviones user=postgres password=1978Wilson");
if ($conexion) {
  $query = "UPDATE fstotal SET fecha='$_REQUEST[fecha]', fstotal='$_REQUEST[totalfs]';
	WHERE idfstotal = '0';
   $consulta = pg_query($conexion, $query)";
    pg_close();
  header('Location:892.php');
} else {
  echo 'Lo sentimos. No fue posible realizar la conexión.';
  header('Location:ingreso.html');
};
  
  

/*------------- conexión a factor de severidad total --------------------------------------*/
////////////////////////////////////////////////////////////////////////////////////////////////////////7
///////////////////////////////////////////////////////////////////////////////////////////////////77777777
/*------------- EFH corto --------------------------------------*/
$conexion = pg_connect("host=localhost dbname=datosAviones user=postgres password=1978Wilson");
if ($conexion) {
  $query = "UPDATE efhcorto SET fecha='$_REQUEST[fecha]', efhcorto1='$_REQUEST[efhc]';
	WHERE idefh = '0';
   $consulta = pg_query($conexion, $query)";
    pg_close();
  header('Location:892.php');
} else {
  echo 'Lo sentimos. No fue posible realizar la conexión.';
  header('Location:ingreso.html');
};
/*------------- EFH corto end --------------------------------------*/
/*------------- EFH largo --------------------------------------*/
$conexion = pg_connect("host=localhost dbname=datosAviones user=postgres password=1978Wilson");
if ($conexion) {
  $query = ("INSERT INTO efhlargo (fecha,efhlargo1)
    VALUES('$_REQUEST[fecha]','$_REQUEST[efhl]')");
  $consulta = pg_query($conexion, $query);
  pg_close();
  header('Location:892.php');
} else {
  echo 'Lo sentimos. No fue posible realizar la conexión.';
  header('Location:ingreso.html');
};
/*------------- EFH largo end --------------------------------------*/
/*------------- EFH entrenamiento --------------------------------------*/
$conexion = pg_connect("host=localhost dbname=datosAviones user=postgres password=1978Wilson");
if ($conexion) {
  $query = ("INSERT INTO efhentre (fecha,efhentre)
    VALUES('$_REQUEST[fecha]','$_REQUEST[factorl]')");
  $consulta = pg_query($conexion, $query);
  pg_close();
  //header('Location:892.php');
} else {
  echo 'Lo sentimos. No fue posible realizar la conexión.';
  header('Location:ingreso.html');
};
/*------------- EFH entrenamiento end --------------------------------------*/
/*------------- EFH tactico --------------------------------------*/
$conexion = pg_connect("host=localhost dbname=datosAviones user=postgres password=1978Wilson");
if ($conexion) {
  $query = ("UPDATE fstotal SET fecha= '$_REQUEST[fecha]', fstotal= '$_REQUEST[efht]')");
  $consulta = pg_query($conexion, $query);
  pg_close();
  //header('Location:892.php');
} else {
  echo 'Lo sentimos. No fue posible realizar la conexión.';
  header('Location:ingreso.html');
};
/*------------- EFH tactico end --------------------------------------*/
/*------------- EFH total --------------------------------------*/
$conexion = pg_connect("host=localhost dbname=datosAviones user=postgres password=1978Wilson");
if ($conexion) {
  $query = ("UPDATE efhtotal	set fecha = '$_REQUEST[fecha]', efhtotal ='$_REQUEST[acumulado]')"); 
  $consulta = pg_query($conexion, $query);
  pg_close();
  //header('Location:892.php');
} else {
  echo 'Lo sentimos. No fue posible realizar la conexión.';
  header('Location:ingreso.html');
};
/*------------- EFH largo end --------------------------------------*/
