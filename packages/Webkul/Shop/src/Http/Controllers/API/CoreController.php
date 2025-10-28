<?php

namespace Webkul\Shop\Http\Controllers\API;

use Webkul\Core\Repositories\ChileComunaRepository;

class CoreController extends APIController
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(protected ChileComunaRepository $chileComunaRepository)
    {
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
     * Get Chilean comunas grouped by region.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function getChileComunas()
    {
        $comunas = $this->chileComunaRepository->all();

        $grouped = [];

        foreach ($comunas as $comuna) {
            $grouped[$comuna->region_code][] = [
                'id'          => $comuna->id,
                'region_id'   => $comuna->region_id,
                'region_code' => $comuna->region_code,
                'code'        => $comuna->code,
                'name'        => $comuna->name,
            ];
        }

        return response()->json([
            'data' => $grouped,
        ]);
    }
}
