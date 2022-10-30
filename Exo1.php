<?php
/*
Ecrire un scrip qui genere 3 nombres entrent -10 et 10
puis range ces nombre dans l'ordre croissant
 */
$x=rand(-10,10);
$y=rand(-10,10);
$z=rand(-10,10);
echo("x=$x, y=$y, z=$z, <br>");
if($x<$y and $y<$z){
    $min=$x;
    $mil=$y;
    $max=$z;
}elseif($y<$x and $x<$z){
    $min=$y;
    $mil=$x;
    $max=$z;
}elseif($y<$z and $z<$x){
    $min=$y;
    $mil=$z;
    $max=$x;
}elseif($x<$z and $z<$y){
    $min=$x;
    $mil=$z;
    $max=$y;
}elseif($z<$x and $x<$y){
    $min=$z;
    $mil=$x;
    $max=$y;
}elseif($z<$y and $x<$z){
    $min=$z;
    $mil=$y;
    $max=$x;
}
echo("le rangement dans l'ordre croissant donne: <br>");
echo("($min), ($mil), ($max), <br>")

?>