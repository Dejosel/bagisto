<?php

namespace Webkul\Installer\Database\Seeders\Core;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ChileComunasTableSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @param  array  $parameters
     * @return void
     */
    public function run($parameters = [])
    {
        DB::table('chile_comunas')->delete();

        // Sample comunas for Chilean regions
        $comunas = [
            // Región Metropolitana (CL-RM)
            ['region_id' => 5000, 'region_code' => 'CL-RM', 'code' => 'RM-ST', 'name' => 'Santiago'],
            ['region_id' => 5000, 'region_code' => 'CL-RM', 'code' => 'RM-PR', 'name' => 'Providencia'],
            ['region_id' => 5000, 'region_code' => 'CL-RM', 'code' => 'RM-LC', 'name' => 'Las Condes'],
            ['region_id' => 5000, 'region_code' => 'CL-RM', 'code' => 'RM-NU', 'name' => 'Ñuñoa'],
            ['region_id' => 5000, 'region_code' => 'CL-RM', 'code' => 'RM-VI', 'name' => 'Vitacura'],
            ['region_id' => 5000, 'region_code' => 'CL-RM', 'code' => 'RM-LR', 'name' => 'La Reina'],
            ['region_id' => 5000, 'region_code' => 'CL-RM', 'code' => 'RM-MA', 'name' => 'Maipú'],
            ['region_id' => 5000, 'region_code' => 'CL-RM', 'code' => 'RM-PU', 'name' => 'Puente Alto'],
            ['region_id' => 5000, 'region_code' => 'CL-RM', 'code' => 'RM-SB', 'name' => 'San Bernardo'],
            ['region_id' => 5000, 'region_code' => 'CL-RM', 'code' => 'RM-LF', 'name' => 'La Florida'],
            ['region_id' => 5000, 'region_code' => 'CL-RM', 'code' => 'RM-PE', 'name' => 'Peñalolén'],
            ['region_id' => 5000, 'region_code' => 'CL-RM', 'code' => 'RM-QU', 'name' => 'Quilicura'],
            ['region_id' => 5000, 'region_code' => 'CL-RM', 'code' => 'RM-CO', 'name' => 'Colina'],
            ['region_id' => 5000, 'region_code' => 'CL-RM', 'code' => 'RM-LP', 'name' => 'La Pintana'],
            ['region_id' => 5000, 'region_code' => 'CL-RM', 'code' => 'RM-SM', 'name' => 'San Miguel'],
            
            // Región de Valparaíso (CL-VS)
            ['region_id' => 5001, 'region_code' => 'CL-VS', 'code' => 'VS-VA', 'name' => 'Valparaíso'],
            ['region_id' => 5001, 'region_code' => 'CL-VS', 'code' => 'VS-VI', 'name' => 'Viña del Mar'],
            ['region_id' => 5001, 'region_code' => 'CL-VS', 'code' => 'VS-QU', 'name' => 'Quilpué'],
            ['region_id' => 5001, 'region_code' => 'CL-VS', 'code' => 'VS-VM', 'name' => 'Villa Alemana'],
            ['region_id' => 5001, 'region_code' => 'CL-VS', 'code' => 'VS-QT', 'name' => 'Quillota'],
            ['region_id' => 5001, 'region_code' => 'CL-VS', 'code' => 'VS-SA', 'name' => 'San Antonio'],
            ['region_id' => 5001, 'region_code' => 'CL-VS', 'code' => 'VS-SF', 'name' => 'San Felipe'],
            ['region_id' => 5001, 'region_code' => 'CL-VS', 'code' => 'VS-LA', 'name' => 'Los Andes'],
            ['region_id' => 5001, 'region_code' => 'CL-VS', 'code' => 'VS-CO', 'name' => 'Concón'],
            ['region_id' => 5001, 'region_code' => 'CL-VS', 'code' => 'VS-LI', 'name' => 'Limache'],
            
            // Región del Biobío (CL-BI)
            ['region_id' => 5002, 'region_code' => 'CL-BI', 'code' => 'BI-CO', 'name' => 'Concepción'],
            ['region_id' => 5002, 'region_code' => 'CL-BI', 'code' => 'BI-TA', 'name' => 'Talcahuano'],
            ['region_id' => 5002, 'region_code' => 'CL-BI', 'code' => 'BI-LA', 'name' => 'Los Ángeles'],
            ['region_id' => 5002, 'region_code' => 'CL-BI', 'code' => 'BI-CH', 'name' => 'Chillán'],
            ['region_id' => 5002, 'region_code' => 'CL-BI', 'code' => 'BI-CH', 'name' => 'Coronel'],
            ['region_id' => 5002, 'region_code' => 'CL-BI', 'code' => 'BI-SA', 'name' => 'San Pedro de la Paz'],
            ['region_id' => 5002, 'region_code' => 'CL-BI', 'code' => 'BI-TO', 'name' => 'Tomé'],
            ['region_id' => 5002, 'region_code' => 'CL-BI', 'code' => 'BI-PE', 'name' => 'Penco'],
            ['region_id' => 5002, 'region_code' => 'CL-BI', 'code' => 'BI-LE', 'name' => 'Lebu'],
            
            // Región de La Araucanía (CL-AR)
            ['region_id' => 5003, 'region_code' => 'CL-AR', 'code' => 'AR-TE', 'name' => 'Temuco'],
            ['region_id' => 5003, 'region_code' => 'CL-AR', 'code' => 'AR-VI', 'name' => 'Villarrica'],
            ['region_id' => 5003, 'region_code' => 'CL-AR', 'code' => 'AR-PU', 'name' => 'Pucón'],
            ['region_id' => 5003, 'region_code' => 'CL-AR', 'code' => 'AR-AN', 'name' => 'Angol'],
            ['region_id' => 5003, 'region_code' => 'CL-AR', 'code' => 'AR-LU', 'name' => 'Lautaro'],
            ['region_id' => 5003, 'region_code' => 'CL-AR', 'code' => 'AR-VI', 'name' => 'Victoria'],
            
            // Región de Los Ríos (CL-LR)
            ['region_id' => 5004, 'region_code' => 'CL-LR', 'code' => 'LR-VA', 'name' => 'Valdivia'],
            ['region_id' => 5004, 'region_code' => 'CL-LR', 'code' => 'LR-RI', 'name' => 'Río Bueno'],
            ['region_id' => 5004, 'region_code' => 'CL-LR', 'code' => 'LR-LA', 'name' => 'La Unión'],
            ['region_id' => 5004, 'region_code' => 'CL-LR', 'code' => 'LR-PA', 'name' => 'Panguipulli'],
            
            // Región de Los Lagos (CL-LL)
            ['region_id' => 5005, 'region_code' => 'CL-LL', 'code' => 'LL-PM', 'name' => 'Puerto Montt'],
            ['region_id' => 5005, 'region_code' => 'CL-LL', 'code' => 'LL-OS', 'name' => 'Osorno'],
            ['region_id' => 5005, 'region_code' => 'CL-LL', 'code' => 'LL-PV', 'name' => 'Puerto Varas'],
            ['region_id' => 5005, 'region_code' => 'CL-LL', 'code' => 'LL-CA', 'name' => 'Castro'],
            ['region_id' => 5005, 'region_code' => 'LL-AN', 'code' => 'LL-AN', 'name' => 'Ancud'],
            
            // Región de Coquimbo (CL-CO)
            ['region_id' => 5006, 'region_code' => 'CL-CO', 'code' => 'CO-LS', 'name' => 'La Serena'],
            ['region_id' => 5006, 'region_code' => 'CL-CO', 'code' => 'CO-CO', 'name' => 'Coquimbo'],
            ['region_id' => 5006, 'region_code' => 'CL-CO', 'code' => 'CO-OV', 'name' => 'Ovalle'],
            ['region_id' => 5006, 'region_code' => 'CL-CO', 'code' => 'CO-IL', 'name' => 'Illapel'],
            
            // Región del Maule (CL-ML)
            ['region_id' => 5007, 'region_code' => 'CL-ML', 'code' => 'ML-TA', 'name' => 'Talca'],
            ['region_id' => 5007, 'region_code' => 'CL-ML', 'code' => 'ML-CU', 'name' => 'Curicó'],
            ['region_id' => 5007, 'region_code' => 'CL-ML', 'code' => 'ML-LI', 'name' => 'Linares'],
            ['region_id' => 5007, 'region_code' => 'CL-ML', 'code' => 'ML-CA', 'name' => 'Cauquenes'],
            
            // Región de Atacama (CL-AT)
            ['region_id' => 5008, 'region_code' => 'CL-AT', 'code' => 'AT-CO', 'name' => 'Copiapó'],
            ['region_id' => 5008, 'region_code' => 'CL-AT', 'code' => 'AT-VA', 'name' => 'Vallenar'],
            ['region_id' => 5008, 'region_code' => 'CL-AT', 'code' => 'AT-CA', 'name' => 'Caldera'],
            
            // Región de Antofagasta (CL-AN)
            ['region_id' => 5009, 'region_code' => 'CL-AN', 'code' => 'AN-AN', 'name' => 'Antofagasta'],
            ['region_id' => 5009, 'region_code' => 'CL-AN', 'code' => 'AN-CA', 'name' => 'Calama'],
            ['region_id' => 5009, 'region_code' => 'CL-AN', 'code' => 'AN-TO', 'name' => 'Tocopilla'],
            ['region_id' => 5009, 'region_code' => 'CL-AN', 'code' => 'AN-ME', 'name' => 'Mejillones'],
            
            // Región de Tarapacá (CL-TA)
            ['region_id' => 5010, 'region_code' => 'CL-TA', 'code' => 'TA-IQ', 'name' => 'Iquique'],
            ['region_id' => 5010, 'region_code' => 'CL-TA', 'code' => 'TA-AA', 'name' => 'Alto Hospicio'],
            
            // Región de Arica y Parinacota (CL-AP)
            ['region_id' => 5011, 'region_code' => 'CL-AP', 'code' => 'AP-AR', 'name' => 'Arica'],
            ['region_id' => 5011, 'region_code' => 'CL-AP', 'code' => 'AP-PU', 'name' => 'Putre'],
            
            // Región del Libertador General Bernardo O'Higgins (CL-LI)
            ['region_id' => 5012, 'region_code' => 'CL-LI', 'code' => 'LI-RA', 'name' => 'Rancagua'],
            ['region_id' => 5012, 'region_code' => 'CL-LI', 'code' => 'LI-SA', 'name' => 'San Fernando'],
            ['region_id' => 5012, 'region_code' => 'CL-LI', 'code' => 'LI-RE', 'name' => 'Rengo'],
            ['region_id' => 5012, 'region_code' => 'CL-LI', 'code' => 'LI-MA', 'name' => 'Machalí'],
            
            // Región de Aysén (CL-AY)
            ['region_id' => 5013, 'region_code' => 'CL-AY', 'code' => 'AY-CO', 'name' => 'Coyhaique'],
            ['region_id' => 5013, 'region_code' => 'CL-AY', 'code' => 'AY-PU', 'name' => 'Puerto Aysén'],
            
            // Región de Magallanes (CL-MA)
            ['region_id' => 5014, 'region_code' => 'CL-MA', 'code' => 'MA-PA', 'name' => 'Punta Arenas'],
            ['region_id' => 5014, 'region_code' => 'CL-MA', 'code' => 'MA-PN', 'name' => 'Puerto Natales'],
            
            // Región de Ñuble (CL-NB)
            ['region_id' => 5015, 'region_code' => 'CL-NB', 'code' => 'NB-CH', 'name' => 'Chillán'],
            ['region_id' => 5015, 'region_code' => 'CL-NB', 'code' => 'NB-CV', 'name' => 'Chillán Viejo'],
            ['region_id' => 5015, 'region_code' => 'CL-NB', 'code' => 'NB-SA', 'name' => 'San Carlos'],
        ];

        DB::table('chile_comunas')->insert($comunas);
    }
}
