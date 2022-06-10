<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class Fabricantes extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['nombre_fabricante' => "BMW"
            ],
            ['nombre_fabricante' => "DAIMLER"
            ], 
            ['nombre_fabricante' => "ASTON MARTIN"
            ], 
            ['nombre_fabricante' => "FIAT"
            ], 
            ['nombre_fabricante' => "FERRARI"
            ],
            ['nombre_fabricante' => "FORD"
            ],    
            ['nombre_fabricante' => "CHEVROLET"
            ],    
            ['nombre_fabricante' => "HONDA"
            ],
            ['nombre_fabricante' => "MAZDA"
            ],
            ['nombre_fabricante' => "RENAULT NISSAN"
            ],
            ['nombre_fabricante' => "SUBARU"
            ],    
            ['nombre_fabricante' => "MCLAREN"
            ],
            ['nombre_fabricante' => "VOLKSWAGEN"
            ],
            ['nombre_fabricante' => "LAND ROVER"
            ],
            ];
            DB::table('fabricante')->insert($data);
    }
}
