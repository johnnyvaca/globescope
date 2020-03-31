/*
Auteurs : Kevin Vaucher et Johnny Vaca
Projet : Projet WEB sur Globescope pour le cours Projet WEB
Date : 11.02.2020
*/


window.addEventListener('load', monScript);

i = 0

function monScript() {
    /*
    $(document).ready(function(){
    $("#search").on("keyup", function() {
        console.log("change");
        var value = $(this).val().toLowerCase();
        $("#tbody tr").filter(function() {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
    });
}); */
    nbrImages = tbody.childNodes.length;
console.log(  $("tbody#tbody").has("td"))

    $("#search1").keyup(function () {
     //   console.log(search1.value);
        for (b = 0; b < nbrImages; b++) {
            textPseudo = $("tbody#tbody").find("tr").eq(b).find("td").eq(1).find("span").eq(1).text();
            textPays = $("tbody#tbody").find("tr").eq(b).find("td").eq(2).find("span").eq(1).text();
            textVille = $("tbody#tbody").find("tr").eq(b).find("td").eq(3).find("span").eq(1).text();
            textEquipe = $("tbody#tbody").find("tr").eq(b).find("td").eq(4).find("span").eq(1).text();
            textDroit = $("tbody#tbody").find("tr").eq(b).find("td").eq(5).find("span").eq(1).text();
            textSlogan = $("tbody#tbody").find("tr").eq(b).find("td").eq(6).find("span").eq(1).text();

            textComplet = [textPseudo, textPays, textVille, textEquipe, textDroit, textSlogan];
   //         console.log(textComplet);
            if (textComplet.indexOf(search1.value) === -1) {
                $("tbody#tbody").find("tr").eq(b).addClass("search");
                $("tbody#tbody").find("tr").eq(b).find("td").eq(7).find("input").eq(0).attr('checked', false);
            } else {
                //    console.log($("#search1").val());
                $("tbody#tbody").find("tr").eq(i).removeClass("search");
            }


    }
    });

    bouton.disabled = true;
    /*
        changeSelectsPseudo();
        changeSelectsPays();
        changeSelectsVille();
        changeSelectsEquipe();
        changeSelectsDroit();
        changeSelectsSlogan();
    */
    toutModifier.addEventListener('change', toutSelectionner);
    selectPseudo.addEventListener('change', changeSelectsPseudo);
    selectDroit.addEventListener('change', changeSelectsDroit);
    selectPays.addEventListener('change', changeSelectsPays);
    selectVille.addEventListener('change', changeSelectsVille);
    selectSlogan.addEventListener('change', changeSelectsSlogan);
    selectEquipe.addEventListener('change', changeSelectsEquipe);

}

/*
$( "#search1" ).keyup(function() {
    alert("keyup");
});
$('#search1').keydown(function(){
    alert("keydown");
});

$('#search1').keypress(function(){
   alert("keypress");
});

 */
function toutSelectionner() {
    nbrImages = tbody.childNodes.length;
    for (i = 0; i < nbrImages; i++) {

        if (this.checked) {
            cool.children[1].textContent = "ne rien Modifier";
            tbody.rows[i].cells[7].children[3].checked = true;
            bouton.disabled = false;
        } else {
            bouton.disabled = true;
            cool.children[1].textContent = "Tout Modifier";
            tbody.rows[i].cells[7].children[3].checked = false;
        }


        element = document.querySelector("#tbody").children;
        if (element[i].classList.contains("pseudo")) {
            tbody.rows[i].cells[7].children[3].checked = false;

        }
        if (element[i].classList.contains("droit")) {
            tbody.rows[i].cells[7].children[3].checked = false;

        }
        if (element[i].classList.contains("pays")) {
            tbody.rows[i].cells[7].children[3].checked = false;

        }
        if (element[i].classList.contains("ville")) {
            tbody.rows[i].cells[7].children[3].checked = false;

        }
        if (element[i].classList.contains("slogan")) {
            tbody.rows[i].cells[7].children[3].checked = false;

        }
        if (element[i].classList.contains("equipe")) {
            tbody.rows[i].cells[7].children[3].checked = false;

        }
        if (element[i].classList.contains("search")) {
            tbody.rows[i].cells[7].children[3].checked = false;

        }

        //      console.log(element[i].classList.contains("hidden"));
        /*
                if(("tbody#tbody").find("tr").eq(i).hasClass("hidden")){
                    //   ("tbody#tbody").find("tr").eq(i).find("td").eq(5).find("input").eq(0).attr('checked', false)
                    alert("OUI");
                }else{
                    alert("NON");
                }*/
    }
    // $("tbody.hidden").prop('checked',false).hasClass("hidden")


}

