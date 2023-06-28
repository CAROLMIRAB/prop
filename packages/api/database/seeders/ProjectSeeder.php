<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Schema::disableForeignKeyConstraints();
        Project::truncate();
        \Schema::disableForeignKeyConstraints();
        $data = [
            [
                "id" => 1,
                "name" => "Eco Encalada",
                "description" => "Edificio de 9 pisos, con acceso desde Avenida Blanco Encalada y calle Domeyko, que cuenta con hall de doble altura y espacios comunes de primer nivel dotados de equipamiento de excelente calidad",
                "image" => "/images/eco_escalada.jpg",
                "address" => "ALMIRANTE BLANCO ENCALADA 2521, SANTIAGO CENTRO",
                "price" => "3888",
                "specs" => json_encode([["Habitaciones" => 1 / 2], ["Baños" => 1 / 2], ["Estacionamiento" => "si"]]),
                "offer_id" => null,
                "type_id" => 1,
                "place_id" => 1

            ],
            [
                "id" => 2,
                "name" => "Eco Irarrazabal",
                "description" => "En Eco Irarrázaval, proyectos inmobiliario de 27 pisos, vive momentos únicos en sus exclusivos Espacios Más, diseñados por el reconocido estudio de interiorismo Enrique Concha & Co.",
                "image" => "/images/eco_irarrazabal.jpg",
                "address" => "AV IRARRÁZAVAL 5455, ÑUÑOA",
                "price" => "2706",
                "specs" => json_encode([["Habitaciones" => 1 / 2], ["Baños" => 1 / 2], ["Estacionamiento" => "si"]]),
                "offer_id" => 1,
                "type_id" => 1,
                "place_id" => 2
            ],
            [
                "id" => 3,
                "name" => "Eco Estación",
                "description" => "",
                "image" => "/images/eco_estacion.png",
                "address" => "PLACILLA 65",
                "price" => "1994",
                "specs" => json_encode([["Habitaciones" => 1 / 2], ["Baños" => 1 / 2], ["Estacionamiento" => "no"]]),
                "offer_id" => null,
                "type_id" => 1,
                "place_id" => 3
            ],
            [
                "id" => 4,
                "name" => "Eco Arauco",
                "description" => "",
                "image" => "/images/eco_arauco.jpg",
                "address" => "San Diego 2044, Santiago Centro",
                "price" => "2724",
                "specs" => json_encode([["Habitaciones" => 1 / 2], ["Baños" => 1 / 2], ["Estacionamiento" => "no"]]),
                "offer_id" => 1,
                "type_id" => 1,
                "place_id" => 4
            ],

        ];
        foreach ($data as $item) {
            Project::create($item);
        }
    }
}
