<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Menu {
  private $enlaces=array();
  private $titulos=array();
  public function cargarOpcion($en,$tit)
  {
    $this->enlaces[]=$en;
    $this->titulos[]=$tit;
  }
  private function mostrarHorizontal()
  {
    for($f=0;$f<count($this->enlaces);$f++)
    {
      echo '<a href="'.$this->enlaces[$f].'">'.$this->titulos[$f].'</a>';
      echo "-";
    }
  }
  private function mostrarVertical()
  {
    for($f=0;$f<count($this->enlaces);$f++)
    {
      echo '<a href="'.$this->enlaces[$f].'">'.$this->titulos[$f].'</a>';
      echo "<br>";
    }
  }
  
  public function mostrar($orientacion)
  {
    if (strtolower($orientacion)=="horizontal")
      $this->mostrarHorizontal();
    if (strtolower($orientacion)=="vertical")
      $this->mostrarVertical();
  }
}
echo 'Menú Horizontal';
echo '<br>';
$menu1=new Menu();
$menu1->cargarOpcion('https://estaciondelsol.elsol.com.ar/','Musica Online');
$menu1->cargarOpcion('http://www.diariouno.com.ar/ovacion','Deportes');
$menu1->cargarOpcion('http://www.mdzol.com/','Diario MDZ');
$menu1->mostrar("horizontal");
echo '<br>';
echo 'Menú Vertical';
echo '<br>';
$menu2=new Menu();
$menu2->cargarOpcion('http://svp.mza.infd.edu.ar/sitio/','INSTITUTO SV DE PAUL');
$menu2->cargarOpcion('http://www.uncuyo.edu.ar/','UNC');
$menu2->cargarOpcion('http://www.frm.utn.edu.ar/index.php','UTN');
$menu2->mostrar("vertical");