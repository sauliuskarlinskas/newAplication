<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <link rel="stylesheet" href="<?= URL ?>/app.css">
    <script src="<?= URL ?>/app.js" defer></script>

    <title>
        <?= $pageTitle ?? 'Untitled' ?>
    </title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>

</head>

<body>

</body>

</html>


<?php if (!isset($inLogin)): ?>
    <?php require __DIR__ . '/nav.php' ?>
<?php endif ?>
<?php require_once 'Messages.php' ?>