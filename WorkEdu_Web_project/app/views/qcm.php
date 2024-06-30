<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title><?=$data['page_title'] . " - " .WEBSITE_TITLE?></title>

    <link rel="stylesheet" href="<?=ASSETS?>css/elements.css">
    <link rel="stylesheet" href="<?=ASSETS?>css/style.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</head>
<body>
    <header>
        <?php $this->view("header", $data); ?>
        <script src="<?=ASSETS?>/js/header.js"></script>
    </header>

    <main>

        <!-- <?php if (isset($_SESSION['username'])) : ?>
            <p>Bienvenue <?php echo $_SESSION['username'] ?></p>
        <?php  endif; ?> -->
        
        <h1>QCM</h1>
        <?php if (isset($_SESSION['username'])&& $_SESSION['admin']==1) : ?>
        <a href="<?=ROOT?>createqcm">Créer un QCM</a>
        <?php  endif; ?>
        <a href="<?=ROOT?>do_qcm">Voir les QCM</a>

    </main>

    <footer>
        <?php $this->view("footer", $data); ?>
    </footer>
</body>
</html>