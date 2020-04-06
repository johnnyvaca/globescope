/*
Auteurs : Kevin Vaucher et Johnny Vaca
Projet : Projet WEB sur Globescope pour le cours Projet WEB
Date : 11.02.2020
*/


window.addEventListener('load', monScript);

i = 0

function monScript() {


    toutModifier.addEventListener('change', toutSelectionner);

    selectPseudo.addEventListener('change', changeSelectsPseudo);
    selectDroit.addEventListener('change', changeSelectsDroit);
    selectVille.addEventListener('change', changeSelectsVille);
    selectEquipe.addEventListener('change', changeSelectsEquipe);
    selectPays.addEventListener('change', changeSelectsPays);
    selectSlogan.addEventListener('change', changeSelectsSlogan);
    //bouton.disabled = true;

    nbrImages = tbody.childNodes.length;
    /*    for (i = 0; i < nbrImages; i++) {
          eco = "check" + i;
          coco = document.getElementById("check" + i);
      //    console.log(coco);
          coco.addEventListener('change', selectionne);






      /*
          selectPseudo.addEventListener('change', filterPseudo());
          selectDroit.addEventListener('change', filterPays);
          selectVille.addEventListener('change', filterVille);
          selectEquipe.addEventListener('change', filterEquipe);
          selectPays.addEventListener('change', filterDroit);
          selectSlogan.addEventListener('change', filterSlogan);
      */
}

function filtrer() {
    /*
    changeSelectsPseudo()
    changeSelectsPays()
    changeSelectsVille()
    changeSelectsEquipe()
    changeSelectsDroit()
    changeSelectsSlogan()


    selectPseudo.addEventListener('change', changeSelectsPseudo);
    selectDroit.addEventListener('change', changeSelectsPays);
    selectVille.addEventListener('change', changeSelectsVille);
    selectEquipe.addEventListener('change', changeSelectsEquipe);
    selectPays.addEventListener('change', changeSelectsDroit);
    selectSlogan.addEventListener('change', changeSelectsSlogan);
*/
}

function toutSelectionner() {
    for (i = 0; i < nbrImages; i++) {

        if (this.checked) {
            cool.children[0].textContent = "ne rien Modifier";
            tbody.rows[i].cells[7].children[3].checked = true;
            bouton.disabled = false;
        } else {

            cool.children[0].textContent = "Tout Modifier";
            tbody.rows[i].cells[7].children[3].checked = false;
        }
        element = document.querySelector("#tbody").children;
        if (element[i].classList.contains("Pseudo")) {
            tbody.rows[i].cells[7].children[3].checked = false;

        }
        if (element[i].classList.contains("Droit")) {
            tbody.rows[i].cells[7].children[3].checked = false;

        }
        if (element[i].classList.contains("Pays")) {
            tbody.rows[i].cells[7].children[3].checked = false;

        }
        if (element[i].classList.contains("Ville")) {
            tbody.rows[i].cells[7].children[3].checked = false;

        }
        if (element[i].classList.contains("Slogan")) {
            tbody.rows[i].cells[7].children[3].checked = false;

        }
        if (element[i].classList.contains("Equipe")) {
            tbody.rows[i].cells[7].children[3].checked = false;

        }
        if (element[i].classList.contains("Search")) {
            tbody.rows[i].cells[7].children[3].checked = false;

        }
    }
}

function filter(texteSecondaire, elementExiste, elementExistePlus, i,) {

    if (texteSecondaire === "") {

        elementExiste = 0;
    } else {
        elementExiste = 1;
    }
    if (i === 0) {
        tableauReturnPays = [0, elementExiste];
    } else {
        tableauReturnPays[0] = elementExiste;
        if (tableauReturnPays[0] !== tableauReturnPays[1]) {
            elementExiste = 2;
            elementExistePlus = 2;
        }
        tableauReturnPays[1] = tableauReturnPays[0];

    }

    tableau = [elementExiste, elementExistePlus];
    return tableau;
}

function filterContinue(elementExiste, elementExistePlus, idElement, classElement) {
    if (elementExistePlus === 2) {
        elementExiste = elementExistePlus;
    }
    // console.log(elementExiste);
    if (elementExiste === 0) {
        $(idElement).find("option").eq(1).addClass(classElement)
        for (ii = 3; ii < $(idElement).find("option").length; ii++) {
            $(idElement).find("option").eq(ii).addClass(classElement)
        }

    } else if (elementExiste === 1) {
        $(idElement).find("option").eq(2).addClass(classElement)
        for (ii = 3; ii < $(idElement).find("option").length; ii++) {
            $(idElement).find("option").eq(i).removeClass(classElement)
        }
    } else if (elementExiste === 2) {
        $(idElement).find("option").eq(1).addClass(classElement)

        for (ii = 3; ii < $(idElement).find("option").length; ii++) {
            if (1) {

            }
            $(idElement).find("option").eq(ii).addClass(classElement)
        }


    }
}

