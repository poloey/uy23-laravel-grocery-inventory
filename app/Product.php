<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
  protected $guarded = [];
  public function sales () {
    return $this->hasMany(Sale::class);
  }
}
