<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FormBooking extends Model
{
    protected $fillable = [
        'codebooking',
        'form_package_id',
        'form_customer_id'
      ];

    public function FormCustomer(){
    return $this->hasMany('app/FormCustomer');
  }

    public function FormPackage(){
    return $this->hasMany('app/FormPackage');
  }
}

