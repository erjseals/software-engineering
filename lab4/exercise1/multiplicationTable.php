<?php
    echo "<table width = 100%>";
    for($i = 1 ; $i < 101 ; $i++) 
    {
        echo "<tr>";
        for($j=1 ; $j < 101 ; $j++)
        {
            $thisCell = $i * $j;
            echo "<td>"; 
            echo "$thisCell";
            echo "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
    error_reporting(E_ALL);
    ini_set("display_errors" , 1 );
?>
