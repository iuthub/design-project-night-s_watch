<?php

namespace Chatty;

use Illuminate\Database\Eloquent\Model;

class Dish extends Model
{
  protected $table = 'dishes';
    protected $fillable = array('names', 'body', 'cover_image');
}
