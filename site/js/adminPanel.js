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

function cargarUsuarios() {
    fetch('model/data/images.json')
        .then(reponse => reponse.json())

        .then(images => {
            images.forEach(image => {

                 Pseudo = changeValueSelect();
                if (Pseudo == "avec"){
                    if(image.Pseudo != ""){
                            
                        console.log(image.Pseudo);

                    }

                }else if(Pseudo == "sans"){
                    if(image.Pseudo == ""){
                        console.log(image.Pseudo);
                    }

                }else if(Pseudo == "tous"){
                    console.log(image.Pseudo);
                }

            });
        })
}

selectPseudo.addEventListener('change',cargarUsuarios);
function changeValueSelect() {
 //   console.log(selectPseudo.value);
    return selectPseudo.value;
}
cargarUsuarios();
