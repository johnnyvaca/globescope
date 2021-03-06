

<?php

//Auteurs : Kevin Vaucher et Johnny Vaca
//Projet : Projet Web Globescope
//Date : 16.03.2020
ob_start();
$title = "globescope";
?>


<span><img id="helpButton" class="GUI" src="../images/questionMark.png"></span>
<div id="Help" class="GUI">
    <div id="box">
        <div id="header">
            <h3 class="aide" a href="">Help</h3>
        </div>
        <p id="closeHelp" class="closeButton" onclick="closeHelp()">X</p>
        <div id="direction">
            <img src="../images/arrowKeys.png" height="50" width="80" alt="touches directions"/>
            <p id="aideDeplacementSouris"> déplacez vous en maintenant le clic gauche de la souris.</p>
        </div>
        <div id="Aidereste" class="Aide">
            <p id="aideZoom">utilisez les touches +/- pour zoomer/dézoomer</p>
            <hr></hr>
            <p id="aideAgrandirImage">Double-cliquez sur l'image pour l'agrandir et afficher ses informations</p>
            <hr></hr>
            <p id="aideRecherche">Pour recherche un/votre pseudo cliquez sur la loupe et ecrivez ensuite un/votre
                pseudo.</p>
        </div>
        <div class="languageSelect">
            <span id="FR" onclick="aideFr()">FR</span>/<span id="EN" onclick="aideAng()">EN</span>/<span id="creditSpan"
                                                                                                         onclick="credit()">Credits</span>
        </div>
    </div>
    <div id="creditBox">
        <div id="header">
            <h3 class="credit" a href="">Credit</h3>
        </div>
        <p id="closeCredit" class="closeButton" onclick="closeHelp()">X</p>
        <img id="imageGroupe" src="../images/photoGroupe.png" alt="Development Group">
        <div id="Groupe">
            <p id="groupeMembresContenu"></p>
        </div>
        <div class="languageSelect">
            <span id="creditSpan" onclick="aideFr()">Help</span>
        </div>
    </div>
</div>

<div id="sideBar" class="GUI">
    <p id="closeSideBar" class="closeButton">X</p>
    <div class="loader" id="imageLoader"></div>
    <div id="onClickDetails">
        <img id="childImage">
        <span id="separator"></span>
        <div id="description">
            <p id="childPseudo"></p>
            <p id="childCountry"></p>
            <p id="childCity"></p>
            <p id="childTeam"></p>
            <p id="childCitation"></p>
            <p id="childRight"></p>
<<<<<<< HEAD
            <p id="childMedia"></p>
=======
            <a id="lienMedia" target="_blank"><p id="childMedia"></p></a>
            <p id="childMediaDesc"></p>
>>>>>>> parent of 910d8f80... mise à jour

        </div>
    </div>
    <div id="onSearchDetails" class="flexContainer">
        <h1>Résultats de la recherche</h1>

    </div>
</div>

<span><img id="showSearch" class="GUI" src="../images/searchIcon.png"></span>

<div id="searchBar" class="GUI">

    <input type="text" id="searchText">
    <span id="searchButton">Recherche</span>
    </input>
    <div id="onDynamicSearch">

    </div>
</div>


<div id="loading">
    <p>Chargement...</p>
</div>

<?php
if($res != ""){
    echo json_encode($res);
}

$content = ob_get_clean();
require "view/gabaritGlobe.php";
?>
