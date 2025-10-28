<?php

namespace Webkul\Core\Models;

use Illuminate\Database\Eloquent\Model;
use Webkul\Core\Contracts\ChileComuna as ChileComunaContract;

class ChileComuna extends Model implements ChileComunaContract
{
    public $timestamps = false;

    protected $table = 'chile_comunas';

    protected $fillable = [
        'region_id',
        'region_code',
        'code',
        'name',
    ];

    /**
     * Get the region that owns the comuna.
     */
    public function region()
    {
        return $this->belongsTo(CountryStateProxy::modelClass(), 'region_id');
    }
}
