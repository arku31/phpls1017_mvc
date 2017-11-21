<?php

namespace App;

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Capsule\Manager as Capsule;
use Intervention\Image\ImageManagerStatic as Image;

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

    public function resizeImage()
    {
        putenv('GDFONTPATH=' . realpath('.'));
        $image = Image::make('original.png')
            ->resize(null, 200, function ($image) {
                $image->aspectRatio();
            })
            ->rotate(45)
            ->text('watermark', 200, 0, function ($font) {
                $font->file('arial.ttf');
                $font->size(48);
                $font->color('#ccc');
                $font->align('center');
                $font->valign('top');
//                $font->angle(45);
            })
            ->save('images/new.png');

        echo "<img src='/images/new.png'>";
    }
}