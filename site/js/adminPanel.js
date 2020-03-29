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

changeValuePseudo = [selectPseudo.value];
changeValueDroit = [selectDroit.value];
changeValuePays = [selectPays.value];
changeValueVille = [selectVille.value];
changeValueSlogan = [selectSlogan.value];
changeValueEquipe = [selectEquipe.value];

function changeSelects() {
    changeValuePseudo[1] = changeValuePseudo[0];
    changeValuePseudo[2] = selectPseudo.value;

    changeValueDroit[1] = changeValueDroit[0];
    changeValueDroit[2] = selectDroit.value;

    changeValuePays[1] = changeValuePays[0];
    changeValuePays[2] = selectPays.value;

    changeValueVille[1] = changeValueVille[0];
    changeValueVille[2] = selectVille.value;

    changeValueSlogan[1] = changeValueSlogan[0];
    changeValueSlogan[2] = selectSlogan.value;

    changeValueEquipe[1] = changeValueEquipe[0];
    changeValueEquipe[2] = selectEquipe.value;


    if (changeValuePseudo[1] !== changeValuePseudo[2]) {
        changeValuePseudo[0] = changeValuePseudo[2];
        changeValuePseudo[3] = "Pseudo";
        valueSelected = changeValuePseudo;
    }
    if (changeValueDroit[1] !== changeValueDroit[2]) {
        changeValueDroit[0] = changeValueDroit[2];
        changeValueDroit[3] = "Droit";
        valueSelected = changeValueDroit;
    }
    if (changeValuePays[1] !== changeValuePays[2]) {
        changeValuePays[0] = changeValuePays[2];
        changeValuePays[3] = "Pays";
        valueSelected = changeValuePays;
    }
    if (changeValueVille[1] !== changeValueVille[2]) {
        changeValueVille[0] = changeValueVille[2];
        changeValueVille[3] = "Ville";
        valueSelected = changeValueVille;
    }
    if (changeValueSlogan[1] !== changeValueSlogan[2]) {
        changeValueSlogan[0] = changeValueSlogan[2];
        changeValueSlogan[3] = "Slogan";
        valueSelected = changeValueSlogan;
    }
    if (changeValueEquipe[1] !== changeValueEquipe[2]) {
        changeValueEquipe[0] = changeValueEquipe[2];
        changeValueEquipe[3] = "Equipe";
        valueSelected = changeValueEquipe;
    }

    tableau = ['sans', 'avec', 'tous'];

    $.get("model/data/images.json", function(data){
        for(i = 0;i<data.length;i++){
            console.log(data[i]);
        }
        console.log(valueSelected[3]);
    });

    /*
    if (valueSelected[0] === "sans") {
        fetch('model/data/images.json')
            .then(reponse => reponse.json())
            .then(images => {
             teste = "image.Pseudo";
                images.forEach(image => {
                    if (teste === "") {
                        console.log(image);
                    }
                });
            });
    } else {
        console.clear();
    }


     */
}





/*
    if (valueSelected[0] === "sans") {
        alert("coucou");
        fetch('model/data/images.json')
            .then(reponse => reponse.json())
            .then(images => {
                images.forEach(image => {
                    if (image.valueSelected[3] === "") {
                        console.log(image);
                    }
                });
            });
    } else {
        console.clear();
    }
*/
    // if(tableau.indexOf(valueSelected[0]) !== -1){





toutModifier.addEventListener('change', toutSelectionner);
selectPseudo.addEventListener('change', changeSelects);
selectDroit.addEventListener('change', changeSelects);
selectPays.addEventListener('change', changeSelects);
selectVille.addEventListener('change', changeSelects);
selectSlogan.addEventListener('change', changeSelects);
selectEquipe.addEventListener('change', changeSelects);

function changeValueSelect() {
    return selectPseudo.value;

}

var i = 0;

function cargarUsuarios() {
    tbody.innerHTML = "";

    fetch('model/data/images.json')
        .then(reponse => reponse.json())
        .then(images => {

        });
}

/*            images.forEach(image => {

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

                      })*/


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
