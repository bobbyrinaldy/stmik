<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kemahasiswaan extends Model
{
    //
    protected $table = 'tbl_organisasis';
    protected $primaryKey = 'id';
    public $incrementing = true;
    public $timestamps = true;
}
