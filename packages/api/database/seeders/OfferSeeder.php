<?php

namespace Database\Seeders;

use App\Models\Offer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OfferSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Schema::disableForeignKeyConstraints();
        Offer::truncate();
        \Schema::disableForeignKeyConstraints();

        $data = [["description" => "Oferta de Junio", "offer" => 5]];

        foreach ($data as $item) {
            Offer::create($item);
        }
    }
}
