<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="style.css">
	<title>etape3</title>
	<meta charset="utf-8">
</head>
<body>
	<header>
		<h3>Atelier PHP - Etape 3</h3>
		<p>Afficher une table de multiplication</p>
	</header>
	<form action="calcul.php" method="POST"> 

		<section class="contentbox">
			<div class="maincontent">

				<div class="fields">
				<h3>Merci de selectionner la table que vous voulez consulter:</h3>
			<select name="table">
				<option value="0">Table de 0</option>
				<option value="1">Table de 1</option>
				<option value="2">Table de 2</option>
				<option value="3">Table de 3</option>
				<option value="4">Table de 4</option>
				<option value="5">Table de 5</option>
				<option value="6">Table de 6</option>
				<option value="7">Table de 7</option>
				<option value="8">Table de 8</option>
				<option value="9">Table de 9</option>
				<option value="10">Table de 10</option>
			</select>
			</div>
				<div class="action_buttons">
					<div class="button"><input type="submit" value="Voir la table"></div>
					<div class="button"><input type="reset" value="Annuler"></div>
				</div>
			</div>
		</section>

	</form>
</body>
</html>