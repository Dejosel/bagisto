<?php

namespace Webkul\Core\Models;

use Illuminate\Database\Eloquent\Model;
use Webkul\Core\Contracts\ChileComuna as ChileComunaContract;

class ChileComuna extends Model implements ChileComunaContract
{
    public $timestamps = false;

    protected $table = 'comunas';

    protected $fillable = [
        'region_id',
        'nombre',
        'codigo',
    ];

    /**
     * Get the region that owns the comuna.
     */
    public function region()
    {
        return $this->belongsTo(ChileRegionProxy::modelClass(), 'region_id');
    }
}
