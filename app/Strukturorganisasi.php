<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Strukturorganisasi extends Model
{
    //
    protected $table = 'tbl_str_organisasis';
    protected $primaryKey = 'id';
    public $incrementing = true;
    public $timestamps = true;
}
