/*
Auteurs : Kevin Vaucher et Johnny Vaca
Projet : Projet WEB sur Globescope pour le cours Projet WEB
Date : 11.02.2020
*/

toutModifier.addEventListener('change', toutSelectionner);

function toutSelectionner() {

    nbrImages = tbody.childNodes.length;
    for (i = 0; i < nbrImages; i++) {

        if (this.checked) {
            //  cool.children[0].children[2].children[0].textContent = "ne rien Modifier";
            tbody.rows[i].cells[5].children[3].checked = true;

        } else {

            //  cool.children[0].children[2].children[0].textContent = "Tout Modifier";
            tbody.rows[i].cells[5].children[3].checked = false;
            // alert(tbody.rows[i].cells[0]);
        }
    }
}

