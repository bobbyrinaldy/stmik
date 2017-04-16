<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Testimoni extends Model
{
    protected $table = 'tbl_testimonis';
    protected $primaryKey = 'id';
    public $incrementing = true;
    public $timestamps = false;
}