function changeSelects(value, select, numeroPrincipal) {

    nbrImages = tbody.childNodes.length;
    for (i = 0; i < nbrImages; i++) {
        textePrincipal = $("tbody#tbody").find("tr").eq(i).find("td").eq(numeroPrincipal).find("span").eq(1).text();
        // bouton.disabled = true;



        if ("" === value) {
            $("tbody#tbody").find("tr").eq(i).removeClass(select);
        } else if ("sans" === value) {
            if (textePrincipal !== "") {
                $("tbody#tbody").find("tr").eq(i).addClass(select);
                $("tbody#tbody").find("tr").eq(i).find("td").eq(7).find("input").eq(0).attr('checked', false);


            } else {
                $("tbody#tbody").find("tr").eq(i).removeClass(select);
            }
        } else if ("avec" === value) {
            if (textePrincipal === "") {
                $("tbody#tbody").find("tr").eq(i).addClass(select);
                $("tbody#tbody").find("tr").eq(i).find("td").eq(7).find("input").eq(0).attr('checked', false);
            } else {
                $("tbody#tbody").find("tr").eq(i).removeClass(select);
            }
        } else if ("tous" === value) {
            $("tbody#tbody").find("tr").eq(i).removeClass(select);
            $("tbody#tbody").find("tr").eq(i).find("td").eq(7).find("input").eq(0).attr('checked', false);
        } else {
            if (textePrincipal === value) {
                $("tbody#tbody").find("tr").eq(i).removeClass(select);
            } else {
                $("tbody#tbody").find("tr").eq(i).addClass(select);
                $("tbody#tbody").find("tr").eq(i).find("td").eq(7).find("input").eq(0).attr('checked', false);
            }
        }
    }

//    console.log(tableau);


}


function changeSelectsPseudo() {
    value = selectPseudo.value
    select = "Pseudo";
    numeroPrincipal = 1;
    elementExiste = -1;
    elementExistePlus = -1;
    changeSelects(value, select, numeroPrincipal);

}

function changeSelectsPays() {
    value = selectPays.value
    select = "Pays";
    numeroPrincipal = 2;
    elementExiste = -1;
    elementExistePlus = -1;
    changeSelects(value, select, numeroPrincipal);
}

function changeSelectsVille() {
    value = selectVille.value
    select = "Ville";
    numeroPrincipal = 3;
    elementExiste = -1;
    elementExistePlus = -1;
    changeSelects(value, select, numeroPrincipal);
}

function changeSelectsEquipe() {
    value = selectEquipe.value
    select = "Equipe";
    numeroPrincipal = 4;
    elementExiste = -1;
    elementExistePlus = -1;
    changeSelects(value, select, numeroPrincipal);
}

function changeSelectsDroit() {

    value = selectDroit.value
    select = "Droit";
    numeroPrincipal = 5;
    elementExiste = -1;
    elementExistePlus = -1;
    changeSelects(value, select, numeroPrincipal);

}

function changeSelectsSlogan() {
    value = selectSlogan.value
    select = "Slogan";
    numeroPrincipal = 6;
    elementExiste = -1;
    elementExistePlus = -1;
    changeSelects(value, select, numeroPrincipal);
}


function filtreFilters(value, select, numeroPrincipal, elementExiste, elementExistePlus) {
    recupPseudo = -1;
    recupPays = -1;
    recupVille = -1;
    recupEquipe = -1;
    recupDroit = -1;
    recupSlogan = -1;
    nbrImages = tbody.childNodes.length;
    for (i = 0; i < nbrImages; i++) {
        textePrincipal = $("tbody#tbody").find("tr").eq(i).find("td").eq(numeroPrincipal).find("span").eq(1).text();
        textePseudo = $("tbody#tbody").find("tr").eq(i).find("td").eq(1).find("span").eq(1).text();
        textePays = $("tbody#tbody").find("tr").eq(i).find("td").eq(2).find("span").eq(1).text();
        texteVille = $("tbody#tbody").find("tr").eq(i).find("td").eq(3).find("span").eq(1).text();
        texteEquipe = $("tbody#tbody").find("tr").eq(i).find("td").eq(4).find("span").eq(1).text();
        texteDroit = $("tbody#tbody").find("tr").eq(i).find("td").eq(5).find("span").eq(1).text();
        texteSlogan = $("tbody#tbody").find("tr").eq(i).find("td").eq(6).find("span").eq(1).text();
        if ("sans" === value) {
            if (textePrincipal !== "") {

                //   filter(textePseudo, elementExiste, elementExistePlus, i);
                tableauPseudo = filter(textePseudo, elementExiste, elementExistePlus, i);
                tableauPays = filter(textePays, elementExiste, elementExistePlus, i);
                tableauVille = filter(texteVille, elementExiste, elementExistePlus, i);
                tableauEquipe = filter(texteEquipe, elementExiste, elementExistePlus, i);
                tableauDroit = filter(texteDroit, elementExiste, elementExistePlus, i);
                tableauSlogan = filter(texteSlogan, elementExiste, elementExistePlus, i);

                if (tableauPseudo[1] === 2) {
                    recupPseudo = 2
                }
                tableauPays[1] = recupPseudo;

                if (tableauPays[1] === 2) {
                    recupPays = 2
                }
                tableauPays[1] = recupPays;

                if (tableauVille[1] === 2) {
                    recupVille = 2
                }
                tableauVille[1] = recupVille;

                if (tableauEquipe[1] === 2) {
                    recupEquipe = 2
                }
                tableauEquipe[1] = recupEquipe;

                if (tableauDroit[1] === 2) {
                    recupDroit = 2
                }
                tableauDroit[1] = recupDroit;

                if (tableauSlogan[1] === 2) {
                    recupSlogan = 2
                }
                tableauSlogan[1] = recupSlogan;

            } else {

            }
        } else if ("avec" === value) {
            if (textePrincipal === "") {

            } else {

            }
        } else if ("tous" === value) {

        } else {
            if (textePrincipal === value) {

            } else {

            }
        }
    }

    filterContinue(tableauPseudo[0], tableauPseudo[1], "#selectPseudo", select);
    filterContinue(tableauPays[0], tableauPays[1], "#selectPays", select);
    filterContinue(tableauVille[0], tableauVille[1], "#selectVille", select);
    filterContinue(tableauEquipe[0], tableauEquipe[1], "#selectEquipe", select);
    filterContinue(tableauDroit[0], tableauDroit[1], "#selectDroit", select);
    filterContinue(tableauSlogan[0], tableauSlogan[1], "#selectSlogan", select);
//    console.log(tableau);
}

