<!-- Créez une variable de session nommée “nbvisites”. A chaque fois que la
page est visitée, ajoutez 1. Afficher le contenu de cette variable.
Ajoutez un bouton nommé “reset” qui permet de réinitialiser ce compteur. -->
<?php

// session_start();
// if(isset($_POST["reset"])== true){
//     session_destroy();
//     echo "0";
// }
// else
// {
    
// if(isset($_SESSION["nbvisites"])){
//     $_SESSION["nbvisites"]++;

// }
// else
// {
//     $_SESSION["nbvisites"]=0;
// }
// echo $_SESSION["nbvisites"];
// }


// // ?>

<!--  <form action="index.php" method="POST">

<input type="submit" name="reset" id="reset" value="reset" >
 </form> -->

 <!-- Créez une variable de session nommée “nbvisites”. A chaque fois que la
page est visitée, ajoutez 1. Afficher le contenu de cette variable.
Ajoutez un bouton nommé “reset” qui permet de réinitialiser ce compteur. -->

<?php
session_start();

if(!isset($_SESSION['nbvisites']))
{
    $_SESSION['nbvisites'] = 0;
}
elseif(isset($_GET["reset"]))
{
    session_destroy();
}
else
{
    $_SESSION["nbvisites"]++;
    echo $_SESSION["nbvisites"];
}


// elseif(isset($_SESSION["nbvisites"]))
// {
//     $_SESSION["nbvisites"]++;
// }
// else
// {
//     $_SESSION["nbvisites"] = 0;
// }
// echo $_SESSION["nbvisites"];


?>

<form action="index.php" method="get">
    <input type="submit" name="reset" id="reset" value="reset">

</form>
