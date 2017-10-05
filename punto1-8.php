<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

echo 'tabla hecha con el FOR';
echo '<br>';
for ($i = 2; $i<=20; $i=$i+2) {
    echo '', $i;
    echo ',';
}

echo '<br>';
echo '<br>';
echo 'tabla hecha con el WHILE';
$inicio=2;
echo '<br>';
while ($inicio <= 20) {
     echo '', $inicio;
    echo ',';
    $inicio=$inicio+2;
}

echo '<br>';
echo '<br>';
echo 'tabla hecha con el DO/WHILE';
$inicio=2;
echo '<br>';
do {
     echo '', $inicio;
    echo ',';
    $inicio=$inicio+2;
}while ($inicio <=20);


