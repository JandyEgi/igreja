<?php

require_once("vendor/autoload.php");

use Church\controllers\EventsControllers;
use Slim\App;

$app = new App;

$app->get("/admin/events", function () {
    
    header("location: /Church/admin/events.php");
    exit;
});

$app->get("/admin/events/create", function () {
    header("location: /Church/admin/events-create.php");
    exit;
});

$app->post("/admin/events/create", function () {

    $controller_events = new EventsControllers();

    $controller_events->databaserepositoryevents->setData($_POST);
    $controller_events->databaserepositoryevents->setimage($_FILES);
    
    $controller_events->add_events_igreja();

    header("location: /Church/admin/events/create");
    exit;

});


$app->get("/",function(){

    header("location: /Church/site/index.php");   
    exit;
});


$app->get("/events",function(){

    header("location: /Church/site/eventos.php");   
    exit;
});

$app->get("/gallery",function(){

    header("location: /Church/site/galeria.php");   
    exit;
});

$app->run();
