<!-- 
    Créez une string nommée str et affectez y “I'm sorry Dave I'm afraid I can't
do that”. Créez un algorithme qui parcourt cette chaîne et affiche
uniquement les voyelles.
 -->

<?php

$str="I'm sorry Dave I'm afraid I can't do that";
$array=["a","e","i","o","u","y"];

for($i=0;isset($str[$i]);$i++){
    for($j=0;isset($array[$j]);$j++){
        
       if($str[$i]==$array[$j])
       echo $str[$i];

}

    //echo $i;
}

    


?>