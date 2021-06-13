<?php

namespace Church\app;

class upload{


    private function verify_dir_create(){
        $dirUploads = "downimage";

        if (!is_dir($dirUploads)) {
           mkdir($dirUploads);
           return basename($_SERVER['DOCUMENT_ROOT']. DIRECTORY_SEPARATOR . $dirUploads);
        }
    }


    public function add_image($file){

        if ($file['error']) {

            throw new \Exception("Error: ".$file['error']);		
    
        }

        $PATH = $this->verify_dir_create . $file['name'];

        if (move_uploaded_file($file["tmp_name"],$PATH)) {
            return  $PATH;
        }
    }
}