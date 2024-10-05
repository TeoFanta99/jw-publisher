<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Timeslot;

class TimeslotTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $jsonTimeslots = file_get_contents(public_path('file-json/timeslots.json'));
        $timeslotsDecoded = json_decode($jsonTimeslots, true);
        // var_dump($timeslotsDecoded);

        foreach ($timeslotsDecoded as $timeslot) {
            $newTimeslot = new Timeslot();
            $newTimeslot->day = $timeslot['day'];
            $newTimeslot->timeslot = $timeslot['timeslot'];
            $newTimeslot->activity = $timeslot['activity'];
            $newTimeslot->place = $timeslot['place'];
            $newTimeslot->save();
        }
    }
}
