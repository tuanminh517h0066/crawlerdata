<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clothe extends Model
{
    //
    protected $table = 'store';
    public $primaryKey = 'id';
    protected $fillable = ['title', 'price', 'page','thumbnail' ];
}
