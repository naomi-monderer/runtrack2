<!-- Créez une fonction nommée “gethello”. Cette fonction doit retourner “Hello
LaPlateforme!”. Appelez cette fonction dans votre page en récupérant sa
valeur de retour et affichez la. -->
<?php

$str="Hello LaPlateforme";
function gethello($str){
    echo $str;
    return "Hello LaPlateforme";
}

gethello($str);

//var_dump(gethello($str));
?>