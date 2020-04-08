<?php
//Auteurs : Kevin Vaucher et Johnny Vaca
//Projet : Projet Web Globescope
//Date : 16.03.2020
ob_start();
$title = "Panel Admin - choisir";
$subTitlePanel = "Choisissez les participants à changer";
$titlePanel = "Page Administration";
$check = '<span>Tout Modifier </span><input type="checkbox" aria-label="Checkbox for following text input\"
                                              id="toutModifier">';

$action = "modify";
?>
<script src="../js/adminPanel.js"></script>


<div class="divTable scrollit">
    <table class="table-dark text-white tailleTable" id="myTable">
        <thead>

        </thead>
        <tbody id="tbody" class="tbody">

        <?php
        foreach ($images as $i => $image) {
            ?>
            <tr>
                <td><a type="button" id="btnCheck"><img src="../images/64-64/<?= $image['IDImage'] ?>.png"></a></td>
                <td><b><span>Pseudo</span></b><br><br><span><?= $image['Pseudo'] ?></span></td>
                <td><b><span>Pays</span></b><br><br><span><?= $image['Pays'] ?></span></td>
                <td><b><span>Ville</span></b><br><br><span><?= $image['Ville'] ?></span></td>
                <td><b><span>Equipe</span></b><br><br><span><?= $image['Equipe'] ?></span></td>
                <td><b><span>Droit</span></b><br><br><span><?= $image['Droit'] ?></span></td>
                <td><b><span>Slogan</span></b><br><br><span><?= $image['Slogan'] ?></span></td>
                <td>
                    <br>
                    <br>
                    <span><b>Modifier</b></span>
                    <input type="checkbox" value="<?= $image['IDPlace'] ?>" name="arrayModify[]" id="check<?= $i ?>">
                </td>
                <td>
                    <a href="<?= $image['Media'] ?>" target="_blank" type="button" class="btn-primary">media</a>

                </td>
            </tr>
            <?php
        }
        ?>


        </tbody>
    </table>

</div>

</form>


<div class="divSelects" id="selects">


    <span>Filtrer par Pays</span>
    <input list="selectPays1" type="text" id="selectPays">
    <datalist class="divSelect" id="selectPays1">
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

    </datalist>

    <br>
    <br> <br>
    <span>Filtrer par ville</span>
    <input list="selectVille1" type="text" id="selectVille">
    <datalist class="divSelect" id="selectVille1">
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
    </datalist>
    <br>

    <br> <br>
    <span>Filtrer par Equipe</span>
    <input list="selectEquipe1" type="text" id="selectEquipe">
    <datalist class="divSelect" id="selectEquipe1">
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
    </datalist>
    <br>
    <br> <br>
    <span>Filtrer par Droit</span>
    <input list="selectDroit1" type="text" id="selectDroit">
    <datalist class="divSelect" id="selectDroit1">
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
    </datalist>

    <br>
    <br> <br>
    <span>Filtrer par Pseudo</span>
    <input list="selectPseudo1" type="text" id="selectPseudo">
    <datalist class="divSelect" type="text" id="selectPseudo1">
        <option value="tous">tous</option>
        <option value="avec">avec</option>
        <option value="sans">sans</option>
        <?php
        foreach ($pseudos as $pseudo) {

            if ($pseudo != "") {
                ?>
                <option value="<?= $pseudo ?>"></option>
            <?php }

        } ?>
    </datalist>
    <br>
    <br> <br>
    <span>Filtrer par Slogan ...</span>
    <input list="selectSlogan1" type="text" id="selectSlogan">
    <datalist class="divSelect" id="selectSlogan1">
        <option value="tous">tous</option>
        <option value="avec">avec</option>
        <option value="sans">sans</option>
        <?php
        foreach ($slogans as $slogan) {
            if ($slogan != "" && $slogan != " ") {
                ?>
                <option><?= $slogan ?></option>
            <?php }
        } ?>
    </datalist>
    <br>
    <br>


</div>


<?php


$content = ob_get_clean();
require "view/gabaritAdminPanel.php";
?>