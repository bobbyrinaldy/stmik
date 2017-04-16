<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class If extends Model
{
    //
    protected $table = 'tbl_ifs';
    protected $primaryKey = 'id';
    public $incrementing = true;
    public $timestamps = false;
}
