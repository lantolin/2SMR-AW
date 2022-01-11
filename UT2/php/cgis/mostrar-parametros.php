<!DOCTYPE html>
<html lang="en">

<head>
  <title>Parametros de la request (GET)</title>
  <meta charset="utf-8">
</head>

<body>
 <h1>Parametros de la request (GET)</h1>
 <ul>
<?php
 foreach ($_GET as $clave => $valor) { echo "<li>Nombre: <strong>$clave</strong> => Valor: <strong>$valor</strong></li>"; }
?>
 </ul>
 <h1>Parametros de la request (POST)</h1>
 <ul>
<?php
 foreach ($_POST as $clave => $valor) { echo "<li>Nombre: <strong>$clave</strong> => Valor: <strong>$valor</strong></li>"; }
?>
 </ul>
<body>
</html>

