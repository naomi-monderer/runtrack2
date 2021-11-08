<?php 
// Développez un algorithme qui affiche le nombre d’arguments POST.
// Tips : Pour tester, créez un formulaire html de type POST avec différents
// input.

$compteur=0;
foreach($_POST as $key => $value){
    echo $key . " " . $value;
    echo $compteur++;
    echo "<br/>Il y a $compteur argument POST";

}
var_dump($_POST);
?>


<form action="" method="POST">
<label for="prenom">First name:</label>
<input type="text" id="prenom" name="prenom"><br/>
<label for="nom">Last Name:</label>
<input type="text" id="nom" name="nom"><br/>
<label for="prez">Présentation:</label>
<textarea id="prez" name="présentation"></textarea><br/> 
<input type="submit" value="Envoyez">
</form>