function changeFilterPseudo() {
    var i = 0;
    fetch('model/data/images.json')
        .then(reponse => reponse.json())
        .then(images => {
            if ("sans" === selectPseudo.value) {
                images.forEach(image => {
                    texte = $("tbody#tbody").find("tr").eq(i).find("td").eq(1).find("span").eq(1).text()
                    if (image.Pseudo !== "") {

                        if (texte !== "") {
                            $("tbody#tbody").find("tr").eq(i).addClass("pseudo");
                            $("tbody#tbody").find("tr").eq(i).find("td").eq(7).find("input").eq(0).attr('checked', false);
                        }
                    } else {
                        $("tbody#tbody").find("tr").eq(i).removeClass("pseudo");
                    }
                    i++;
                });
            } else if ("avec" === selectPseudo.value) {
                images.forEach(image => {
                    texte = $("tbody#tbody").find("tr").eq(i).find("td").eq(1).find("span").eq(1).text()
                    if (image.Pseudo === "") {
                        if (texte === "") {
                            $("tbody#tbody").find("tr").eq(i).addClass("pseudo");
                            $("tbody#tbody").find("tr").eq(i).find("td").eq(7).find("input").eq(0).attr('checked', false);
                        }
                    } else {
                        $("tbody#tbody").find("tr").eq(i).removeClass("pseudo");
                    }
                    i++;
                });
            } else if ("tous" === selectPseudo.value) {
                images.forEach(image => {
                    $("tbody#tbody").find("tr").eq(i).removeClass("pseudo");
                    $("tbody#tbody").find("tr").eq(i).find("td").eq(7).find("input").eq(0).attr('checked', false);
                    i++;
                });

            }
        });

    toutModifier.checked = false;
}

function changeSelectsPseudo() {
    var i = 0;
    fetch('model/data/images.json')
        .then(reponse => reponse.json())
        .then(images => {
            if ("sans" === selectPseudo.value) {
                images.forEach(image => {
                    texte = $("tbody#tbody").find("tr").eq(i).find("td").eq(1).find("span").eq(1).text()
                    if (image.Pseudo !== "") {

                        if (texte !== "") {
                            $("tbody#tbody").find("tr").eq(i).addClass("pseudo");
                            $("tbody#tbody").find("tr").eq(i).find("td").eq(7).find("input").eq(0).attr('checked', false);
                        }
                    } else {
                        $("tbody#tbody").find("tr").eq(i).removeClass("pseudo");
                    }
                    i++;
                });
            } else if ("avec" === selectPseudo.value) {
                images.forEach(image => {
                    texte = $("tbody#tbody").find("tr").eq(i).find("td").eq(1).find("span").eq(1).text()
                    if (image.Pseudo === "") {
                        if (texte === "") {
                            $("tbody#tbody").find("tr").eq(i).addClass("pseudo");
                            $("tbody#tbody").find("tr").eq(i).find("td").eq(7).find("input").eq(0).attr('checked', false);
                        }
                    } else {
                        $("tbody#tbody").find("tr").eq(i).removeClass("pseudo");
                    }
                    i++;
                });
            } else if ("tous" === selectPseudo.value) {
                images.forEach(image => {
                    $("tbody#tbody").find("tr").eq(i).removeClass("pseudo");
                    $("tbody#tbody").find("tr").eq(i).find("td").eq(7).find("input").eq(0).attr('checked', false);
                    i++;
                });

            }
        });

    toutModifier.checked = false;
    bouton.disabled = true;
}

function changeSelectsPays() {


    var i = 0;

    fetch('model/data/images.json')
        .then(reponse => reponse.json())
        .then(images => {
            if ("sans" === selectPays.value) {
                images.forEach(image => {
                    texte = $("tbody#tbody").find("tr").eq(i).find("td").eq(2).find("span").eq(1).text()
                    if (image.Pays !== "") {

                        if (texte !== "") {
                            $("tbody#tbody").find("tr").eq(i).addClass("pays");
                            $("tbody#tbody").find("tr").eq(i).find("td").eq(7).find("input").eq(0).attr('checked', false);
                        }
                    } else {

                        $("tbody#tbody").find("tr").eq(i).removeClass("pays");
                    }
                    i++;
                });
            } else if ("avec" === selectPays.value) {
                images.forEach(image => {
                    texte = $("tbody#tbody").find("tr").eq(i).find("td").eq(2).find("span").eq(1).text()
                    if (image.Droit === "") {
                        if (texte === "") {
                            $("tbody#tbody").find("tr").eq(i).addClass("pays");
                            $("tbody#tbody").find("tr").eq(i).find("td").eq(7).find("input").eq(0).attr('checked', false);
                        }
                    } else {
                        $("tbody#tbody").find("tr").eq(i).removeClass("pays");
                    }
                    i++;
                });
            } else if ("tous" === selectPays.value) {
                images.forEach(image => {
                    $("tbody#tbody").find("tr").eq(i).removeClass("pays");
                    $("tbody#tbody").find("tr").eq(i).find("td").eq(7).find("input").eq(0).attr('checked', false);
                    i++;
                });

            } else {
                images.forEach(image => {
                    texte = $("tbody#tbody").find("tr").eq(i).find("td").eq(2).find("span").eq(1).text()
                    if (image.Pays === selectPays.value) {
                        $("tbody#tbody").find("tr").eq(i).removeClass("pays");
                    } else {
                        if (texte !== selectPays.value) {
                            $("tbody#tbody").find("tr").eq(i).addClass("pays");
                            $("tbody#tbody").find("tr").eq(i).find("td").eq(7).find("input").eq(0).attr('checked', false);
                        }
                    }
                    i++;
                });
            }
        });

    toutModifier.checked = false;
}

