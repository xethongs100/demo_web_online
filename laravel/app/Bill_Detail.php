<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bill_Detail extends Model
{
    //
    protected $table = 'bill_detail';
    protected $fillable = ['id','id_bill','id_product','qty','price'];
}
