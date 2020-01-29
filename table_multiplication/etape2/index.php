<!DOCTYPE html>
<html lang="fr">
<head>
	<title>Atelier PHP - Étape 2</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<link rel="stylesheet" href="style.css">
	<style>

	</style>
</head>
<body>

<header>
	<h1>Atelier PHP - Étape 2</h1>
	<p>Afficher les tables de multiplication</p>
</header>

<form method="POST" action="calcul.php">

<section class="contentbox">
	<div class="maincontent">

		<div class="fields">
			<h3>Merci de sélectionner les tables que vous voulez consulter:</h3>
			<label><input type="checkbox" name="check_0" value="0" class="checkbox" /> Table de 0</label>
			<label><input type="checkbox" name="check_1" value="1" class="checkbox" /> Table de 1</label>
			<label><input type="checkbox" name="check_2" value="2" class="checkbox" /> Table de 2</label>
			<label><input type="checkbox" name="check_3" value="3" class="checkbox" /> Table de 3</label>
			<label><input type="checkbox" name="check_4" value="4" class="checkbox" /> Table de 4</label>
			<label><input type="checkbox" name="check_5" value="5" class="checkbox" /> Table de 5</label>
			<label><input type="checkbox" name="check_6" value="6" class="checkbox" /> Table de 6</label>
			<label><input type="checkbox" name="check_7" value="7" class="checkbox" /> Table de 7</label>
			<label><input type="checkbox" name="check_8" value="8" class="checkbox" /> Table de 8</label>
			<label><input type="checkbox" name="check_9" value="9" class="checkbox" /> Table de 9</label>
			<label><input type="checkbox" name="check_10" value="10" class="checkbox" /> Table de 10</label>
		</div>

		<div class="action_buttons">
			<div class="button"><input type="submit" name="sub" value="Voir les tables"></div>
			<div class="button"><input type="reset" value="Annuler"></div>
		</div>

	</div>
</section>

</form>
</body>
</html>
