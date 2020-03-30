<?php
//Auteurs : Kevin Vaucher et Johnny Vaca
//Projet : Projet Web Globescope
//Date : 16.03.2020
ob_start();
$title = "Globescope - Panel Administrateur";
?>

<?php
$jj = count($images);
//echo $jj / 2 ?>
<form action="index.php?action=modify" method="POST">
<div class="divMenu">
    <div class="divTitle1">
        <h1>Panel Administrateur
        </h1>
    </div>
    <div class="divTitle2">
        <h3>Liste des Participants
        </h3>
    </div>
    <div class="divSearch">
        <!--
        <select aria-label="gros">
            <option hidden selected>Rechercher par ...</option>
            <option>Pseudo</option>
            <option>Droit</option>
        </select> -->

        <input type="text" placeholder="Recherche..." aria-label="label" id="search">
    </div>

        <div class="divModifier" id="cool">

                <input type="submit" value="Modifier">

            <span>Tout Modifier </span><input type="checkbox" aria-label="Checkbox for following text input"
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
<div class="divSelects" id="selects">
    <br>
    <br>
    <br>
    <span>Filtrer par Pseudo</span>
    <select class="divSelect" id="selectPseudo">
        <option value="tous">tous</option>
        <option value="avec">avec</option>
        <option value="sans">sans</option>
    </select>
    <br>
    <br> <br>
    <span>Filtrer par Droit</span>

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

    <span>Filtrer par Pays</span>
    <select class="divSelect" id="selectPays">
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

    <span>Filtrer par ville</span>
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
    <span>Filtrer par Slogan ...</span>
    <select class="divSelect" id="selectSlogan">
        <option value="tous">tous</option>
        <option value="avec">avec</option>
        <option value="sans">sans</option>
    </select>
    <br>
    <br> <br>
    <span>Filtrer par Equipe</span>
    <select class="divSelect" id="selectEquipe">
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
    <thead>
    <!--
    <tr class="bg-info">
        <th>Image</th>
        <th>Pseudo</th>
        <th>Pays</th>
        <th>Slogan</th>
        <th>Droit</th>
        <th>Modifier</th>
    </tr>
    -->
    </thead>
        <tbody id="tbody" class="tbody">

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
                <span><b>Modifier</b></span>
                <input type="checkbox" aria-label="helo" value="<?= $image['IDPlace'] ?>" name="arrayModify[]">
            </td>
            </tr>
            <?php
        }
        ?>

        </tbody>
    </table>
</div>

</form>
<?php


$content = ob_get_clean();
require "view/gabaritAdminPanel.php";
?>
<!--
   /// IMAGES //
<?= $image['IDImage'] ?>.png

