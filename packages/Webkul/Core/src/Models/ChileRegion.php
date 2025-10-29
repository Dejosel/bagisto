<?php

namespace Webkul\Core\Models;

use Illuminate\Database\Eloquent\Model;
use Webkul\Core\Contracts\ChileRegion as ChileRegionContract;

class ChileRegion extends Model implements ChileRegionContract
{
    public $timestamps = false;

    protected $table = 'regiones';

    protected $fillable = [
        'nombre',
    ];

    /**
     * Get the comunas for the region.
     */
    public function comunas()
    {
        return $this->hasMany(ChileComunaProxy::modelClass(), 'region_id');
    }
}
