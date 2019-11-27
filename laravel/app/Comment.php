<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Comment extends Model
{
    //
    use SoftDeletes;
    protected $table = 'comment';
    protected $fillable = ['id','id_user','id_pro','id_type','name','comment','date'];
    protected $dates = ['deleted_at'];
}
