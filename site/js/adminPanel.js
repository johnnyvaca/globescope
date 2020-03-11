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
            cool.children[1].textContent = "ne rien Modifier";
            tbody.rows[i].cells[5].children[3].checked = true;

        } else {

            cool.children[1].textContent = "Tout Modifier";
            tbody.rows[i].cells[5].children[3].checked = false;

        }
    }
}

const selectCosa = document.querySelector('#tbody')

function cargarUsuarios() {
    i = 0;
    fetch('model/data/images.json')
        .then(reponse => reponse.json())

        .then(images => {
            images.forEach(image => {

                Pseudo1 = changeValueSelect();
                if (Pseudo1 == "avec") {
                    if (image.Pseudo != "") {
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

                        imgTd.setAttribute("src", scrImg);
                        imgTd.setAttribute("alt", "image");


                        if (i % 2 === 0) {
                            trPaire.className = "bg-success";
                        } else {
                            trPaire.className = "bg-danger";
                        }
                        span2Td.innerText = image.Pseudo;

                        tdImage.appendChild(bTd);
                        bTd.appendChild(span1Td);

                        tdPseudo.appendChild(bTd);
                        tdPseudo.appendChild(br1Td);
                        tdPseudo.appendChild(br2Td);

                        trPaire.appendChild(tdPseudo);
                        trPaire.appendChild(tdPays);
                        trPaire.appendChild(tdSlogan);
                        trPaire.appendChild(tdDroit);
                        tbody.appendChild(trPaire);


                        //   console.log(image.Pseudo);
                        console.log(i);
                        i++;
                    }

                } else if (Pseudo1 == "sans") {
                    if (image.Pseudo == "") {
                        //      console.log(image.Pseudo);
                    }

                } else if (Pseudo1 == "tous") {
                    //  console.log(image.Pseudo);
                }

            });
        })
}

selectPseudo.addEventListener('change', cargarUsuarios);

function changeValueSelect() {
    //   console.log(selectPseudo.value);
    return selectPseudo.value;
}

cargarUsuarios();
