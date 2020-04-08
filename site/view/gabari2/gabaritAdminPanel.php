<!--
Auteurs : Kevin Vaucher et Johnny Vaca
Projet : Projet Web Globescope
Date : 16.03.2020
-->

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">
<head>
    <title><?= $title ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
    <link rel="stylesheet" href="css/adminPanel.css">
    <link href="node_modules/bootstrap/dist/css/bootstrap.css" rel="stylesheet">
    <link href="node_modules/bootstrap/dist/css/bootstrap-grid.css" rel="stylesheet">
    <link href="node_modules/bootstrap/dist/css/bootstrap-reboot.css" rel="stylesheet">
    <script src="node_modules/jquery/dist/jquery.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.js"></script>

</head>
<body id="body">


<form action="index.php?action=<?= $action ?>" method="POST" enctype="multipart/form-data">

    <div class="divMenu"
    >

        <div class="divTitle1">
          <a href="?action=login">  <h1><?= $titlePanel ?>
            </h1></a>
        </div>
        <div class="divTitle2">
            <h3><?= $subTitlePanel ?>
            </h3>
        </div>

        <div class="divModifier " id="cool">


            <?= $check ?>

            <input type="submit" value="Modifier" id="bouton">
        </div>
    </div>

    <br>
    <br>
    <br>

    <?= $content ?>

</body>
</html>
