<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\CategorySlot;

class CategorySlotTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $jsonCategorySlot = file_get_contents(public_path('file-json/categoryslots.json'));
        $categorySlotDecoded = json_decode($jsonCategorySlot, true);

        foreach ($categorySlotDecoded as $categorySlot) {
            $newCategorySlot = new CategorySlot();
            $newCategorySlot->name = $categorySlot['name'];
            $newCategorySlot->save();
        }
    }
}
