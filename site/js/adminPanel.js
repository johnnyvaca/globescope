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


// Helper function: returns rows that meet the condition in the 3
// select boxes. The optional arguments can specify one of the select boxes
// and which value to use instead of the selected value in that select box




function getRows(override, value) {
    var filter = "table tbody tr .classDroit";
    $("#selectPseudo").each(function() {
        var test = this === override ? value : $(this).val();
        if (test !== "tous") filter += ":contains(" + test + ")";
    });
    return $(filter).parent();
}

$('#selectPseudo').on('change', function() {9
    $('table tbody tr .classDroit').hide();
    getRows().show();

    $('#selectPseudo').each(function (i, select) {
        $('option', this).each(function () {
            $(this).toggle(getRows(select, $(this).text()).length > 0);
        });
    });


});

/*
 *
function getRows(override, value) {
    var filter = "table tbody tr td";
    $("#selectPseudo").each(function() {
        var test = this === override ? value : $(this).val();
        if (test !== "tous") filter += ":contains(" + test + ")";
    });
    return $(filter).parent();
}

$('#selectPseudo').on('change', function() {
    $('table tbody tr td').hide();
    getRows().show();

    $('#selectPseudo').each(function (i, select) {
        $('option', this).each(function () {
            $(this).toggle(getRows(select, $(this).text()).length > 0);
        });
    });


});

 function getRows(override, value) {
    var filter = "table tbody tr td";
    $("#A,#B,#C").each(function() {
        var test = this === override ? value : $(this).val();
        if (test !== "Toate") filter += ":contains(" + test + ")";
    });
    return $(filter).parent();
}

 $('#A,#B,#C').on('change', function() {
    $('table tbody tr').hide();
    getRows().show();
    $('#A,#B,#C').each(function (i, select) {
        $('option', this).each(function () {
            $(this).toggle(getRows(select, $(this).text()).length > 0);
        });
    });
});
 */


// FUNCION PARA FILTRAR POR SELECT TIPO EQUIPO
/*
////////   https://stackoverflow.com/questions/45990106/filter-table-with-three-select-inputs-using-jquery
$(document).ready(function($) {
    $('table').show();
    $('#selectPseudo').change(function() {
        $('table').show();
        var selection = $(this).val();
        if (selection === 'tous') {
            $('tr').show();
        }
        else {
            var dataset = $('#myTable .tbody').find('tr');
            // show all rows first
            dataset.show();
        }
        // filter the rows that should be hidden
        dataset.filter(function(index, item) {
            return $(item).find('#third-child').text().split(',').indexOf(selection) === -1;
        }).hide();
    });
});

// FUNCION PARA FILTRAR POR SELECT MARCA
$(document).ready(function($) {
    $('table').show();
    $('#marca_eq').change(function() {
        $('table').show();
        var selection = $(this).val();
        if (selection === '-Todas-') {
            $('tr').show();
        }
        else {
            var dataset = $('#teq .contenidobusqueda').find('tr');
            // show all rows first
            dataset.show();
        }
        // filter the rows that should be hidden
        dataset.filter(function(index, item) {
            return $(item).find('#fourth-child').text().split(',').indexOf(selection) === -1;
        }).hide();
    });
});
*/

// toutModifier.addEventListener('change', toutSelectionner);

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
    /*
        fetch('model/data/images.json')
            .then(reponse => reponse.json())

            .then(images => {
                images.forEach(image => {

                    Pseudo1 = changeValueSelect();

                });
            })
        return images;
        */

    selected = changeValueSelect();
    if (selected === "avec") {
        alert("hello");
        rows.filter("").show();
    } else {
        rows.show();
        addRemoveClass(rows);
    }
}

toutModifier.addEventListener('change', toutSelectionner);

selectPseudo.addEventListener('change', cargarUsuarios);
/*
function changeValueSelect() {
return selectPseudo.value
    ;
}
$(#selectPseudo).on("change",function () {
    var selected = this.value;
    if(selected == "avec"){
            alert("hello");
        rows.filter("").show();
    }else{
        rows.show();
        addRemoveClass(rows);
    }

})
*/
/*
function addRemoveClass(theRows) {
    theRows.removeClass("bg-success bg-danger");
    theRows.filter(":bg-success").addClass("bg-success");
    theRows.filter(":bg-danger").addClass("bg-danger");
}
var rows = $("table#myTable tr:not(:first-child)");
addRemoveClass(rows);
*/
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
