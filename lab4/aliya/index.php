<?php
$size = 15;

echo "<table style='border-collapse: collapse; 
                     border-top: 4px solid yellow; 
                     border-left: 4px solid yellow;'>";

for ($row = 0; $row < $size; $row++) {
    echo "<tr>";
    
    for ($col = 0; $col < $size; $col++) {
        
        $color = (($row + $col) % 2 == 0) ? "white" : "black";
        
        echo "<td style='
            width:40px; 
            height:40px; 
            background-color:$color;
            border:1px solid black;
        '></td>";
    }
    
    echo "</tr>";
}

echo "</table>";
?>