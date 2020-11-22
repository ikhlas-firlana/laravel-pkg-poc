<?php

namespace Ifirlana\Poc\Traits;

use Ifirlana\Poc\Models\Poc;

trait HasPoc
{
  public function poc() {
    return $this->morphMany(poc::class, 'author');
  }
}