<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sejarah extends Model
{
    //
    protected $table = 'tbl_sejarahs';
    protected $primaryKey = 'id';
    public $incrementing = true;
    public $timestamps = false;
}
