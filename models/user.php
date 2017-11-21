<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    public $timestamps = true;

//    protected $fillable = ['name'];
    protected $guarded = ['id'];

//    protected $primaryKey = "user_id";
}
