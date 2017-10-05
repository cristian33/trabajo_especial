<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$conexion=mysqli_connect("localhost","root","","base2") or
    die("Problemas con la conexión");

$registros=mysqli_query($conexion,"select codigo,nombre
                        from alumnos where nombre='$_REQUEST[nombre]'") or
  die("Problemas en el select:".mysqli_error($conexion));

$cant=0;
while ($reg=mysqli_fetch_array($registros))
{
  echo "Nombre:".$reg['nombre']."<br>";
  $cant++;
 
}

if ($cant==0)
{
  echo "No existen alumnos con dicho nombre";
}

mysqli_close($conexion);
?>