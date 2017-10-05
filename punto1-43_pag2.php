<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
if (checkdate($_REQUEST['mes'],$_REQUEST['dia'],$_REQUEST['año']))
  echo "La fecha ingresada es correcta";
else
  echo "La fecha no es válida";

