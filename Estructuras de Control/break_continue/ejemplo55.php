<?php 
$i = 0;
do {
 
      # condicion de no multiplo de 11. fijate en la sintaxis alternativa
	# observa que aquí distinto lo hemos escrito <>
   
    if ($i % 11 <>0 ){
            continue ;
    }

    echo "El valo de i es: ",$i,"<br>";

}while ($i++ < 100)
?>