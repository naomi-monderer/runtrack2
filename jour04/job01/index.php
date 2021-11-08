<!-- Développez un algorithme qui affiche le nombre d’arguments GET.
Tips : Pour tester, créez un formulaire html de type GET avec différents
input. -->

<?php

$compteur=0;
var_dump($_GET);
foreach($_GET as $key => $value){
   echo $key .' '. $value;
   echo $compteur++;

}
echo "<br/>Il y a $compteur argument GET";

?>
<form action="" method="GET">
<label for="prenom">First name:</label>
<input type="text" id="prenom" name="prenom"><br/>
<label for="nom">Last Name:</label>
<input type="text" id="nom" name="nom"><br/>
<label for="prez">Présentation:</label>
<textarea id="prez" name="présentation"></textarea><br/> 


<input type="submit" value="Envoyez">
</form>