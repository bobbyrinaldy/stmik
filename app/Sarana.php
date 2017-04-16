<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sarana extends Model
{
    //
    protected $table = 'tbl_sarana_prasaranas';
    protected $primaryKey = 'id';
    public $incrementing = true;
    public $timestamps = false;
}
