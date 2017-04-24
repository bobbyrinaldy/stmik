<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
  protected $table = 'tbl_gallerys';
  protected $primaryKey = 'id';
  public $incrementing = true;
  public $timestamps = true;
}
