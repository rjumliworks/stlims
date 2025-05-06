<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ConfigurationsTableSeeder extends Seeder
{
    /**
     * Auto generated seeder file.
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('configurations')->delete();
        
        \DB::table('configurations')->insert(array (
            0 => 
            array (
                'id' => 1,
                'code' => 'R6',
                'acronym' => 'DOST-VI',
                'name' => 'Department of Science and Technology - VI',
                'laboratories' => '[{"name": "Chemical Laboratory", "value": 1, "tsr_count": "0", "report_count": "0", "sample_count": "0"}, {"name": "Microbiological Laboratory", "value": 2, "tsr_count": "0", "report_count": "0", "sample_count": "0"}, {"name": "Metrology Laboratory", "value": 3, "tsr_count": "0", "report_count": "0", "sample_count": "0"}]',
                'samplecode_year' => 0,
                'agency_id' => 11,
                'created_at' => '2025-04-23 20:54:11',
                'updated_at' => '2025-04-23 20:54:11',
            ),
        ));

        
    }
}