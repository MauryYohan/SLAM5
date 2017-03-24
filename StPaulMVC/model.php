<?php
// Commit v2 - MVC
$bdd = new PDO('mysql:host=localhost;dbname=bdstpaul;charset=utf8', 'root');
$sejours = $bdd->query('select * from sejour order by sejno');

foreach ($sejours as $sejour) {
	echo $sejour['SEJINTITULE'];
	echo $sejour['SEJMONTANTMBI'].'€';
	echo 'A partir du '.$sejour['SEJDTEDEB'];
	echo $sejour['SEJDUREE'].' nuits';
}

?>