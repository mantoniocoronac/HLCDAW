<?php
/* Definiremos la constante EurPta y le asignamos el valor 166.386  */

define("EurPta",166.386);

/* Definiremos la constante PtaEur y le asignamos el valor 1/166.386 
    en este caso el valor de la constante es el resultado
	de la operación aritmética, dividir UNO entre 166.386*/

define("PtaEur",1/166.386);

/* Definimos la constante Cadenas y le asignamos el valor
                    Esta constante es una cadena que empieza
                    por caracteres numericos    */

define("Cadena","12Esta constante es una cadena");

// comprobamos los valores
/* observa la nueva forma en la que utilizamos ahora echo
   enlazando varias cadenas separadas con las sintaxis
   punto y/o coma dependiendo de que se trate de echo o de print */
 
echo "Valor de la constante EurPta: ", EurPta, "<BR>";
echo "Valor de la constante PtaEur: ". PtaEur . "<BR>";
print "Valor de la constante Cadena: " . Cadena . "<BR>";
print ("Valor de la constante Cadena x EurPta: " . Cadena*EurPta ."<br>");

echo "Con echo los números no necesitan ir entre comillas: " ,3,"<br>";
print "En el caso de print si son necesarias: " . "7" . "<br>";
print ("incluso entre paréntesis necesitan las comillas: "."45"."<br>");
print "Solo hay una excepción en el caso de print. ";
print "Si los numeros van en un print independiente no necesitan comillas ";
print 23;

# pondremos la etiqueta de cierre del script y escribiremos
# una línea de código HTMAL
?>

<br>Ahora veremos los mismos resultados usando la function prueba<br><br>

<?php

# estamos dentro de un nuevo script abierto por el anterior <?

/* aunque aun no la hemos esudiado, escribiremos una función
    a la que (tenemos que ponerle siempre un nombre) 
	vamos a llamar prueba()
  Lo señalado en rojo es la forma de indicar el comienzo
    y el final de la funcion
  Lo marcado en azul son las instrucciones 
         que deben ejecutarse cuando la función prueba()
         cuando sea ejecutada */

 function prueba(){
           echo "Valor de la constante EurPta: ". EurPta . "<BR>";
           print "Valor de la constante PtaEur: ". PtaEur. "<BR>";
           echo "Valor de la constante Cadena: ", Cadena , "<BR>";
           print "(Valor de la constante Cadena x EurPta: " . 
			                      Cadena*EurPta . "<br>";
   }

# las funciones solo se ejecutan cuando son invocadas

/* la función anterior no se ejecutaría hasta que escribiéramos
   una línea como esta de abajo en la que escribimos 
   unicamente el nombre prueba()
   tal como hacemos aquí abajo */
?>

<?php
prueba();
?>

