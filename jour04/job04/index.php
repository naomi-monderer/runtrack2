<?php
// Développer un algorithme qui affiche dans un tableau HTML l’ensemble
// des arguments POST et les valeurs associées. Il doit y avoir deux colonnes
// : argument et valeur.
// Tips : Pour tester, créez un formulaire html de type POST avec différents
// input.


//var_dump($_POST);
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

<table>
    <thead>
        <th>argument</th>
        <th>valeur</th>
    </thead>
    <tbody>
       
<?php foreach($_POST as $key => $value){
  

  echo "<tr>
            <td>". $key . "</td>
            <td>". $value . "</td>
        </tr>";
}
?>
    </tbody>
</table>