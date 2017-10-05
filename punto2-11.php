<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Persona {
  protected $nombre;
  protected $edad;
  public function cargar_Datos_Personale($nomb,$eda){
    $this->nombre=$nomb;
    $this->edad=$eda;
  }
  
  
  public function imprimir_Dat_Personales(){
    echo 'Nombre:'.$this->nombre.'<br>';
    echo 'Edad:'.$this->edad.'<br>';
  }
}

class Empleado extends Persona{
  protected $sueldo;
  public function cargarSueldo($su)
  {
    $this->sueldo=$su;
  }
  public function imprimirSueldo()
  {
    echo 'Sueldo:'.$this->sueldo.'<br>';
  }
}

$persona1=new Persona();
$persona1->cargar_Datos_Personale('Pedro Rojelii',33);
echo 'Datos personales de la persona:<br>';
$persona1->imprimir_Dat_Personales();
$empleado1=New Empleado();
$empleado1->cargar_Datos_Personale('Maria Gonzalez',23);
$empleado1->cargarSueldo(10.000);
echo 'Datos personales y sueldo del empleado:<br>';
$empleado1->imprimir_Dat_Personales();
$empleado1->imprimirSueldo();
