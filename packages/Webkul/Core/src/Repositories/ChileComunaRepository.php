<?php

namespace Webkul\Core\Repositories;

use Webkul\Core\Eloquent\Repository;

class ChileComunaRepository extends Repository
{
    /**
     * Specify Model class name
     */
    public function model(): string
    {
        return 'Webkul\Core\Contracts\ChileComuna';
    }
}
