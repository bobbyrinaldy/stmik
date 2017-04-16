<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Si extends Model
{
    //
    protected $table = 'tbl_sis';
    protected $primaryKey = 'id';
    public $incrementing = true;
    public $timestamps = false;
}
