<?php

namespace Church\controllers;

use Church\app\DomainService;
use Church\repository\DatabaseRespositoryEvents;

class EventsControllers{

    private $repository;
    public DatabaseRespositoryEvents $databaserepositoryevents;

    public function __construct()
    {
        $this->databaserepositoryevents = new DatabaseRespositoryEvents();
        $this->repository = new DomainService($this->databaserepositoryevents);
    }

    public function add_events_igreja(){
        return $this->repository->created();
    }

    public function all_events_igreja(){
        return $this->repository->index();
    }

}