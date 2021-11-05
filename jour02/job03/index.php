<?php
for ($val = 0; $val <= 100; $val++)
{
    if (($val >= 0) && ($val <= 20))
    {
        echo '<i>'. $val .'</i>';
        echo "<br/>";
    }   
    elseif ($val == 42)
    {
        echo "La Plateforme_";
        echo "<br/>";
    }
    elseif (($val >= 25) && ($val <= 50))
    {
        echo '<u>' . $val . '</u>';
        echo "<br/>";
    }
    else 
    {      
        echo $val .'<br/>';
    }
    

} 



?>