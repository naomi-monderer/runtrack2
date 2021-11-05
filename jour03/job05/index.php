<!-- Créez une string nommée str et affectez y “On n est pas le meilleur quand
on le croit mais quand on le sait”. Créez un dictionnaire nommé dic qui a
comme keys “consonnes” et “voyelles”. Créez un algorithme qui parcourt,
compte le nombre d'occurrences de consonnes et de voyelles de
str. Affichez ces résultats dans un tableau html qui a comme thead
“Voyelles” et “Consonnes”. -->

<?php
$str="On n est pas le meilleur quand on le croit mais quand on le sait";
$compteur=0;
$compteur2=0;

$dic= array (
"voyelles"=> array ("a","e","i","o","u","y","O"),
"consonnes"=> array ("b", "c", "d", "f", "g", "h", "j", "k", "l", "m", "n", "p", "q", "r", "s", "t", "v", "w", "x", "z")
);

for($i=0; isset($str[$i]); $i++){
    for($j=0;isset($dic["voyelles"][$j]); $j++){
        if($str[$i]==$dic["voyelles"][$j]){
            $compteur++;}
        }


        
    for ($k=0;isset($dic["consonnes"][$k]);$k++){
        if($str[$i]==$dic["consonnes"][$k]){
            $compteur2++;}
        }     
}

           
?>

<table>
    <thead>
    </thead>
        <tr>voyelles</tr>
        <tr>consonnes</tr>
    <tbody>
        <td><?php echo $compteur ?></td>
        <td><?php echo $compteur2?></td>
    </tbody>

</table>