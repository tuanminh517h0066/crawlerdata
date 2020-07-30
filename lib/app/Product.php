<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $table = 'product';
    public $primaryKey = 'id';
    protected $fillable = ['title', 'old_price', 'new_price', 'percent', 'next_page','thumbnail' ];
    
    

}
