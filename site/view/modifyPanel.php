<!--
Auteurs : Kevin Vaucher et Johnny Vaca
Projet : Projet Web Globescope
Date : 16.03.2020
-->

<?php
ob_start();
$title = "admin";
?>

<?php
$jj = count($images);
//echo $jj / 2 ?>

<div class="divMenu">
    <div class="divTitle1">
        <h1>Panel Administrateur
        </h1>
    </div>
    <div class="divTitle2">
        <h3>MODIFICATION
        </h3>
    </div>
    <div class="divSearch">


        <select aria-label="gros">
            <option hidden selected>Rechercher par ...</option>
            <option>Pseudo</option>
            <option>Droit</option>
        </select>

        <input type="text" placeholder="Recherche..." aria-label="label" id="search">
    </div>
    <div class="divModifier" id="cool">
        <button>MODIFIER</button>

        <span>Tout Modifier</span><input type="checkbox" aria-label="Checkbox for following text input"
                                         id="toutModifier">

    </div>
</div>
<br>
<br>
<br>
<!--<label for="choix_bieres">Indiquez votre bière préférée :</label>
<input list="bieres" type="text" id="choix_bieres">
<datalist id="bieres">
    <option value="Meteor">
    <option value="Pils">
    <option value="Kronenbourg">
    <option value="Grimbergen">
</datalist>
-->
<div class="divSelects">
    <br>
    <br>
    <br>
    <span>Trier par pseudo</span>
    <select class="divSelect" id="selectPseudo">
        <option value="tous">tous</option>
        <option value="avec">avec</option>
        <option value="sans">sans</option>
    </select>
    <br>
    <br> <br>
    <span>Trier par Droit</span>

    <select class="divSelect" id="selectDroit">
        <option>tous</option>
        <option>avec</option>
        <option>sans</option>
        <?php
        foreach ($droits as $droit) {
            if ($droit != "" && $droit != " ") {
                ?>
                <option><?= $droit ?></option>
            <?php }
        } ?>
    </select>
    <br>
    <br> <br>

    <span>Trier par pays</span>
    <select name="pays" class="divSelect" id="selectPays">
        <option value="tous">tous</option>
        <option value="avec">avec</option>
        <option value="sans">sans</option>
        <?php
        foreach ($pays as $imag) {


            if ($imag != "") {
                ?>

                <option value="<?= $imag ?>"><?= $imag ?></option>
            <?php }

        } ?>

    </select>
    <br>

    <br> <br>

    <span>Trier par ville</span>
    <select class="divSelect" id="selectVille">
        <option value="tous">tous</option>
        <option value="avec">avec</option>
        <option value="sans">sans</option>
        <?php
        foreach ($villes as $ville) {

            if ($ville != "") {
                ?>
                <option value="<?= $ville ?>"><?= $ville ?></option>
            <?php }

        } ?>
    </select>
    <br>
    <br> <br>
    <span>Trier par phrase ...</span>
    <select class="divSelect">
        <option value="tous">tous</option>
        <option value="avec">avec</option>
        <option value="sans">sans</option>
    </select>
    <br>
    <br> <br>
    <span>Trier par équipe</span>
    <select class="divSelect">
        <option value="tous">tous</option>
        <option value="avec">avec</option>
        <option value="sans">sans</option> <?php
        foreach ($equipes as $equipe) {

            if ($equipe != "") {
                ?>
                <option value="<?= $equipe ?>"><?= $equipe ?></option>
            <?php }

        } ?>
        <option></option>
    </select>
</div>
<div class="divTable scrollit">
    <table class="table" id="myTable">

        <tbody class="tbody">

        <?php

        foreach ($images as $i => $image) {
            if ($i % 2 == 0) {
                ?>
                <tr class="bg-success">
                <?php
            } else {
                ?>
                <tr class="bg-danger">
                <?php
            }
            ?>
            <td><img src="images/128-128/" alt="image"></td>
            <td class="classPseudo"><b><span>Pseudo</span></b><br><br><span><?= $image['Pseudo'] ?></span></td>
            <td><b><span>Pays</span></b><br><br><span><?= $image['Pays'] ?></span></td>
            <td><b><span>Slogan</span></b><br><br><span><?= $image['Slogan'] ?></span></td>
            <td class="classDroit"><b><span>Droit</span></b><br><br><span><?= $image['Droit'] ?></span></td>
            <td>
                <br>
                <br>
                <span><b>modifier</b></span>

                <input type="checkbox" aria-label="helo">

            </td>
            </tr>
            <?php
        }
        ?>
        </tbody>
    </table>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<?php


$content = ob_get_clean();
require "view/gabaritAdminPanel.php";
?>
<!--
   /// IMAGES //
<?= $image['IDImage'] ?>.png
