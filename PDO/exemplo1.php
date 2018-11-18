<?php
$usuario = "root";
$password = "";
//$conn = new PDO("mysql:dbname=dbphp7;host=localhost","root","");
$conn = new PDO("mysql:dbname=dbphp7;host=localhost",$usuario,$password);

$stmt = $conn->prepare("SELECT *FROM td_usuarios ORDER BY deslogin");

$stmt->execute();

$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach ($result as $row) {
	foreach($row as $key => $value){
		echo "<strong>".$key."</strong>".$value."<br/>";

	}
	echo "=============================================================<br>";


?>