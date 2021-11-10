<!-- Créez un cookie nommée “nbvisites”. A chaque fois que la page est visitée,
ajoutez 1. Afficher le contenu du cookie.
Ajoutez un bouton nommé “reset” qui permet de réinitialiser ce compteur. -->
<?php
if(!isset($_COOKIE['nbvisites']))
{
    setcookie("nbvisites", 1, time()+3600);//expire ds 1 heure
}
elseif(isset($_GET["reset"])){
    // setcookie("nbvisites", "", time()-3600);
    echo 'coucou';
    setcookie("nbvisites", 1, time()+3600);//expire ds 1 heure
}
else
{
    setcookie("nbvisites", $_COOKIE['nbvisites'] + 1, time()+3600);//expire ds 1 heure
}

// $_COOKIE['nbvisites'];
// var_dump($_COOKIE);


var_dump($_COOKIE);
// if(isset(setcookie($value))){
    
// }




?>

<form action="index.php" method="GET">
    <label for="prenom">First name:</label>
    <input type="text" id="prenom" name="prenom"><br/>
    <input type="submit" name="reset" value="reset" id="reset">
</form>