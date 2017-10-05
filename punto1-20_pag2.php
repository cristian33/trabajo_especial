<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$conexion=mysqli_connect("localhost","root","","base2") or
    die("Problemas con la conexión");
mysqli_query($conexion,"insert into curso(nombrecurso) values ('$_REQUEST[nombrecurso]')") or
    die("Problemas en el select".mysqli_error($conexion));

  mysqli_close($conexion);

  echo "El curso fue dado de alta.";
?>