<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Visimisi extends Model
{
    //
    protected $table = 'tbl_visimisis';
    protected $primaryKey = 'id';
    public $incrementing = true;
    public $timestamps = false;
}
