<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Calculadora {
  public static function sumar($val1,$val2)
  {
    return $val1+$val2;
  }
  public static function restar($val1,$val2)
  {
    return $val1-$val2;
  }
  public static function multiplicar($val1,$val2)
  {
    return $val1*$val2;
  }
  public static function dividir($val1,$val2)
  {
    return $val1/$val2;
  }
}

$x1=34;
$x2=2;
echo "La suma de $x1 y $x2 es:".Calculadora::sumar($x1,$x2);
echo '<br>';
echo "La dresta de $x1 y $x2 es:".Calculadora::restar($x1,$x2);
echo '<br>';
echo "La multiplicacion de $x1 y $x2 es:".Calculadora::multiplicar($x1,$x2);
echo '<br>';
echo "La division de $x1 y $x2 es:".Calculadora::dividir($x1,$x2);