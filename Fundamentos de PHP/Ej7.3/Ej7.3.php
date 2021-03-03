<?php

$langosta=51;
$angula=71;
$caviar=501;

print "La langosta cuesta = " . $langosta . " €<br>";
print "La angula cuesta = " . $angula . " €<br>";
print "El caviar cuesta = " . $caviar . " €<br>";


if($langosta>50 AND $angula>70) {

		print "VERDADERO";
		
	}else if($langosta>50 AND $caviar>500){

        print "VERDADERO";	
	
		}else if ($angula>70 AND $caviar>500){

			print "VERDADERO";
		}else {

			print "FALSO";
		}	
?>