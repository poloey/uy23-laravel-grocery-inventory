<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
  protected $guarded = [];
  protected $appends = ['total'];
  public function getTotalAttribute() {
      return $this->price * $this->quantity;
  }
  public function product() {
    return $this->belongsTo(Product::class);
  }
}
