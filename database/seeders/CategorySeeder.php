<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categoria_elec = new Category();
        $categoria_elec->name = 'Electrodomésticos';
        $categoria_elec->description = 'Esta es la categoria de electrodomesticos...';
        $categoria_elec->save();

        $categoria_2 = new Category();
        $categoria_2->name = 'Ropa';
        $categoria_2->description = 'Esta es la categoria de Ropa...';
        $categoria_2->save();
    }
}
