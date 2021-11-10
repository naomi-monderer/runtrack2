<!-- Créez une fonction nommée “calcule” qui prend 3 paramètres : le premier,
“a”, est un nombre, le deuxième, “operation”, est un caractère contenant le
type d’opération (+, -, *, /, %), le troisième, “b”, est un nombre. La fonction
doit retourner le résultat de l’opération. -->
<?php
// on veut savoir (45 * 48=?)


function calcule($a,$operation,$b)
{
    if($operation =="+"){
        return $a + $b;
} 
else if ($operation=="-"){
        return $a - $b;
} 
else if ($operation=="*"){
        return $a * $b;
}
else if ($operation=="/"){
        return $a / $b;
}
else if($operation=="%"){
        return $a % $b;
}

}

echo calcule(34,"+",12);
?>