<?php

namespace App;

class Main extends MainController
{
    public function index()
    {
        $data = ['digits' => [1,2,3,4,5]];



        $data = User::orderBy('id', 'desc')->get()->toArray();

        echo "<pre>";
        print_r($data);
        die();
        $this->view->renderTwig('index', $data);
    }
}