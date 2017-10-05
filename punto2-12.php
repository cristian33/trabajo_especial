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
  public function cargar_Sueldo($su) {
  $this->sueldo=$su;
  }
  
  
  public function imprimir_Sueldo(){
  echo 'Su sueldo es:'.$this->sueldo.'<br>';
  }
}

$empleado1=New Empleado();
$empleado1->edad=45;
$empleado1->nombre="Juan";



$empleado1->imprimir_Dat_Personales();