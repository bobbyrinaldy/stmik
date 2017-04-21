<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Beasiswa extends Model
{
    //
	protected $table = 'tbl_beasiswas';
    protected $primaryKey = 'id';
    public $incrementing = true;
    public $timestamps = true;
}
