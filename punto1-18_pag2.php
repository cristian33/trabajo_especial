<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function verificarContr($cont1,$cont2 ) {
    if ($cont1!=$cont2){
        echo "Las contraseñas ingresadas no coinciden";
    }
    verificarContr($_REQUEST['contraseña1'],$_REQUEST[' contraseña2']);
}