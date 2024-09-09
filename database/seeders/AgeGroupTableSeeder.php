<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\AgeGroup;

class AgeGroupTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $jsonAgeGroups = file_get_contents(public_path('file-json/agegroups.json'));
        $ageGroupsDecoded = json_decode($jsonAgeGroups, true);

        foreach ($ageGroupsDecoded as $ageGroup) {
            $newAgeGroup = new AgeGroup();
            $newAgeGroup->name = $ageGroup['name'];
            $newAgeGroup->save();
        }
    }
}
