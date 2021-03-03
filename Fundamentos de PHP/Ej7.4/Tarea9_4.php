<?php
    $a=23;
    $b="pepe";
    //probando el operador ++;
        print_r("Probando el operador ++");
        echo ++$a;
        echo "<br>";
        echo ++$a*2;
        echo "<br>";            //El operador ++ incrementa en 1 la variable que quieras.
        echo ++$b;
        echo "<br>";
        echo ++$b*2;            //Aqui hay fallo porque no se puede multiplicar una cadena
        echo "<br>";
    //probando el operador --;
        print_r("Probando el operador --");
        echo "<br>";
        echo --$a*2;
        $b="pepe";              //El operador -- resta en 1 la variable que quieras
        echo "<br>";
        $b="pepe";
        echo "<br>";
    //probando el operador +=n;
        print_r("Probando el operador +=n");
        echo "<br>";
        echo $a+=5;
        echo "<br>";
        echo $a;
        echo "<br>";
        echo 2*$a+=5;
        echo "<br>";
        echo 2*$a;
        echo "<br>";            //El operador +=n incrementa en n la variable que quieras
        echo $b+=5;
        echo "<br>";
        echo $b;
        echo "<br>";
        echo 2*$b+=5;
        echo "<br>";            //En estos 2 tambien falla porque no puedes multiplicar la cadena
        echo 2*$b;
        echo "<br>";
    //probando el operador –=n;
        print_r("Probando el operador -=n");
        echo "<br>";
        echo $a-=5;
        echo "<br>";
        echo $a;
        echo "<br>";
        echo 2*$a-=5;
        echo "<br>";   
        echo 2*$a;              //El operador -=n resta en n la variable que quieras
        echo "<br>";
        echo $b-=5;
        echo "<br>";
        echo $b;
        echo "<br>";
        echo 2*$b-=5;
        echo "<br>";
        echo 2*$b;
        echo "<br>";
    //probando operadores de post-incremento;
        print_r("Probando el operadores de post-incremento");
        echo "<br>";
        echo $a++;
        echo "<br>";
        echo $a;
        echo "<br>";
        echo 2*$a++;
        echo "<br>";
        echo 2*$a;          //Aqui se usa el ++ y el --
        echo "<br>";
        echo $a--;
        echo "<br>";
        echo $a;
        echo "<br>";
        echo 2*$a--;
        echo "<br>";
        echo 2*$a;
?>