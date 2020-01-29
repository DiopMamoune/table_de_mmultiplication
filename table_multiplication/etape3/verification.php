
<?php 
$verification = $_POST['verification'];
$solution = $_POST['solution'];

if ($verification==$solution) {
	echo "Bravo vous avez trouver la reponse".$solution;
}else{

	echo "vous avez echouer, la reponse est".$verification;
	echo "<br><br><a href='index.php'>retour</a>";
}

 ?>