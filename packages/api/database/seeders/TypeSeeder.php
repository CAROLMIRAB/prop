<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Type::truncate();
        $data = [
            ["id" => 1, "name" => "Departamento Nuevo"],
            ["id" => 2, "name" => "Departamento SemiNuevo"],
            ["id" => 3, "name" => "Parcela"]
        ];
        foreach ($data as $item) {
            Type::create($item);
        }
    }
}
