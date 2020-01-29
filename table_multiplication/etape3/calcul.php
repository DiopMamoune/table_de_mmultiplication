<?php

$table = $_POST['table'] ;
$aleatoire = rand(1,10);
$solution =  $table*$aleatoire;

echo  "Combien vaut ". $table . "X" . $aleatoire . " ?'<br>'"  ;
	

?>

<form action="verification.php" method="post">
	
<label>Votre réponse :</label><input type="text" name="verification">
<input type="hidden" name="solution" value="<?php echo $solution ;?>"> 
<input type="submit" name="valider" value="valider">
 

</form>