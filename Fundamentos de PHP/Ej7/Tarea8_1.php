<?php
    # determinando el tipo de variable
    $a1=347;
    $a2=2147483647;
    $a3=-2147483647;
    $a4=23.7678;
    $a6="347";
    $a8="Solo literal";
    $a9="12.3 Literal con número";
    $a10="";
    
    #forzando los tipos
    echo ((real)$a1),"<br>";
    echo ((double)$a2),"<br>";
    echo ((float)$a3),"<br>";
    echo ((integer)$a4),"<br>";
    echo ((int)$a6),"<br>";
    echo ((int)$a8),"<br>";
    echo ((double)$a9),"<br>";
    echo ((int)$a10),"<br>";
