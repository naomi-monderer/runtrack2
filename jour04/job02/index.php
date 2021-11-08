<?php
// Développer un algorithme qui affiche dans un tableau HTML l’ensemble
// des arguments GET et les valeurs associées. Il doit y avoir deux colonnes :
// argument et valeur.
// Tips : Pour tester, créez un formulaire html de type GET avec différents
// input.
$bbbbb = "<thead>
            <th> argument </th>
            <th> valeur </th>
        </thead>";
foreach($_GET as $key => $value){
    $bbbbb = $bbbbb ."<tr>
            <td>$key</td>
            <td>$value</td>
        </tr>";
}


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


<table>
    <?php echo $bbbbb; ?>
</table>