<?php
/*
Ecrire un scrip qui genere une date 
puis indique si la date est valide ou pas !
 */
$jour=rand(1,31);
$mois=rand(1,12);
$année=rand(1900,3000);
echo("$jour/$mois/$année <br>");
if(($année%4==0 and $année%100!=0) or $année%400==0){
    echo($année." est une année bissextille <br>");
    if(($mois==2 and $jour>28) or (($mois==4 or $mois==6 or $mois==9 or $mois==11) and ($jour>30))){
        echo("la date entrée n'est pas valide!!! <br>");
    }else{
        echo("la date entrée est valide <br>");
    }
}elseif(($mois==4 or $mois==6 or $mois==9 or $mois==11) and ($jour>30)){
    echo("la date entrée n'est pas valide!!! <br>");
}else{
    echo("la date entrée est valide <br>");
}


?>