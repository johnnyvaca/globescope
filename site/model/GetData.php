<?php

function getImages(){
    return  json_decode(file_get_contents('data/images.json'),true); // by default, return everything as an associative array;
}
//Get JSON Params

    $data = getImages();
    $obj = json_decode($_POST['x'], false);

    $query = "";
    if (isset($_POST['Mode']))
    {
        $mode = $_POST['Mode'];
        if ($mode == "search")
        {
            $pattern = "/{$obj->Pseudo}/i";
            $res = [];
            foreach ($data as $image)
                if (preg_match($pattern, $image['Pseudo'])) // match
                    $res[] = $image;
        } else if ($mode == "click")
        {
            foreach ($data as $key => $image)
            {
                if ($image['IDPlace'] == $obj->ID) // found it
                {
                    $res = $image;
                    break; // no need to continue
                }
            }
        } else if ($mode == "load")
        {
            $res = $data;
        }

    }
echo json_encode($res);


?>
