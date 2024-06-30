<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title><?=$data['page_title'] . " - " .WEBSITE_TITLE?></title>

    <link rel="stylesheet" href="<?=ASSETS?>css/elements.css">
    <link rel="stylesheet" href="<?=ASSETS?>css/style.css">
    <link rel="stylesheet" href="<?=ASSETS?>css/qcm.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</head>
<body>
    <header>
        <?php $this->view("header", $data); ?>
        <script src="<?=ASSETS?>/js/header.js"></script>
    </header>

    <main>        
        <h1>Créer QCM</h1>
        <div class="form-container" >
        <form method="post" >

        
        <label for="cour">Cour :</label><br>
        <select id="cour" name="cour" class="cour">
        <option value="informatique" selected>Informatique</option>
        <option value="mathematique">Mathematique</option>
        <option value="biophysique">Biophysique</option>

        </select><br><br>

        <label for="question">Question :</label><br>
        <div class="form-input"><input type="text" id="question" name="question" required><br><br></div>

        <label for="reponse">Réponse :</label><br>
        <div class="form-input"><input type="text" id="reponse" name="reponse" required><br><br></div>

        <label for="proposition1">Proposition 1 :</label><br>
        <div class="form-input"><input type="text" id="proposition1" name="proposition1" required><br><br></div>

        <label for="proposition2">Proposition 2 :</label><br>
        <div class="form-input"><input type="text" id="proposition2" name="proposition2" required><br><br></div>

        <label for="proposition3">Proposition 3 :</label><br>
        <div class="form-input"><input type="text" id="proposition3" name="proposition3" required><br><br></div>

        <input type="submit" value="Créer QCM" class="btn-cree" >
        </form>
    </div>
    </main>

    <footer>
        <?php $this->view("footer", $data); ?>
    </footer>
</body>
</html>