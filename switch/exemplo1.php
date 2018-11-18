<?php 

$dia = date("w");

switch($dia){ //comando utilizado diferente de if, usado para casos, caso for digito 1 tal mensagem.

case 0:
echo "Domingo";
break;

case 1:
echo "Segunda-feira";
 break;

case 2:
echo "Terça-Feira";
break;

case 3:
echo "Quarta-feira";
break;

case 4:
echo "Quinta-feira";
break;

case 5:
echo "Sexta-feira";
break;

case 6:
echo "Sábado";
break;

default: // default é o comando para quando não passa por nenhum case.
echo "Data inválida";
break;

}



 ?>