<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Product extends Model
{
    //
    use SoftDeletes;
    protected $table = 'product';
    protected $fillable = ['id','name','id_type','description','unit_price','promotion_price','image','unit'];
    protected $dates = ['deleted_at'];
}
