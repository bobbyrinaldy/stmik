<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carousel extends Model
{
  protected $table = 'tbl_carousel';
  protected $primaryKey = 'id';
  public $incrementing = true;
  public $timestamps = true;
}
