<?php

namespace App;

class Main extends MainController
{
    public function index()
    {
        $data = ['digits' => [1,2,3,4,5]];
        $this->view->renderTwig('index', $data);
    }
}