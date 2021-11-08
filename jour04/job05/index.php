<?php
// Faire un formulaire de connexion de type POST (se demander, pourquoi
// pas GET ?) ayant deux input nommés username et password.
// Après validation du formulaire, si le username est “John” et le password
// est “Rambo” afficher : “C’est pas ma guerre” sinon afficher “Votre pire
// cauchemar”.

$str="C’est pas ma guerre";
$str2="Votre pire cauchemar";
var_dump($_POST);
if(isset($_POST["username"]) && isset($_POST["password"]))
{
    if ( $_POST["username"]== "John" && $_POST["password"]=="Rambo")
    {
        echo $str ;
    }
    else 
    {
        echo $str2;
    }
}
?>

<form action="" method="POST">
<label for="username">username:</label>
<input type="text" id="username" name="username"><br/>
<label for="password">password:</label>
<input type="password" id="password" name="password"><br/>
 
<input type="submit" value="Envoyez">
</form>