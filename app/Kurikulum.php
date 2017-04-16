<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kurikulum extends Model
{
    //
    protected $table = 'tbl_kurikulums';
    protected $primaryKey = 'id';
    public $incrementing = true;
    public $timestamps = false;
}
