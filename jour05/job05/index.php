

<?php
$phrase="Créez une fonction nommée occurrences. Cette fonction prend en
paramètre une chaîne de caractères nommée";
$lettre="e";
// function occurrences2($str,$char){
//     $compteur=0;// dès que je dois compter des occcurrences ou autres, je créais un compteur
//     for($i=0;isset($str[$i]);$i++){
//         // // mon index est égale à 0, ma fonction isset me permet de définir si une variable existe et 
//         // si elle existe ma condition d'arrêt sera ma dernière position de ma variable string. 
//         // à chaque nouveau tour de ma boucle la position augmente de 1.
//         if($str[$i]==$char)
//         //si la position de ma variable est égale à ma variable $char.

//         {
//             $compteur++;// le compteur prend un tour et continue de chercher les occurences.
//         }
//     }
//     return($compteur);
//     // ou bien: return("Dans la phrase '$str', il y a $compteur occurence de la lettre '$char'");
// }
// //echo occurrences($phrase,$lettre);
// $result = occurrences2($phrase,$lettre);
// echo $result;


// Créez une fonction nommée “occurrences”. Cette fonction prend en
// paramètre une chaîne de caractères nommée “str” et un caractère nommé
// “char”. Elle doit retourner le nombre d'occurrences du caractère “char” dans
// “str”. 

$phrase="pire qu'un pit-bull";
$lettre="u";


function occurrences($str,$char){
    $compteur=0; ///////////
    for($i=0; isset($str[$i]);$i++){
        if($str[$i]==$char){

            $compteur++;

        }

   }
return($compteur);

}

//  return($result);
$result = occurrences($phrase,$lettre);
//echo $result;
echo $result;


















?>