<option value="France" >France</option>
        <option value="Afghanistan">Afghanistan</option>
        <option value="Afrique_Centrale">Afrique_Centrale</option>
        <option value="Afrique_du_sud">Afrique_du_Sud</option>
        <option value="Albanie">Albanie</option>
        <option value="Algerie">Algerie</option>
        <option value="Allemagne">Allemagne</option>
        <option value="Andorre">Andorre</option>
        <option value="Angola">Angola</option>
        <option value="Anguilla">Anguilla</option>
        <option value="Arabie_Saoudite">Arabie_Saoudite</option>
        <option value="Argentine">Argentine</option>
        <option value="Armenie">Armenie</option>
        <option value="Australie">Australie</option>
        <option value="Autriche">Autriche</option>
        <option value="Azerbaidjan">Azerbaidjan</option>

        <option value="Bahamas">Bahamas</option>
        <option value="Bangladesh">Bangladesh</option>
        <option value="Barbade">Barbade</option>
        <option value="Bahrein">Bahrein</option>
        <option value="Belgique">Belgique</option>
        <option value="Belize">Belize</option>
        <option value="Benin">Benin</option>
        <option value="Bermudes">Bermudes</option>
        <option value="Bielorussie">Bielorussie</option>
        <option value="Bolivie">Bolivie</option>
        <option value="Botswana">Botswana</option>
        <option value="Bhoutan">Bhoutan</option>
        <option value="Boznie_Herzegovine">Bosnie_Herzegovine</option>
        <option value="Bresil">Bresil</option>
        <option value="Brunei">Brunei</option>
        <option value="Bulgarie">Bulgarie</option>
        <option value="Burkina_Faso">Burkina_Faso</option>
        <option value="Burundi">Burundi</option>
        <option value="Caiman">Caiman</option>
        <option value="Cambodge">Cambodge</option>
        <option value="Cameroun">Cameroun</option>
        <option value="Canada">Canada</option>
        <option value="Canaries">Canaries</option>
        <option value="Cap_vert">Cap_Vert</option>
        <option value="Chili">Chili</option>
        <option value="Chine">Chine</option>
        <option value="Chypre">Chypre</option>
        <option value="Colombie">Colombie</option>
        <option value="Comores">Colombie</option>
        <option value="Congo">Congo</option>
        <option value="Congo_democratique">Congo_democratique</option>
        <option value="Cook">Cook</option>
        <option value="Coree_du_Nord">Coree_du_Nord</option>
        <option value="Coree_du_Sud">Coree_du_Sud</option>
        <option value="Costa_Rica">Costa_Rica</option>
        <option value="Cote_d_Ivoire">Côte_d_Ivoire</option>
        <option value="Croatie">Croatie</option>
        <option value="Cuba">Cuba</option>

        <option value="Danemark">Danemark</option>
        <option value="Djibouti">Djibouti</option>
        <option value="Dominique">Dominique</option>

        <option value="Egypte">Egypte</option>
        <option value="Emirats_Arabes_Unis">Emirats_Arabes_Unis</option>
        <option value="Equateur">Equateur</option>
        <option value="Erythree">Erythree</option>
        <option value="Espagne">Espagne</option>
        <option value="Estonie">Estonie</option>
        <option value="Etats_Unis">Etats_Unis</option>
        <option value="Ethiopie">Ethiopie</option>

        <option value="Falkland">Falkland</option>
        <option value="Feroe">Feroe</option>
        <option value="Fidji">Fidji</option>
        <option value="Finlande">Finlande</option>
        <option value="France">France</option>

        <option value="Gabon">Gabon</option>
        <option value="Gambie">Gambie</option>
        <option value="Georgie">Georgie</option>
        <option value="Ghana">Ghana</option>
        <option value="Gibraltar">Gibraltar</option>
        <option value="Grece">Grece</option>
        <option value="Grenade">Grenade</option>
        <option value="Groenland">Groenland</option>
        <option value="Guadeloupe">Guadeloupe</option>
        <option value="Guam">Guam</option>
        <option value="Guatemala">Guatemala</option>
        <option value="Guernesey">Guernesey</option>
        <option value="Guinee">Guinee</option>
        <option value="Guinee_Bissau">Guinee_Bissau</option>
        <option value="Guinee equatoriale">Guinee_Equatoriale</option>
        <option value="Guyana">Guyana</option>
        <option value="Guyane_Francaise ">Guyane_Francaise</option>

        <option value="Haiti">Haiti</option>
        <option value="Hawaii">Hawaii</option>
        <option value="Honduras">Honduras</option>
        <option value="Hong_Kong">Hong_Kong</option>
        <option value="Hongrie">Hongrie</option>

        <option value="Inde">Inde</option>
        <option value="Indonesie">Indonesie</option>
        <option value="Iran">Iran</option>
        <option value="Iraq">Iraq</option>
        <option value="Irlande">Irlande</option>
        <option value="Islande">Islande</option>
        <option value="Israel">Israel</option>
        <option value="Italie">italie</option>

        <option value="Jamaique">Jamaique</option>
        <option value="Jan Mayen">Jan Mayen</option>
        <option value="Japon">Japon</option>
        <option value="Jersey">Jersey</option>
        <option value="Jordanie">Jordanie</option>

        <option value="Kazakhstan">Kazakhstan</option>
        <option value="Kenya">Kenya</option>
        <option value="Kirghizstan">Kirghizistan</option>
        <option value="Kiribati">Kiribati</option>
        <option value="Koweit">Koweit</option>

        <option value="Laos">Laos</option>
        <option value="Lesotho">Lesotho</option>
        <option value="Lettonie">Lettonie</option>
        <option value="Liban">Liban</option>
        <option value="Liberia">Liberia</option>
        <option value="Liechtenstein">Liechtenstein</option>
        <option value="Lituanie">Lituanie</option>
        <option value="Luxembourg">Luxembourg</option>
        <option value="Lybie">Lybie</option>

        <option value="Macao">Macao</option>
        <option value="Macedoine">Macedoine</option>
        <option value="Madagascar">Madagascar</option>
        <option value="Madère">Madère</option>
        <option value="Malaisie">Malaisie</option>
        <option value="Malawi">Malawi</option>
        <option value="Maldives">Maldives</option>
        <option value="Mali">Mali</option>
        <option value="Malte">Malte</option>
        <option value="Man">Man</option>
        <option value="Mariannes du Nord">Mariannes du Nord</option>
        <option value="Maroc">Maroc</option>
        <option value="Marshall">Marshall</option>
        <option value="Martinique">Martinique</option>
        <option value="Maurice">Maurice</option>
        <option value="Mauritanie">Mauritanie</option>
        <option value="Mayotte">Mayotte</option>
        <option value="Mexique">Mexique</option>
        <option value="Micronesie">Micronesie</option>
        <option value="Midway">Midway</option>
        <option value="Moldavie">Moldavie</option>
        <option value="Monaco">Monaco</option>
        <option value="Mongolie">Mongolie</option>
        <option value="Montserrat">Montserrat</option>
        <option value="Mozambique">Mozambique</option>

        <option value="Namibie">Namibie</option>
        <option value="Nauru">Nauru</option>
        <option value="Nepal">Nepal</option>
        <option value="Nicaragua">Nicaragua</option>
        <option value="Niger">Niger</option>
        <option value="Nigeria">Nigeria</option>
        <option value="Niue">Niue</option>
        <option value="Norfolk">Norfolk</option>
        <option value="Norvege">Norvege</option>
        <option value="Nouvelle_Caledonie">Nouvelle_Caledonie</option>
        <option value="Nouvelle_Zelande">Nouvelle_Zelande</option>

        <option value="Oman">Oman</option>
        <option value="Ouganda">Ouganda</option>
        <option value="Ouzbekistan">Ouzbekistan</option>

        <option value="Pakistan">Pakistan</option>
        <option value="Palau">Palau</option>
        <option value="Palestine">Palestine</option>
        <option value="Panama">Panama</option>
        <option value="Papouasie_Nouvelle_Guinee">Papouasie_Nouvelle_Guinee</option>
        <option value="Paraguay">Paraguay</option>
        <option value="Pays_Bas">Pays_Bas</option>
        <option value="Perou">Perou</option>
        <option value="Philippines">Philippines</option>
        <option value="Pologne">Pologne</option>
        <option value="Polynesie">Polynesie</option>
        <option value="Porto_Rico">Porto_Rico</option>
        <option value="Portugal">Portugal</option>

        <option value="Qatar">Qatar</option>

        <option value="Republique_Dominicaine">Republique_Dominicaine</option>
        <option value="Republique_Tcheque">Republique_Tcheque</option>
        <option value="Reunion">Reunion</option>
        <option value="Roumanie">Roumanie</option>
        <option value="Royaume_Uni">Royaume_Uni</option>
        <option value="Russie">Russie</option>
        <option value="Rwanda">Rwanda</option>

        <option value="Sahara Occidental">Sahara Occidental</option>
        <option value="Sainte_Lucie">Sainte_Lucie</option>
        <option value="Saint_Marin">Saint_Marin</option>
        <option value="Salomon">Salomon</option>
        <option value="Salvador">Salvador</option>
        <option value="Samoa_Occidentales">Samoa_Occidentales</option>
        <option value="Samoa_Americaine">Samoa_Americaine</option>
        <option value="Sao_Tome_et_Principe">Sao_Tome_et_Principe</option>
        <option value="Senegal">Senegal</option>
        <option value="Seychelles">Seychelles</option>
        <option value="Sierra Leone">Sierra Leone</option>
        <option value="Singapour">Singapour</option>
        <option value="Slovaquie">Slovaquie</option>
        <option value="Slovenie">Slovenie</option>
        <option value="Somalie">Somalie</option>
        <option value="Soudan">Soudan</option>
        <option value="Sri_Lanka">Sri_Lanka</option>
        <option value="Suede">Suede</option>
        <option value="Suisse">Suisse</option>
        <option value="Surinam">Surinam</option>
        <option value="Swaziland">Swaziland</option>
        <option value="Syrie">Syrie</option>

        <option value="Tadjikistan">Tadjikistan</option>
        <option value="Taiwan">Taiwan</option>
        <option value="Tonga">Tonga</option>
        <option value="Tanzanie">Tanzanie</option>
        <option value="Tchad">Tchad</option>
        <option value="Thailande">Thailande</option>
        <option value="Tibet">Tibet</option>
        <option value="Timor_Oriental">Timor_Oriental</option>
        <option value="Togo">Togo</option>
        <option value="Trinite_et_Tobago">Trinite_et_Tobago</option>
        <option value="Tristan da cunha">Tristan de cuncha</option>
        <option value="Tunisie">Tunisie</option>
        <option value="Turkmenistan">Turmenistan</option>
        <option value="Turquie">Turquie</option>

        <option value="Ukraine">Ukraine</option>
        <option value="Uruguay">Uruguay</option>

        <option value="Vanuatu">Vanuatu</option>
        <option value="Vatican">Vatican</option>
        <option value="Venezuela">Venezuela</option>
        <option value="Vierges_Americaines">Vierges_Americaines</option>
        <option value="Vierges_Britanniques">Vierges_Britanniques</option>
        <option value="Vietnam">Vietnam</option>

        <option value="Wake">Wake</option>
        <option value="Wallis et Futuma">Wallis et Futuma</option>

        <option value="Yemen">Yemen</option>
        <option value="Yougoslavie">Yougoslavie</option>

        <option value="Zambie">Zambie</option>
        <option value="Zimbabwe">Zimbabwe</option>

 -->