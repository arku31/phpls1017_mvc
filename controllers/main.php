<?php

namespace App;

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Capsule\Manager as Capsule;

class Main extends MainController
{
    public function index()
    {
        $data = ['digits' => [1, 2, 3, 4, 5]];

        $data = User::orderBy('id', 'desc')->get()->toArray();

        $this->view->renderTwig('index', $data);
    }

    public function migration()
    {
        Capsule::schema()->create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->text('post_content');
            $table->timestamps();
        });
    }
    public function migration2()
    {
        Capsule::schema()->table('posts', function (Blueprint $table) {
            $table->string('post_title')->nullable();
        });
    }
}