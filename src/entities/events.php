<?php

namespace Church\entities;

use Church\app\upload;
use Church\conexao\db;

class events extends Models{

    private $upload_image;
    private $db_query;

    public function __construct(upload $upload,db $db)
    {
        $this->upload_image = $upload;
        $this->db_query = $db;
    }

    public function add_events_igreja(){
        $create = $this->db_query->select("INSERT INTO tb_events(name,description,image) VALUES(:name,:description,:image)",
        array(
            ":name"=>$this->getname(),
            ":description"=>$this->getdescription(),
            ":image"=>$this->upload_image->add_image($this->getimage()),
        ));
    }

}