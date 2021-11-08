<?php
// Créez une chaîne de caractères str qui contient “Les choses que l'on
// possede finissent par nous posseder.”. Créez un algorithme qui parcourt et
// écrit cette chaine à l’envers.


$str="Les choses que l'on possede finissent par nous posseder.";
$compteur=-1;
var_dump($str);
for($i=0;isset($str[$i]);$i++){

     $compteur++;
}


for($i=$compteur;$i >= 0;$i--){
    
    echo $str[$i];
    
}






?>
