<?php
// // Créez un tableau contenant les nombres 200, 204, 173, 98, 171, 404, 459.
// Parcourez ce tableau et affichez “X est paire<br />” ou “X est impaire<br
// />”, X prenant tour à tour chacune des valeurs comprises dans ce tableau.

$array= [200,204, 173, 98, 171, 404, 459];
// verifier si le tableau existe.

for($i=0; isset($array[$i]); $i++){
    if($array[$i]% 2 ==0){
        echo $array[$i] . 'pair <br>';
    }
    echo $array[$i]. 'impair <br>';
}


?>