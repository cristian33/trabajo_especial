<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Persona {
  protected $nombre;
  protected $edad;
  public function cargar_Datos_Personale($nom,$ed){
    $this->nombre=$nom;
    $this->edad=$ed;
  }
  public function imprimir(){
    echo 'Nombre:'.$this->nombre.'<br>';
    echo 'Edad:'.$this->edad.'<br>';
  }
}


class Empleado extends Persona{
  protected $sueldo;
  public function cargarsueldo($su){
    $this->sueldo=$su;
  }
  
  
  public function imprimir(){
    parent::imprimir();//sobre
    echo 'Sueldo:'.$this->sueldo.'<br>';
  }
}

$persona1=new Persona();
$persona1->cargar_Datos_Personale('Alberto Diaz',54);
echo 'Datos personales de la persona:<br>';
$persona1->imprimir();
$empleado1=New Empleado();
$empleado1->cargar_Datos_Personale('Juana lora',36);
$empleado1->cargarsueldo(12000);
echo 'Datos personales y sueldo del empleado:<br>';
$empleado1->imprimir();