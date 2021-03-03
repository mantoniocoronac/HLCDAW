<?php
# utilicemos whiles anidados para construir una tabla de 
$filas=5; $columnas=3;
# insertemos la etiqueta de apertura de la tabla
print ("<table border=2 width=400 align=center>");
# un primer while rojo utilizando como condici�n que filas sea mayor que cero
# en este caso, la variable tendr� que disminuyendo su valor con $filas--
# para escribir las etiquetas  y  
# y el modificador de la variable filas
# y un segundo while (magenta) para insertar las etiquetas correspondientes
# a las celdas de cada fila

do{
    echo "<tr>";
    $filas--;
	do{ 
		echo "<td>";
		print "fila: ".$filas." columna: ".$columnas;
		print ("</td>");
		$columnas--;
	}while($columnas>0);

    $columnas=3;
    echo "</TR>";
}while($filas>0);

print "</table>";
?>