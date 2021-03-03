<?php 
#  rellenamos el array desde [0][0] hasta [0][4]
# la insercion automatica haria que este primero fuera [0][0]

#$a[][]=" ";
# ahora pondremos cero como indice del primer array y dejemos que PHP
# nos vaya insertando automaticamente el segundo

$a[][]="Indice";
$a[0][]="Juvencia";$a[0][]="Mosconia";$a[0][]="Canicas";$a[0][]="Condal";$a[0][]="Piloñesa";

$a[][]="Juvencia";
$a[1][]=" ";$a[1][]="3-2";$a[1][]="3-2";$a[1][]="5-3";$a[1][]="7-1";$a[1][]="0-2";

#ahora desde [1][0] hasta [1][4]
#este primero lo dejamos como automático en ambos indices
# de esta forma el primero tomará valor uno (siguiente al anterior)
# de forma automática
$a[][]="Mosconia";
# repetimos el proceso anterior
$a[2][]="0-11";$a[2][]=" ";$a[2][]="2-1";$a[2][]="1-0";$a[2][]="1-2";
# y repetimos de nuevo, ahora crearia 2 como primer indice
$a[][]="Canicas";
#insertariamos los restantes valores de indice 2
$a[3][]="0-0";$a[3][]="1-3";$a[3][]=" ";$a[3][]="1-4";$a[3][]="2-0";
# nuevo incremento del primer indice
$a[][]="Condal";
# rellenamos 
$a[4][]="1-0";$a[4][]="6-3";$a[4][]="14-3 ";$a[4][]=" ";$a[4][]="1-0";
# nuevo y ultimo incremento de primer indice
$a[][]="Piloñesa";
# rellenamos de nuevo
$a[5][]="1-1";$a[5][]="2-3";$a[5][]="0-1 ";$a[5][]="1-1";$a[5][]="";



print ("<TABLE BORDER=2>");
# ahora dos bucles anidados (rojo uno, magenta el otro)
# para rellenar las celdas de cada fila (el magenta)
# y para insertar las etiquetas <TR> utilizaremos el rojo

print("<td colspan='6'>Resultados de la liguilla</td>");

for ($i = 0; $i < 6; $i++){
	print("<tr>");
	 for($j = 0; $j < 6; $j++ ) {
			print("<td>".$a[$i][$j]."</td>");
	 }
}

#ponemos la etiqueta de cierre de la tabla

print("</table>");