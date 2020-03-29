<!--
Auteurs : Kevin Vaucher et Johnny Vaca
Projet : Projet Web Globescope
Date : 16.03.2020
-->

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
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

<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>-->
<script src="../node_modules/jquery/dist/jquery.js"</script>
<script src="../node_modules/jquery/dist/jquery.js"</script>
<script src="../node_modules/jquery/dist/jquery.slim.js"</script>
<script src="../node_modules/jquery/dist/jquery.min.js"</script>
<script src="../node_modules/jquery/dist/jquery.slim.min.js"</script>
<script src="../js/jQuery.js"></script>
<script src="../js/adminPanel.js"></script>

</body>
</html>
