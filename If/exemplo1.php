<?php 
$idade = 66;
$a = 12;
$b = 18;
$c = 65;

if ($idade <= $a) {

   echo "Criança";

} else if ($idade <= $b) {
	echo "Adolecente";


}  else if ($idade < $c) {

	echo "Adulto";

} else {

 echo "Idoso";

 echo"<br>";

 echo ($idade < $c)?"Meno de idade":"Maior de Idade";



}
    
 







 ?>