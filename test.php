<?php
require_once("./igrejatool/entities/models.php");
use igrejatool\entities\Models;

$test = new Models();


$test->setData([
    "admin"=>"001"
]);



var_dump(
$test->getadmin()
);