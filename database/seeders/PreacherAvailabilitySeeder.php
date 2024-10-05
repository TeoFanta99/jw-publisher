<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\PreacherAvailability;

class PreacherAvailabilitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $jsonAvailability = file_get_contents(public_path('file-json/preaches_availability.json'));
        // $availabilitiesDecoded = json_decode($jsonAvailability, true);



        // foreach ($availabilitiesDecoded as $availability) {
        //     $newAvailability = new PreacherAvailability();
        //     $newAvailability->preacher_id = $availability['preacher_id'];
        //     $newAvailability->timeslot_id = $availability['timeslot_id'];
        //     $newAvailability->yes_or_no = $availability['yes_or_no'];
        //     $newAvailability->save();
        // }

        // $csv = fopen(public_path('preacher_availabilities.csv'), 'r');
        // $data = [];
        // while (($row = fgetcsv($csv)) !== FALSE) {
        //     $data[] = $row;
        // }
        // fclose($csv);

        // dump($data);exit;

        $handle = fopen(public_path('preacher_availabilities.csv'), 'r');
        $data = [];
        
        while(($row = fgetcsv($handle, 1000, ";")) !== FALSE)
        {
            $data[] = $row;
        }

        fclose($handle);
    

        foreach ($data as $availability)
        {
            $newAvailability = new PreacherAvailability();
            $newAvailability->preacher_id = $availability[0];
            $newAvailability->timeslot_id = $availability[1];
            $newAvailability->yes_or_no = $availability[2];
            $newAvailability->save();
        }
        

    }
}
