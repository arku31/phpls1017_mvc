<?php

namespace App;

use Illuminate\Database\Capsule\Manager as Capsule;

class MainModel
{
    protected $capsule;

    public function __construct()
    {
        $this->capsule = new Capsule;

        $this->capsule->addConnection([
            'driver' => 'mysql',
            'host' => 'localhost',
            'database' => 'eloquent',
            'username' => 'root',
            'password' => '123',
            'charset' => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix' => '',
        ]);

        $this->capsule->setAsGlobal();
        $this->capsule->bootEloquent();
    }

    public function getUsers()
    {
        return $this->capsule->table('users')
            ->whereIn('id', [1,4])
            ->where('name', 'LIKE', 'asd%')
            ->get();
    }
}