function changeSelectsVille() {


    var i = 0;

    fetch('model/data/images.json')
        .then(reponse => reponse.json())
        .then(images => {
            if ("sans" === selectVille.value) {
                images.forEach(image => {
                    texte = $("tbody#tbody").find("tr").eq(i).find("td").eq(3).find("span").eq(1).text()
                    if (image.Ville !== "") {

                        if (texte !== "") {
                            $("tbody#tbody").find("tr").eq(i).addClass("ville");
                            $("tbody#tbody").find("tr").eq(i).find("td").eq(7).find("input").eq(0).attr('checked', false);
                        }
                    } else {

                        $("tbody#tbody").find("tr").eq(i).removeClass("ville");
                    }
                    i++;
                });
            } else if ("avec" === selectVille.value) {
                images.forEach(image => {
                    texte = $("tbody#tbody").find("tr").eq(i).find("td").eq(3).find("span").eq(1).text()
                    if (image.Ville === "") {
                        if (texte === "") {
                            $("tbody#tbody").find("tr").eq(i).addClass("ville");
                            $("tbody#tbody").find("tr").eq(i).find("td").eq(7).find("input").eq(0).attr('checked', false);
                        }
                    } else {
                        $("tbody#tbody").find("tr").eq(i).removeClass("ville");
                    }
                    i++;
                });
            } else if ("tous" === selectVille.value) {
                images.forEach(image => {
                    $("tbody#tbody").find("tr").eq(i).removeClass("ville");
                    $("tbody#tbody").find("tr").eq(i).find("td").eq(7).find("input").eq(0).attr('checked', false);
                    i++;
                });

            } else {
                images.forEach(image => {
                    texte = $("tbody#tbody").find("tr").eq(i).find("td").eq(3).find("span").eq(1).text()
                    if (image.Ville === selectVille.value) {
                        $("tbody#tbody").find("tr").eq(i).removeClass("ville");
                    } else {
                        if (texte !== selectVille.value) {
                            $("tbody#tbody").find("tr").eq(i).addClass("ville");
                            $("tbody#tbody").find("tr").eq(i).find("td").eq(7).find("input").eq(0).attr('checked', false);
                        }
                    }
                    i++;
                });
            }
        });

    toutModifier.checked = false;
}

function changeSelectsEquipe() {


    var i = 0;

    fetch('model/data/images.json')
        .then(reponse => reponse.json())
        .then(images => {
            if ("sans" === selectEquipe.value) {
                images.forEach(image => {
                    texte = $("tbody#tbody").find("tr").eq(i).find("td").eq(4).find("span").eq(1).text()
                    if (image.Equipe !== "") {

                        if (texte !== "") {
                            $("tbody#tbody").find("tr").eq(i).addClass("equipe");
                            $("tbody#tbody").find("tr").eq(i).find("td").eq(7).find("input").eq(0).attr('checked', false);
                        }
                    } else {

                        $("tbody#tbody").find("tr").eq(i).removeClass("equipe");
                    }
                    i++;
                });
            } else if ("avec" === selectEquipe.value) {
                images.forEach(image => {
                    texte = $("tbody#tbody").find("tr").eq(i).find("td").eq(4).find("span").eq(1).text()
                    if (image.Equipe === "") {
                        if (texte === "") {
                            $("tbody#tbody").find("tr").eq(i).addClass("equipe");
                            $("tbody#tbody").find("tr").eq(i).find("td").eq(7).find("input").eq(0).attr('checked', false);
                        }
                    } else {
                        $("tbody#tbody").find("tr").eq(i).removeClass("equipe");
                    }
                    i++;
                });
            } else if ("tous" === selectEquipe.value) {
                images.forEach(image => {
                    $("tbody#tbody").find("tr").eq(i).removeClass("equipe");
                    $("tbody#tbody").find("tr").eq(i).find("td").eq(7).find("input").eq(0).attr('checked', false);
                    i++;
                });

            } else {
                images.forEach(image => {
                    texte = $("tbody#tbody").find("tr").eq(i).find("td").eq(4).find("span").eq(1).text()
                    if (image.Equipe === selectEquipe.value) {
                        $("tbody#tbody").find("tr").eq(i).removeClass("equipe");
                    } else {
                        if (texte !== selectEquipe.value) {
                            $("tbody#tbody").find("tr").eq(i).addClass("equipe");
                            $("tbody#tbody").find("tr").eq(i).find("td").eq(7).find("input").eq(0).attr('checked', false);
                        }
                    }
                    i++;
                });
            }
        });

    toutModifier.checked = false;
}

