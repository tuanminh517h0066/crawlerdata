<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Header extends Model
{
    //
    protected $table = 'header';
    public $primaryKey = 'id_header';
    public $timestamps = true;

    public function product()
  {
      return $this->hasOne('App\Product');
  }
}
