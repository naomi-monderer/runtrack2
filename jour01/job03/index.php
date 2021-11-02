<?php
    $bool = true;
    $int = 8;
    $str = "cyril grosse catin";
    $float = 10.458;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>job03</title>
</head>

<body>
    <table>
        <thead>
            <tr>
                <th>type</th>
                <th>nom</th>
                <th>valeur</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>booléen</td>
                <td>$bool</td>
                <td> <?php echo $bool; ?> </td>
                
            </tr> 
            <tr>
                <td>integer</td>
                <td>$int</td>
                <td><?php echo $int; ?></td>
                
            </tr>
            <tr>
                <td>string</td>
                <td>$str</td>
                <td><?php echo $str; ?></td>
                
            </tr>
            <tr>
                <td>floating</td>
                <td>$float</td>
                <td> <?php echo $float; ?></td>
                
            </tr>

        </tbody>
    </table>
    
</body>
</html>
