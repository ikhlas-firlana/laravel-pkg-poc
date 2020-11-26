<?php

namespace Ifirlana\Poc\Models;

use Illuminate\Database\Eloquent\Model;

class Poc extends Model {

  // Disable Laravel's mass assignment protection
  protected $guarded = [];

  protected $fillable = ['title', 'body' ];
  
}