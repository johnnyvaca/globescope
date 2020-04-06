

<?php


//Auteurs : Kevin Vaucher et Johnny Vaca
//Projet : Projet Web Globescope
//Date : 16.03.2020

     // by default, return everything as an associative array;



//Get JSON Params
function coc(){
    return json_decode(file_get_contents('data/images.json'), true);
}

$data = coc();
$obj = json_decode($_POST['x'], false);

$query = "";
if (isset($_POST['Mode'])) {
    $mode = $_POST['Mode'];
    if ($mode == "search") {
        $pattern = "/{$obj->Pseudo}/i";
        $res = [];
        foreach ($data as $image)
            if (preg_match($pattern, $image['Pseudo'])) // match
                $res[] = $image;
    } else if ($mode == "click") {
        foreach ($data as $key => $image) {
            if ($image['IDPlace'] == $obj->ID) // found it
            {
                $res = $image;
                break; // no need to continue
            }
        }
    } else if ($mode == "load") {
        $res = $data;
    }

}
echo json_encode($res);