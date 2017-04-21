<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kontak extends Model
{
    //
    protected $table = 'tbl_kontaks';
    protected $primaryKey = 'id';
    public $incrementing = true;
    public $timestamps = true;
}
