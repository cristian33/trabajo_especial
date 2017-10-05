<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$conexion=mysqli_connect("localhost","root","","base2") or
die("Problemas con la conexión");

$registros=mysqli_query($conexion,"select codigo,nombrecurso from curso") or
 die("Problemas en el select:".mysqli_error($conexion));

while ($reg=mysqli_fetch_array($registros)){
  echo "Codigo:".$reg['codigo']." <br>";
  echo "Nombre del curso:".$reg['nombrecurso']."<br>";

}

mysqli_close($conexion);
?>
