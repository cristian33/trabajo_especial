<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Persona {
  protected $nombre;
  protected $edad;
  public function constructor($nom,$ed)
  {
    $this->nombre=$nomb;
    $this->edad=$eda;
  }
  public function imprimir_Datos_Personale()
  {
    echo 'Nombre:'.$this->nombre.'<br>';
    echo 'Edad:'.$this->edad.'<br>';
  }
}

class Empleado extends Persona{
  protected $sueldo;
  public function constructor($nomb,$eda,$sue)//constructor de la primera class
  {
    parent::__construct($nomb,$eda);
    $this->sueldo=$sue;
  }
  public function imprimirsueldo()
  {
    echo 'Sueldo:'.$this->sueldo.'<br>';
  }
}

$persona1=new Persona('Rodrigo Perez',55);
echo 'Datos personales de la persona:<br>';
$persona1->imprimirDatosPersonales();
$empleado1=New Empleado('Maria Anez',45,6000);
echo 'Datos personales y sueldo del empleado:<br>';
$empleado1->imprimir_Datos_Personale();
$empleado1->imprimirsueldo();
