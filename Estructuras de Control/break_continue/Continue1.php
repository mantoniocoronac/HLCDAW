<?php
$j=0;
while (++$j <5) {
for($i=1;$i<5;$i++){
if ($i==3){
continue 2;
}
echo "El valor de j es: ",$j, " y el de i es: ",$i,"<br>";
}
}
?>