<?php

namespace Webkul\Installer\Database\Seeders\Core;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ChileRegionesTableSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @param  array  $parameters
     * @return void
     */
    public function run($parameters = [])
    {
        // Add Chilean regions to country_states table
        $regions = [
            [
                'id' => 5000,
                'country_id' => 47,  // Chile's country ID
                'country_code' => 'CL',
                'code' => 'CL-RM',
                'default_name' => 'Región Metropolitana de Santiago',
            ],
            [
                'id' => 5001,
                'country_id' => 47,
                'country_code' => 'CL',
                'code' => 'CL-VS',
                'default_name' => 'Región de Valparaíso',
            ],
            [
                'id' => 5002,
                'country_id' => 47,
                'country_code' => 'CL',
                'code' => 'CL-BI',
                'default_name' => 'Región del Biobío',
            ],
            [
                'id' => 5003,
                'country_id' => 47,
                'country_code' => 'CL',
                'code' => 'CL-AR',
                'default_name' => 'Región de La Araucanía',
            ],
            [
                'id' => 5004,
                'country_id' => 47,
                'country_code' => 'CL',
                'code' => 'CL-LR',
                'default_name' => 'Región de Los Ríos',
            ],
            [
                'id' => 5005,
                'country_id' => 47,
                'country_code' => 'CL',
                'code' => 'CL-LL',
                'default_name' => 'Región de Los Lagos',
            ],
            [
                'id' => 5006,
                'country_id' => 47,
                'country_code' => 'CL',
                'code' => 'CL-CO',
                'default_name' => 'Región de Coquimbo',
            ],
            [
                'id' => 5007,
                'country_id' => 47,
                'country_code' => 'CL',
                'code' => 'CL-ML',
                'default_name' => 'Región del Maule',
            ],
            [
                'id' => 5008,
                'country_id' => 47,
                'country_code' => 'CL',
                'code' => 'CL-AT',
                'default_name' => 'Región de Atacama',
            ],
            [
                'id' => 5009,
                'country_id' => 47,
                'country_code' => 'CL',
                'code' => 'CL-AN',
                'default_name' => 'Región de Antofagasta',
            ],
            [
                'id' => 5010,
                'country_id' => 47,
                'country_code' => 'CL',
                'code' => 'CL-TA',
                'default_name' => 'Región de Tarapacá',
            ],
            [
                'id' => 5011,
                'country_id' => 47,
                'country_code' => 'CL',
                'code' => 'CL-AP',
                'default_name' => 'Región de Arica y Parinacota',
            ],
            [
                'id' => 5012,
                'country_id' => 47,
                'country_code' => 'CL',
                'code' => 'CL-LI',
                'default_name' => 'Región del Libertador General Bernardo O\'Higgins',
            ],
            [
                'id' => 5013,
                'country_id' => 47,
                'country_code' => 'CL',
                'code' => 'CL-AY',
                'default_name' => 'Región de Aysén del General Carlos Ibáñez del Campo',
            ],
            [
                'id' => 5014,
                'country_id' => 47,
                'country_code' => 'CL',
                'code' => 'CL-MA',
                'default_name' => 'Región de Magallanes y de la Antártica Chilena',
            ],
            [
                'id' => 5015,
                'country_id' => 47,
                'country_code' => 'CL',
                'code' => 'CL-NB',
                'default_name' => 'Región de Ñuble',
            ],
        ];

        foreach ($regions as $region) {
            DB::table('country_states')->updateOrInsert(
                ['id' => $region['id']],
                $region
            );
        }
    }
}
