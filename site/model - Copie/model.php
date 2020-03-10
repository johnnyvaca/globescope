<?php
function getImages()
{
    return json_decode(file_get_contents('model/data/images.json'), true); // by default, return everything as an associative array;
}

