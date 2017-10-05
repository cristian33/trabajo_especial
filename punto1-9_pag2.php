<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
     
if ($_REQUEST['edad']>=18)
    
  {
    
    echo$_REQUEST['nombre']," ", "es mayor de edad"  ;
  }
  else
  {
    echo$_REQUEST['nombre']," ", "no es mayor de edad";
  }