if (0) {

    function changeSelectsPseudo2() {
        value = selectPseudo.value
        select = "Pseudo";
        numeroPrincipal = 1;
        elementExiste = -1;
        elementExistePlus = -1;
        changeSelects2(value, select, numeroPrincipal, elementExiste, elementExistePlus);
    }

    function changeSelectsPays2() {
        value = selectPays.value
        select = "Pays";
        numeroPrincipal = 2;
        elementExiste = -1;
        elementExistePlus = -1;
        changeSelects2(value, select, numeroPrincipal, elementExiste, elementExistePlus);
    }

    function changeSelectsVille2() {
        value = selectVille.value
        select = "Ville";
        numeroPrincipal = 3;
        elementExiste = -1;
        elementExistePlus = -1;
        changeSelects2(value, select, numeroPrincipal, elementExiste, elementExistePlus);
    }

    function changeSelectsEquipe2() {
        value = selectEquipe.value
        select = "Equipe";
        numeroPrincipal = 4;
        elementExiste = -1;
        elementExistePlus = -1;
        changeSelects2(value, select, numeroPrincipal, elementExiste, elementExistePlus);
    }

    function changeSelectsDroit2() {

        value = selectDroit.value
        select = "Droit";
        numeroPrincipal = 5;
        elementExiste = -1;
        elementExistePlus = -1;
        changeSelects2(value, select, numeroPrincipal, elementExiste, elementExistePlus);

    }

    function changeSelectsSlogan2() {
        value = selectSlogan.value
        select = "Slogan";
        numeroPrincipal = 6;
        elementExiste = -1;
        elementExistePlus = -1;
        changeSelects(value, select, numeroPrincipal, elementExiste, elementExistePlus);
    }

}

function filterPseudo() {
    value = selectPseudo.value;
    select = "Pseudo";
    numeroPrincipal = 1;
    elementExiste = -1;
    elementExistePlus = -1;
    filtreFilters(value, select, numeroPrincipal, elementExiste, elementExistePlus);
}

function filterPays() {
    value = selectPays.value
    select = "Pays";
    numeroPrincipal = 2;
    elementExiste = -1;
    elementExistePlus = -1;
    filtreFilters(value, select, numeroPrincipal, elementExiste, elementExistePlus);
}

function filterVille() {
    value = selectVille.value
    select = "Ville";
    numeroPrincipal = 3;
    elementExiste = -1;
    elementExistePlus = -1;
    filtreFilters(value, select, numeroPrincipal, elementExiste, elementExistePlus);
}

function filterEquipe() {
    value = selectEquipe.value
    select = "Equipe";
    numeroPrincipal = 4;
    elementExiste = -1;
    elementExistePlus = -1;
    filtreFilters(value, select, numeroPrincipal, elementExiste, elementExistePlus);
}

function filterDroit() {

    value = selectDroit.value
    select = "Droit";
    numeroPrincipal = 5;
    elementExiste = -1;
    elementExistePlus = -1;
    filtreFilters(value, select, numeroPrincipal, elementExiste, elementExistePlus);

}

function filterSlogan() {
    value = selectSlogan.value
    select = "Slogan";
    numeroPrincipal = 6;
    elementExiste = -1;
    elementExistePlus = -1;
    filtreFilters(value, select, numeroPrincipal, elementExiste, elementExistePlus);
}