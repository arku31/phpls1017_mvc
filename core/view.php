<?php

namespace App;

class View
{
    public function render(String $filename, array $data)
    {
        require_once __DIR__."/../views/".$filename.".php";
    }
}