function changeSelectsDroit() {


    var i = 0;

    fetch('model/data/images.json')
        .then(reponse => reponse.json())
        .then(images => {
            if ("sans" === selectDroit.value) {
                images.forEach(image => {
                    texte = $("tbody#tbody").find("tr").eq(i).find("td").eq(5).find("span").eq(1).text()
                    if (image.Droit !== "") {

                        if (texte !== "") {
                            $("tbody#tbody").find("tr").eq(i).addClass("droit");
                            $("tbody#tbody").find("tr").eq(i).find("td").eq(7).find("input").eq(0).attr('checked', false);
                        }
                    } else {

                        $("tbody#tbody").find("tr").eq(i).removeClass("droit");
                    }
                    i++;
                });
            } else if ("avec" === selectDroit.value) {
                images.forEach(image => {
                    texte = $("tbody#tbody").find("tr").eq(i).find("td").eq(5).find("span").eq(1).text()
                    if (image.Droit === "") {
                        if (texte === "") {
                            $("tbody#tbody").find("tr").eq(i).addClass("droit");
                            $("tbody#tbody").find("tr").eq(i).find("td").eq(7).find("input").eq(0).attr('checked', false);
                        }
                    } else {
                        $("tbody#tbody").find("tr").eq(i).removeClass("droit");
                    }
                    i++;
                });
            } else if ("tous" === selectDroit.value) {
                images.forEach(image => {
                    $("tbody#tbody").find("tr").eq(i).removeClass("droit");
                    $("tbody#tbody").find("tr").eq(i).find("td").eq(7).find("input").eq(0).attr('checked', false);
                    i++;
                });

            } else {
                images.forEach(image => {
                    texte = $("tbody#tbody").find("tr").eq(i).find("td").eq(5).find("span").eq(1).text()
                    if (image.Droit === selectDroit.value) {
                        $("tbody#tbody").find("tr").eq(i).removeClass("droit");
                    } else {
                        if (texte !== selectDroit.value) {
                            $("tbody#tbody").find("tr").eq(i).addClass("droit");
                            $("tbody#tbody").find("tr").eq(i).find("td").eq(7).find("input").eq(0).attr('checked', false);
                        }
                    }
                    i++;
                });
            }
        });

    toutModifier.checked = false;
}

function changeSelectsSlogan() {


    var i = 0;

    fetch('model/data/images.json')
        .then(reponse => reponse.json())
        .then(images => {
            if ("sans" === selectSlogan.value) {
                images.forEach(image => {
                    texte = $("tbody#tbody").find("tr").eq(i).find("td").eq(6).find("span").eq(1).text()
                    if (image.Slogan !== "") {

                        if (texte !== "") {
                            $("tbody#tbody").find("tr").eq(i).addClass("slogan");
                            $("tbody#tbody").find("tr").eq(i).find("td").eq(7).find("input").eq(0).attr('checked', false);
                        }
                    } else {

                        $("tbody#tbody").find("tr").eq(i).removeClass("slogan");
                    }
                    i++;
                });
            } else if ("avec" === selectSlogan.value) {
                images.forEach(image => {
                    texte = $("tbody#tbody").find("tr").eq(i).find("td").eq(6).find("span").eq(1).text()
                    if (image.Slogan === "") {
                        if (texte === "") {
                            $("tbody#tbody").find("tr").eq(i).addClass("slogan");
                            $("tbody#tbody").find("tr").eq(i).find("td").eq(7).find("input").eq(0).attr('checked', false);
                        }
                    } else {
                        $("tbody#tbody").find("tr").eq(i).removeClass("slogan");
                    }
                    i++;
                });
            } else if ("tous" === selectSlogan.value) {
                images.forEach(image => {
                    $("tbody#tbody").find("tr").eq(i).removeClass("slogan");
                    $("tbody#tbody").find("tr").eq(i).find("td").eq(7).find("input").eq(0).attr('checked', false);
                    i++;
                });

            }
        });

    toutModifier.checked = false;
}

{
    changeValuePseudo = [selectPseudo.value];
    changeValueDroit = [selectDroit.value];
    changeValuePays = [selectPays.value];
    changeValueVille = [selectVille.value];
    changeValueSlogan = [selectSlogan.value];
    changeValueEquipe = [selectEquipe.value];
}

