<?php
$rows = 5;
$columns = 7;
$cont = 1;

print ("<table border=2 width=400 align=center>");
for ($i=0; $i < $rows; $i++) { 
    echo "<tr>";
    for ($f=0; $f < $columns; $f++) { 
        echo "<td>";
		print $cont;
		print ("</td>");
        $cont++;  
    }
    echo "</tr>"; 
    
}
    echo"</table>"; 
?>