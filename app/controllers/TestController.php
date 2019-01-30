<?php

namespace app\contollers;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of TestController
 *
 * @author Muhammed Alsaied
 */
class TestController {

    public function index() {
        dd($_GET['de']);
    }

}
