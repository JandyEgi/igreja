<?php

namespace Church\app;

class upload{

    public function add_image($file,$location){

        if ($file["image"]['error']) {

            throw new \Exception("Error: ".$file["image"]['error']);		
    
        }

        $PATH = "admin" 
        .DIRECTORY_SEPARATOR.
        "res"
        .DIRECTORY_SEPARATOR.
        "site"
        .DIRECTORY_SEPARATOR.
        "images"
        .DIRECTORY_SEPARATOR.
        "$location"
        .DIRECTORY_SEPARATOR.
        $file["image"]['name'];

        if (move_uploaded_file($file["image"]["tmp_name"],$PATH)) {
            return  $PATH;
        }
    }
}