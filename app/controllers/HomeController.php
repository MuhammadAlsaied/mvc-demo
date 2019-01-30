<?php

namespace app\contollers;
use core\database\QueryBuilder;
class HomeController {

    public function index() {
        $qb = new QueryBuilder();
        $tasks = $qb->all("taske");
        view('home')->with("tasks", $tasks);
    }

}
