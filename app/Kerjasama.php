<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kerjasama extends Model
{
    //
    protected $table = 'tbl_kerjasamas';
    protected $primaryKey = 'id';
    public $incrementing = true;
    public $timestamps = true;
}
