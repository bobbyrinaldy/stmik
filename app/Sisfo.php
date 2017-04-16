<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sisfo extends Model
{
    //
    protected $table = 'tbl_sisfo_akademiks';
    protected $primaryKey = 'id';
    public $incrementing = true;
    public $timestamps = false;
}
