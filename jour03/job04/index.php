<!-- Créez une string nommée str et affectez y “Dans l'espace, personne ne
vous entend crier”. Créez un algorithme qui parcourt, compte et affiche le
nombre de caractères présents dans cette chaîne. -->

<?php

$str="Dans l'espace, personne ne vous entend crier";
$compteur=0;
for($i=0; isset($str[$i]);$i++){
    
    $compteur++;
}
echo $compteur;


?>