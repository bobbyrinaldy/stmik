<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Beranda extends Model
{
    //
    protected $table = 'tbl_mainhome';
    protected $primaryKey = 'id';
    public $incrementing = true;
    public $timestamps = true;
}
