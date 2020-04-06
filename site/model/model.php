

<?php
//Auteurs : Kevin Vaucher et Johnny Vaca
//Projet : Projet Web Globescope
//Date : 16.03.2020
function getImages()
{
    return json_decode(file_get_contents('model/data/images.json'), true); // by default, return everything as an associative array;
}


function putSnow($tableau)
{
    $file = 'model/data/images.json';
    $json_string = json_encode($tableau);
    file_put_contents($file, $json_string);
}