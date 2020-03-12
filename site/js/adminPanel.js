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
i = 0;
function cargarUsuarios() {

    fetch('model/data/images.json')
        .then(reponse => reponse.json())

        .then(images => {
            images.forEach(image => {

                Pseudo1 = changeValueSelect();

            });
        })
    return images;
}


selectPseudo.addEventListener('change', cargarUsuarios);

function changeValueSelect() {
    var selected = this.value;

    //   console.log(selectPseudo.value);
   // return selectPseudo.value;
}
$(#selectPseudo).on("change",function () {
    var selected = this.value;
    if(selected != "tous"){
        console.log("helo");
        alert("coucou");
        rows.filter("").show();
    }else{
        rows.show();
        addRemoveClass(rows);
    }

})
function addRemoveClass(theRows) {
    theRows.removeClass("bg-success bg-danger");
    theRows.filter(":bg-success").addClass("bg-success");
    theRows.filter(":bg-danger").addClass("bg-danger");
}
var rows = $("table#myTable tr:not(:first-child)");
addRemoveClass(rows);

col = cargarUsuarios();



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
