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
    <link rel="stylesheet" href="../css/adminPanel.css?d=<?php echo time(); ?>">
    <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.css?d=<?php echo time(); ?>">
    <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap-grid.css?d=<?php echo time(); ?>">
    <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap-reboot.css?d=<?php echo time(); ?>">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

</head>
<body id="body">

<form action="index.php?action=modify" method="POST" target="_blank">
    <div class="divMenu"
    >

        <div class="divTitle1">
            <h1><?= $titlePanel ?>
            </h1>
        </div>
        <div class="divTitle2">
            <h3><?= $subTitlePanel ?>
            </h3>
        </div>

        <div class="divModifier " id="cool">


            <?=$check?>

            <input type="submit" value="Modifier" id="bouton">
        </div>
    </div>
    <br>
    <br>
    <br>

    <div class="divTable scrollit">
        <table class="table-dark" id="myTable">
            <thead>

            </thead>
            <tbody id="tbody" class="tbody">
            <?php
            foreach ($images as $i => $image) {

                ?>

                <td><a type="button" id="btnCheck"><img src="../images/128-128/<?= $image['IDImage'] ?>.png"></a></td>
                <td class="classPseudo"><b><span>Pseudo</span></b><br><br><span><?= $image['Pseudo'] ?></span></td>
                <td><b><span>Pays</span></b><br><br><span><?= $image['Pays'] ?></span></td>
                <td><b><span>Ville</span></b><br><br><span><?= $image['Ville'] ?></span></td>
                <td><b><span>Equipe</span></b><br><br><span><?= $image['Equipe'] ?></span></td>
                <td class="classDroit"><b><span>Droit</span></b><br><br><span><?= $image['Droit'] ?></span></td>
                <td><b><span>Slogan</span></b><br><br><span><?= $image['Slogan'] ?></span></td>
                <td>
                    <br>
                    <br>
                    <span><b>Modifier</b></span>
                    <?=$chek1par1?>
                </td>
                </tr>
                <?php
            }
            ?>


            </tbody>
        </table>

    </div>
</form>
<?= $content ?>


<!--
<script src="../js/filter-table.js"></script>
<script src="../js/filter-table.min.js"></script>
<script>
    $(function(){
        $('#tbody').filterTable('#search');
    })
</script>
-->
</body>
</html>
