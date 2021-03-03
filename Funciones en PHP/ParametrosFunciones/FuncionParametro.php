<?php
echo "<pre>";
function HolaMundo($var2)
{
    echo $var2;
}

echo HolaMundo("Hola Alex") . "\n";

/*

.... más lineas de código

*/

echo HolaMundo("Hola Luisa");

/*

.... más lineas de código

*/

//No ha pasado nada por parametros, si le pasa algo funcionara
echo HolaMundo();
?>