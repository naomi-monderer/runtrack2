<?php
for ($nombre = 2;$nombre <= 1000; $nombre++){
    for ($diviseur = 1;$diviseur <= $nombre){
    $compteur = 0;
    }
    if($nombre%$diviseur==0){
        $compteur++;}
    }
    if ($compteur==2){
        echo $nombre;
    }
  
?>


