<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Bill extends Model
{
    //
    use SoftDeletes;
    protected $table = 'bill';
    protected $fillable = ['id','id_user','id_pro','name','unit','img','price','qty','total','note','date','payment'];
    protected $dates = ['deleted_at'];
}
