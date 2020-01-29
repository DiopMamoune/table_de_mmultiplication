<!DOCTYPE html>
<html>
<head>
    <title>Etape 4</title>
</head>
<body>
<form action="resultat.php" method="post">
        <section class="contentbox">
            <div class="maincontent">
                <div class="fields">
        <?php
        if (!empty($_POST) && isset($_POST['check']))
            foreach ($_POST['check'] as $table) :
                ?>
                <h1>Table de
                    <?php echo $table ?>
                </h1>

                <?php
                for ($i = 0; $i < 5; $i++) :
                    $randnumb = rand(0,10);
                    $result = $table * $randnumb;
                    ?>

                    <p>Combien font <?php echo $table?> x <?php echo $randnumb?> ?</p>
                    <input type="text" name="answer[]">
                    <input type="hidden" name="result[]" value="<?= $result ?>">
                    <input type="hidden" name="question[]" value="Combien font <?php echo $table?> x <?php echo $randnumb?> ?">

                <?php endfor ?>
                <br>
                <div class='action_buttons'>
                    <div class='button'>
                        <input type='submit' id="validmultiple" value='Valider les réponses'>
                    </div>
                </div>
            <?php endforeach ?>
                </div>
            </div>
        </section>
    </form>
</body>
</html>
