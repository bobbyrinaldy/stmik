<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sertifikasi extends Model
{
    //
    protected $table = 'tbl_sertifikasis';
    protected $primaryKey = 'id';
    public $incrementing = true;
    public $timestamps = true;
}
