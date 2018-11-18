<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="a.css">
</head>
<body>
<div id="A">

	<?php
	echo "<select>";

for ($i=date("Y"); $i >date("Y")-100 ; $i--) { 

	echo "Selecione:"'<option value="' .$i. '">'.$i.'</option>';
	
}


echo "</select>";


?>
</div>



	
</body>
</html>
