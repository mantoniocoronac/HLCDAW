<?php
//El break sirve para romper la iteracion del bucle en el que se encuentre.  
$i = 0;
do {
 
      # condicion de no multiplo de 11. fijate en la sintaxis alternativa
	# observa que aqu� distinto lo hemos escrito <>
   
    if ($i % 11 <>0 ){
            break ;
    }

    echo "El valor de i es: ",$i,"<br>";

}while ($i++ < 100)
?>