<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Colores extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['nombre_color' => "Rojo"
            ],
            ['nombre_color' => "Verde"
            ], 
            ['nombre_color' => "Azul"
            ], 
            ['nombre_color' => "Negro"
            ], 
            ['nombre_color' => "Carmín"
            ],
            ['nombre_color' => "Naranja"
            ],    
            ['nombre_color' => "Verde Claro"
            ],    
            ['nombre_color' => "Verde esmeralda"
            ],
            ['nombre_color' => "Azul marino"
            ],
            ['nombre_color' => "Violeta"
            ],        
            ];
            DB::table('color')->insert($data);
    }
}
