<?php

namespace Database\Seeders;

use App\Models\Place;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PlaceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Schema::disableForeignKeyConstraints();
        Place::truncate();
        \Schema::disableForeignKeyConstraints();
        $data = [
            [
                "id" => 1,
                "lat" => "-33.4576973",
                "long" => "-70.6704505",
                "region" => "Región Metropolitana",
                "provincia" => "Santiago",
                "comuna" => "Santiago",
                "route" => "Av. Almte. Blanco Encalada",
                "number" => "2521",
                "placeid" => "ChIJf21Rdf3EYpYRNdGPK3JprVg",
                "country" => "CL"
            ],
            [
                "id" => 2,
                "lat" => "-33.4535056",
                "long" => "-70.57397240000002",
                "region" => "Región Metropolitana",
                "provincia" => "Santiago",
                "comuna" => "Ñuñoa",
                "route" => "Av. Irarrázaval",
                "number" => "5455",
                "placeid" => "ChIJ-zgdy0rOYpYR9wGcC9EyZFY",
                "country" => "CL"
            ],
            [
                "id" => 3,
                "lat" => "-33.455859",
                "long" => "-70.69452609999999",
                "region" => "Región Metropolitana",
                "provincia" => "Santiago",
                "comuna" => "Estación Central",
                "route" => "Placilla",
                "number" => "65",
                "placeid" => "ChIJbUl_H4vEYpYRzzy_kEhHHO4",
                "country" => "CL"
            ],
            [
                "id" => 4,
                "lat" => "-33.472701",
                "long" => "-70.6480521",
                "region" => "Región Metropolitana",
                "provincia" => "Santiago",
                "comuna" => "Santiago",
                "route" => "San Diego",
                "number" => "2044",
                "placeid" => "ChIJqcD10zjFYpYRWMdGF6PdJpo",
                "country" => "CL"
            ],
            [
                "id" => 5,
                "lat" => "-33.472701",
                "long" => "-70.6480521",
                "region" => "Región Metropolitana",
                "provincia" => "Santiago",
                "comuna" => "Las Condes",
                "route" => "San José de la Sierra",
                "number" => "93",
                "placeid" => "ChIJqcD10zjFYpYRWMdGF6PdJpo",
                "country" => "CL"
            ],
        ];

        foreach ($data as $item) {
            Place::create($item);
        }
    }
}
