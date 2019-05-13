<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FormPackage extends Model
{
  protected $primaryKey = 'id';
  protected $fillable = [
    'codepackage',
    'namepackage',
    'destination',
    'price',
    'departure_time'
  ];

  public function FormBooking(){
    return $this->belongsTo('app/FormBooking');
  }
}
