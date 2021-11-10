<!-- Créez une fonction nommée “leetspeak”. Cette fonction prend en
paramètre une chaîne de caractères nommée “str”. Elle doit retourner la
chaine de caractères “str” convertie en leet speak. Cela signifie qu’elle doit
la modifier de sorte à ce que : les “A” deviennent des “4”, les “B” des “8”,
les “E” des “3”, les “G” des “6”, les “L” des “1”, les “S” des “5” et les “T” des
“7”. Cela est valable que l’on crie ou non (majuscules et minuscules). -->
<?php
$str="ela est valable que l’on crie ou non (majuscules et minuscules)";

function leetspook($str){
    $new_str = "";
    for($i=0;isset($str[$i]);$i++){
        if($str[$i]== "A"|| $str[$i]== "a"){
            $new_str = $new_str. 4;
        }
        elseif( $str[$i]=="B"|| $str[$i]=="b" ){
            $new_str = $new_str. 8;
        }
        elseif($str[$i]=="E"|| $str[$i]=="e" ){
            $new_str = $new_str. 3;
        }
        elseif($str[$i]=="G"|| $str[$i]=="g" ){
            $new_str = $new_str. 6;
        }
        elseif($str[$i]=="L"|| $str[$i]=="l"){
            $new_str = $new_str. 1;
        }
        elseif($str[$i]=="S"|| $str[$i]=="s" ){
            $new_str = $new_str. 5;
        }
        elseif($str[$i]=="T"|| $str[$i]=="t" ){
            $new_str = $new_str. 7;
        }
        else{
            $new_str = $new_str. $str[$i];
        }
    }
    return $new_str;
}
echo leetspook($str);
// truc cool
echo "<br/>";
$str="la vie est une chienne";

function leetspeak($str){
    for($i=0;isset($str[$i]);$i++){
        if($str[$i]== "A"|| $str[$i]== "a"){
            echo 4;
        }
        elseif( $str[$i]=="B"|| $str[$i]=="b" ){
            echo 8;
        }
        elseif($str[$i]=="E"|| $str[$i]=="e" ){
            echo 3;
        }
        elseif($str[$i]=="G"|| $str[$i]=="g" ){
            echo 6;
        }
        elseif($str[$i]=="L"|| $str[$i]=="l"){
            echo 1;
        }
        elseif($str[$i]=="S"|| $str[$i]=="s" ){
            echo 5;
        }
        elseif($str[$i]=="T"|| $str[$i]=="t" ){
            echo 7;
        }
        else{
            echo $str[$i];
        }
    }

}
echo leetspook($str);
?>