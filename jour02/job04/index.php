<!-- - Listez les nombres de 1 à 100 en mettant un retour à la ligne entre
chaque nombre (“<br />”) et en remplaçant certains nombres par un
mot selon les conditions suivantes :
- Si le nombre est un multiple de 3, affichez “Fizz”.
- Si le nombre est un multiple de 5, affichez “Buzz”.
- Si le nombre est un multiple de 3 et de 5, affichez “FizzBuzz”. 

$a = 4;
$b = 3;
print($a % $b); -->

<?php 

for ($var = 0; $var <= 100; $var++){

    if(($var%3==0) && ($var%5==0)){
        echo "fizzbuzz". "<br/>";
    }


    elseif ($var%3==0) {
        echo "Fizz" . "<br/>";
    }

    elseif  ($var%5==0){
        echo "buzz" . "<br/>";
}
    else{
        echo $var . "<br/>";
    }
}

// }
// }

// elseif  (!($var%5)) {
// 	echo 'buzz';
// }

// {
//     echo $var . '<br />';
// }
// }


?>