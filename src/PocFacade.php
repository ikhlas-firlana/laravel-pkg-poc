<?php

namespace Ifirlana\Poc;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Ifirlana\Poc\Skeleton\SkeletonClass
 */
class PocFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'poc';
    }
}
