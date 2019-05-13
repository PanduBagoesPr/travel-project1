<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FormCustomer extends Model
{  
  protected $primaryKey = 'id';
  protected $fillable = [
    'name',
    'datebirth',
    'address',
    'telp',
    'city',
    'province'
  ];

  public function FormBooking(){
    return $this->belongsTo('app/FormBooking');
  }
}
