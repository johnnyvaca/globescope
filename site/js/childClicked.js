//Requete XMLHTTP pour récupéerer des détails d'un enfant
//en paramètre (x) l'ID de l'image recherché
function onImageClick(x) {
    var obj, dbParam, xmlhttp, myObj;
    obj = {"ID": x};
    dbParam = JSON.stringify(obj);


    xmlhttp = new XMLHttpRequest();
    //Declaré dans index.php
    showSideBar();
    onSearchDetails.innerHTML = "";

    //Quand la requête xml à été exécuté
    xmlhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            if (this.responseText != "") {
                //convertit les données reçues depuis le fichier PHP correspondent (JsonEncode)
                myObj = JSON.parse(this.responseText);
                //Si l'image existe
                if (myObj.ImageOK != 0) {
                    var details = document.getElementById("onClickDetails").childNodes;
                    childImage.src = "images/400-500/" + myObj.IDImage + ".jpg";
                    childPseudo.textContent = myObj.Pseudo;
                    childCitation.textContent = myObj.Slogan;
                    childRight.textContent = myObj.Droit;
                    childCountry.textContent = myObj.Pays;
                    childCity.textContent = myObj.Ville;
                    childTeam.textContent = myObj.Equipe;
                    childMedia.textContent = "Media de la personne";
                    childMediaDesc.textContent = myObj.MediaDesc;
                    lienMedia.href = myObj.Media;
                }
            }
        }
    }

    //exécuter la requete en mode POST avec les paramètres voulus (x) => ID
    xmlhttp.open("POST", "index.php?action=GetData", true);
    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xmlhttp.send("x=" + dbParam + "&Mode=click");

}
