<?php

$A = 33;
$B = 40;
$C = "33";
$D = 33;
$E = 99;

if($A==$B){//33 es igual a 40
    echo("Cierto");
}else{
    echo("Falso");
}
echo("<br>");

if($A==$D){//33 es igual a 33
    echo("Cierto");
}else{
    echo("Falso");
}
echo("<br>");

if($A===$C){//33 numerico es igual que 33 string
    echo("Cierto");
}else{
    echo("Falso");
}
echo("<br>");

if($A===$D){//33 numerico es igual que 33 numerico
    echo("Cierto");
}else{
    echo("Falso");
}
echo("<br>");

if($A!=$B){//33 no es igual a 40
    echo("Cierto");
}else{
    echo("Falso");
}
echo("<br>");

if($A!=$D){//33 no es igual a 33
    echo("Cierto");
}else{
    echo("Falso");
}
echo("<br>");
    
if($A<$B){//33 es menor que 40
    echo("Cierto");
}else{
    echo("Falso");
}
echo("<br>");

if($A<$E){//33 es menor que 45
    echo("Falso");
}else{
    echo("Cierto");
}
echo("<br>");

if($A<=$E){//33 es menor o igual que 40
    echo("Cierto");
}else{
    echo("Falso");
}
echo("<br>");

if($A<=$E){//33 es menor o igual que 45
    echo("Falso");
}else{
    echo("Cierto");
}
echo("<br>");

if($A>$B){//33 es mayor que 40
    echo("Cierto");
}else{
    echo("Falso");
}
echo("<br>");

if($E>$A){//99 es mayor que 33
    echo("Cierto");
}else{
    echo("Falso");
}
echo("<br>");

if($A>=$B){//33 es mayor o igual que 40
    echo("Cierto");
}else{
    echo("Falso");
}
echo("<br>");

if($E>=$A){//99 es mayor o igual que 33
    echo("Cierto");
}else{
    echo("Falso");
}
echo("<br>");
?>