<!--
Auteurs : Kevin Vaucher et Johnny Vaca
Projet : Projet WEB sur Globescope pour le cours Projet WEB
Date : 11.02.2020
-->

//document.getElementById("toutModifier").checked = true;


toutModifier.addEventListener( 'change', coucou);
function coucou() {
    if(this.checked) {
        alert("OUI");
    } else {
    alert("NON");
    }

}
console.log(body.innerHTML);