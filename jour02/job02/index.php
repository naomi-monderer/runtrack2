
<?php
/*
Afficher tous les nombres de 0 à 1337 compris SAUF 26, 37, 88,
1111 et 3233 en mettant un retour à la ligne entre chaque nombre
(“<br />”).
*/
// for ($i = 0; $i <= 1337; $i++) {
    
//     switch($i)
//     {
//         case 26:
//             break;
//         case 37:
//             break;
//         case 88:
//             break;
//         case 1111:
//             break;
//         default:
//         echo $i."<br />"; 
//     }
    
 

//   } 
  
  for ($i = 0; $i <= 1337; $i++) 
  {
    // && = ET || = ou 
    if ($i==26 || $i == 37 || $i ==88 || $i== 1111)
    {
        echo '<br />';
    }
    else {
        
        echo $i .'<br/>' ;
    }
    
  } 
?>