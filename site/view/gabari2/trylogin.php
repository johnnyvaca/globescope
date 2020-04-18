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
<body>

<form action="?action=tryLogin" method="post">
    <div class="form-group">
        <label for="email">Adresse Email:</label>
        <input type="email" class="form-control" placeholder="Enter email" id="email" name="email">
    </div>
    <div class="form-group">
        <label for="pwd">Mot de Passe:</label>
        <input type="password" class="form-control" placeholder="Enter password" id="pwd" name="password">
    </div>
    <button type="submit" class="btn btn-primary">Connexion</button>
</form>

</body>
</html>
<?php
