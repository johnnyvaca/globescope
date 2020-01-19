<?php

//Get JSON Params
$obj = json_decode($_POST["x"], false);

$res = json_decode(file_get_contents('data/images.json')); // by default, return everything

$query = "";
    if (isset($_POST['Mode']))
    {
        $mode = $_POST["Mode"];

        if ($mode == "search")
        {
            foreach ($res as $key => $image)
                if (!strpos($image->Pseudo,$obj->Pseudo)) // no match
                    unset($res[$key]);                   // remove from resultset
        } else if ($mode == "click")
        {
            foreach ($res as $key => $image)
                if ($image->IDPlace == $obj->ID) // found it
                {
                    $res = [$image];
                    break; // no need to continue
                }
        } else if ($mode == "load")
        {
            // do nothing: we return all
        } else
        {
            $res=null;
        }
    }
    echo json_encode($res);
?>
