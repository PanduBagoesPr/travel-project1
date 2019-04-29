<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FormCustomer extends Model
{
    protected $fillable = [
        'name',
        'datebirth',
        'address',
        'telp',
        'city',
        'province'
      ];
}
