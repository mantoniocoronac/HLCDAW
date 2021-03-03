<?php
    # determinando el tipo de variable
    $a1=347;
    echo gettype($a1),"<br>";
    $a2=2147483647;
    echo gettype($a2),"<br>";
    $a3=-2147483647;
    echo gettype($a3),"<br>";
    $a4=23.7678;
    echo gettype($a4),"<br>";
    $a6="347";
    echo gettype($a6),"<br>";
    $a8="Solo literal";
    echo gettype($a8),"<br>";
    $a9="12.3 Literal con número";
    echo gettype($a9),"<br>";
    $a10="";
    echo gettype($a10),"<br>";
    echo "<br>";

    #forzando los tipos
    echo "Tipos forzados","<br>";
    echo gettype((real)$a1),"<br>";
    echo gettype((int)$a4),"<br>";
    echo gettype((double)$a6),"<br>";
    echo gettype((int)$a9),"<br>";
  
?> 