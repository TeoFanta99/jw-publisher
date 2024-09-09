<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Preacher;

class PreacherTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $jsonPreachers = file_get_contents(public_path('file-json/preachers.json'));
        $preachersDecoded = json_decode($jsonPreachers, true);

        foreach ($preachersDecoded as $preacher) {

            $newPreacher = new Preacher();
            $newPreacher->firstname = $preacher['firstname'];
            $newPreacher->lastname = $preacher['lastname'];
            $newPreacher->pioneer = $preacher['pioneer'];
            $newPreacher->english = $preacher['english'];
            $newPreacher->age_group_id = $preacher['age_group'];
            $newPreacher->category_slot_id = $preacher['category_slot'];

            $newPreacher->save();
            
        };
    }
}
