<!DOCTYPE html>
<html>
<head>
	<title>etape 4</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<header>
		<h3>Etude PHP - Etape 4</h3>
		<p>Afficher les tables de multiplication</p>
	</header>

    <form method="POST" action="quizz.php">
        <section class="contentbox">
            <div class="maincontent">
                <div class="fields">
                    <h3>Choisissez une ou plusieurs table et résolvez les opérations proposés</h3>
                    <label><input type="checkbox" name="check[]" value="0" class="checkbox" /> Table de 0</label>
                    <label><input type="checkbox" name="check[]" value="1" class="checkbox" /> Table de 1</label>
                    <label><input type="checkbox" name="check[]" value="2" class="checkbox" /> Table de 2</label>
                    <label><input type="checkbox" name="check[]" value="3" class="checkbox" /> Table de 3</label>
                    <label><input type="checkbox" name="check[]" value="4" class="checkbox" /> Table de 4</label>
                    <label><input type="checkbox" name="check[]" value="5" class="checkbox" /> Table de 5</label>
                    <label><input type="checkbox" name="check[]" value="6" class="checkbox" /> Table de 6</label>
                    <label><input type="checkbox" name="check[]" value="7" class="checkbox" /> Table de 7</label>
                    <label><input type="checkbox" name="check[]" value="8" class="checkbox" /> Table de 8</label>
                    <label><input type="checkbox" name="check[]" value="9" class="checkbox" /> Table de 9</label>
                    <label><input type="checkbox" name="check[]" value="10" class="checkbox" /> Table de 10</label>
                </div>
                <div class="action_buttons">
                    <div class="button"><input type="submit" name="sub" value="Lancer le QUIZ"></div>
                    <div class="button"><input type="reset" value="Annuler"></div>
                </div>
            </div>
        </section>
    </form>
</body>
</html>