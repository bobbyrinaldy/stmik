<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Btk extends Model
{
    //
    protected $table = 'tbl_btks';
    protected $primaryKey = 'id';
    public $incrementing = true;
    public $timestamps = true;
}
