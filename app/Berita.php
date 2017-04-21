<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    //
    protected $table = 'tbl_beritas';
    protected $primaryKey = 'id';
    public $incrementing = true;
    public $timestamps = true;
}