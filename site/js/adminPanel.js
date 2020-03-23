/*
Auteurs : Kevin Vaucher et Johnny Vaca
Projet : Projet WEB sur Globescope pour le cours Projet WEB
Date : 11.02.2020
*/

/*
window.addEventListener('load',monScript);

function monScript() {

}
*/
function toutSelectionner() {

    nbrImages = tbody.childNodes.length;
    for (i = 0; i < nbrImages; i++) {

        if (this.checked) {
            cool.children[1].textContent = "ne rien Modifier";
            tbody.rows[i].cells[5].children[3].checked = true;

        } else {

            cool.children[1].textContent = "Tout Modifier";
            tbody.rows[i].cells[5].children[3].checked = false;

        }
    }
}

function changeValueSelect() {
    return selectPseudo.value;

}

var i = 0;

function cargarUsuarios() {
    tbody.innerHTML = "";
    fetch('model/data/images.json')
        .then(reponse => reponse.json())
        .then(images => {
            images.forEach(image => {

                Pseudo1 = changeValueSelect();
                if (Pseudo1 == "avec") {
                    if (image.Pseudo != "") {
                        //       console.log(image.Pseudo);

                        imgTd = document.createElement('img');
                        tdImage = document.createElement('td');
                        tdPseudo = document.createElement('td');
                        tdPays = document.createElement('td');
                        tdSlogan = document.createElement('td');
                        tdDroit = document.createElement('td');
                        trPaire = document.createElement('tr');

                        scrImg = "images/128-128/" + image.IDImage + ".png";
                        imgTd.setAttribute("src", scrImg);
                        imgTd.setAttribute("alt", "image");
                        if (i % 2 == 0) {
                            trPaire.className = "bg-success";
                        } else {
                            trPaire.className = "bg-danger";
                        }
                        tdImage.appendChild(imgTd);

                        tdPseudo.innerHTML = "<b><span>Pseudo</span></b><br><br><span>" + image.Pseudo + "</span>";
                        tdPays.innerHTML = "<b><span>Pays</span></b><br><br><span>" + image.Pays + "</span>";
                        tdSlogan.innerHTML = "<b><span>Slogan</span></b><br><br><span>" + image.Slogan + "</span>";
                        tdDroit.innerHTML = "<b><span>Droit</span></b><br><br><span>" + image.Droit + "</span>";

                        trPaire.appendChild(tdImage);
                        trPaire.appendChild(tdPseudo);
                        trPaire.appendChild(tdPays);
                        trPaire.appendChild(tdSlogan);
                        trPaire.appendChild(tdDroit);
                        tbody.appendChild(trPaire);
                        i++;


                    }
                }


            })
        })
}

function changeSelects() {


        return sortie
}

function allSelects() {
    tableau = ['Sans', 'Avec', 'Tous'];
    entree = 'Sans';
    if (entree === tableau[0]) {
        alert("OK");
    }
}

toutModifier.addEventListener('change', toutSelectionner);
selectPseudo.addEventListener('change', changeSelects);
selectDroit.addEventListener('change', changeSelects);
selectPays.addEventListener('change', changeSelects);
selectVille.addEventListener('change', changeSelects);
selectSlogan.addEventListener('change', changeSelects);
selectEquipe.addEventListener('change', changeSelects);


// cargarUsuarios();


/*

if (Pseudo1 == "avec") {
if (image.Pseudo != "") {


console.log(image.Pseudo);

/*
                        tbody.innerHTML = "";
                        imgTd = document.createElement('img');
                        br1Td = document.createElement('br');
                        br2Td = document.createElement('br');
                        bTd = document.createElement('b');
                        span1Td = document.createElement('span');
                        span2Td = document.createElement('span');
                        tdImage = document.createElement('td');
                        tdPseudo = document.createElement('td');
                        tdPays = document.createElement('td');
                        tdSlogan = document.createElement('td');
                        tdDroit = document.createElement('td');
                        trPaire = document.createElement('tr');
                        scrImg = "images/128-128/" + image.IDImage;

                        imgTd.setAttribute("src", "images/128-128/" + image.IDImage+".png");
                        imgTd.setAttribute("alt", "image");


                        if (i % 2 == 0) {
                            trPaire.className = "bg-success";
                            console.log("a");
                        } else {
                            trPaire.className = "bg-danger";
                        }


                        tdImage.appendChild(imgTd);

                        span2Td.innerText = image.Pseudo;

                        bTd.appendChild(span1Td);

                        tdPseudo.appendChild(bTd);
                        tdPseudo.appendChild(br1Td);
                        tdPseudo.appendChild(br2Td);
                        tdPseudo.appendChild(span2Td);


                        tdPays.appendChild(bTd);
                        tdPays.appendChild(br1Td);
                        tdPays.appendChild(br2Td);
                        tdPays.appendChild(span2Td);

                        trPaire.appendChild(tdImage);
                        trPaire.appendChild(tdPseudo);
                        trPaire.appendChild(tdPays);
                        trPaire.appendChild(tdSlogan);
                        trPaire.appendChild(tdDroit);
                        tbody.appendChild(trPaire);


                        //   console.log(image.Pseudo);
                       // console.log(i);
                        i++;


}

} else if (Pseudo1 == "sans") {
if (image.Pseudo == "") {
//      console.log(image.Pseudo);
}

} else if (Pseudo1 == "tous") {
//  console.log(image.Pseudo);
}
*/
