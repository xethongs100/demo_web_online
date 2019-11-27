<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    //
    protected $table = 'customer';
    protected $fillable = ['id','name','gender','email','address','phone_number','note'];
}
