<?php
$rows = 1;
$columns = 6;

print ("<table border=2 width=400 align=center>");
for ($i=0; $i < $rows; $i++) { 
    echo "<tr>";
    for ($f=0; $f < $columns; $f++) { 
        $random = rand(1,49);
        echo "<td>";
		print $random;
		print ("</td>");
    }
    echo "</tr>";   
}
    echo"</table>"; 
?>