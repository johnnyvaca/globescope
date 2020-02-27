<!DOCTYPE html>
<html>
<head>
    <title><?= $title ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
    <link rel="stylesheet" href="../css/adminPanel.css?d=<?php echo time(); ?>">
    <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.css?d=<?php echo time(); ?>">
    <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap-grid.css?d=<?php echo time(); ?>">
    <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap-reboot.css?d=<?php echo time(); ?>">
</head>
<body id="body">

<?= $content ?>
<script src="../js/test.js"></script>
<script src="../js/globescope.js"></script>

</body>
</html>
