<?php

namespace Webkul\Core\Repositories;

use Webkul\Core\Eloquent\Repository;

class ChileRegionRepository extends Repository
{
    /**
     * Specify Model class name
     */
    public function model(): string
    {
        return 'Webkul\Core\Contracts\ChileRegion';
    }
}
