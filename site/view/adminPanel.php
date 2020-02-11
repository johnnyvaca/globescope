<!--
Auteurs : Kevin Vaucher et Johnny Vaca
Projet : Projet WEB sur Globescope pour le cours Projet WEB
Date : 11.02.2020
-->
<?php
ob_start();
$title = "Globescope - Admin Panel";

?>

    <h1>PAGE ADMIN<button>MODIFIER</button></h1>

    <table class="table table-striped">

        <thead id="cool">
        <tr>
            <th scope="col">Image<select ><option> </option>
                    <option>2</option>
                    <option>3</option></select></th>



            <th scope="col">Pseudo<select ><option> </option>
                    <option>2</option>
                    <option>3</option></select></th>
            <th>Tout Modifier<input type="checkbox" aria-label="Checkbox for following text input" id="toutModifier"></th>
        </tr>
        </thead>
        <tbody>
        <?php
        // var_dump($images);

       // sort($images);
        // print_r($tab);
        ?>

        <?php
        foreach ($images as $i => $image) {
            if ($i % 2 == 0) {
                ?>
                <tr class="bg-success">
                <?php
            } else {
                ?>
                <tr>
                <?php
            }
            ?>
            <td><img src="images/64-64/<?= $image['IDImage'] ?>.png" width="200px" height="200px"></td>
            <td><?= $image['Pseudo'] ?></td>
            <td>Modifier<input type="checkbox" aria-label="Checkbox for following text input"></td>
            </tr>
            <?php
        }
        ?>
        </tbody>
    </table>
<script src="site/js/adminPanel.js"></script>
<?php
$content = ob_get_clean();
require "view/gabaritAdminPanel.php";
?>