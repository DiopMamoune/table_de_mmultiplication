<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<header>
    <h1>Atelier PHP - Étape 3</h1>
    <p>Afficher les tables de multiplication</p>
</header>
<section class="contentbox">
    <div class="maincontent">
        <div class="fields">
<?php
            //attribution de valeurs à mes variables
            $score = 0;
            $scoreMax = 0;
            $answer = $_POST['answer'];
            $result = $_POST['result'];
            $question = $_POST['question'];

            // pour chaque reponse, je stock dans round son index et dans answer sa valeur
            foreach ($_POST['answer'] as $round => $answer ) {
            //J'ajoutes 1 à la variable scoreMax
                $scoreMax++;
        ?>
            <!--J'affiche le numéro de la question avec la variable scoreMax-->
                <h2>Question<?php echo $scoreMax ?>:</h2>
            <!--J'affiche la multiplication posé-->
                    <p><?php  echo $question[$round]?></p>
            <!--Jaffiche la réponse donné par le visiteur-->
                <p>votre réponse: <?php echo $answer?> </p>
            <!--Si le résultat attendu correspond à la réponse proposé-->
                <?php if ($result[$round] == $answer) {
            //J'affiche un message positif 
                    echo '<p style="color:green">Bonne réponse !</p><hr>';
//                </div>
            //J'ajoutes 1 à la variable score
                    $score++;
            //Sinon
                } else {
            //J'affiche un message négatif et la réponse qui etait attendue
                    echo '<p style="color:red">Mauvaise réponse !</p>';
                    echo '<p style="color:red">La bonne réponse est: '.$result[$round].'</p><hr>'; 
                }    
            } ?><!-- J'affiche le score final + le scoreMax-->
        <h1>Score final : <?php echo $score ?> / <?php echo $scoreMax ?></h1>
</div>
</div>
</section>
</form>

</body>
</html>