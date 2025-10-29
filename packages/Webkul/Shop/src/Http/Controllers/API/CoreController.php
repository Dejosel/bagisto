<?php

namespace Webkul\Shop\Http\Controllers\API;

use Webkul\Core\Repositories\ChileComunaRepository;
use Webkul\Core\Repositories\ChileRegionRepository;

class CoreController extends APIController
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(
        protected ChileComunaRepository $chileComunaRepository,
        protected ChileRegionRepository $chileRegionRepository
    ) {
    }

    /**
     * Get countries.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function getCountries()
    {
        return response()->json([
            'data' => core()->countries()->map(fn ($country) => [
                'id'   => $country->id,
                'code' => $country->code,
                'name' => $country->name,
            ]),
        ]);
    }

    /**
     * Get states.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function getStates()
    {
        return response()->json([
            'data' => core()->groupedStatesByCountries(),
        ]);
    }

    /**
     * Get Chilean regions.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function getChileRegiones()
    {
        $regiones = $this->chileRegionRepository->all();

        return response()->json([
            'data' => $regiones->map(fn ($region) => [
                'id'     => $region->id,
                'nombre' => $region->nombre,
            ]),
        ]);
    }

    /**
     * Get Chilean comunas grouped by region.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function getChileComunas()
    {
        $comunas = $this->chileComunaRepository->all();

        $grouped = [];

        foreach ($comunas as $comuna) {
            $grouped[$comuna->region_id][] = [
                'id'        => $comuna->id,
                'region_id' => $comuna->region_id,
                'codigo'    => $comuna->codigo,
                'nombre'    => $comuna->nombre,
            ];
        }

        return response()->json([
            'data' => $grouped,
        ]);
    }
}
