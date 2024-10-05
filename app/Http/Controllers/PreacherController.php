<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Preacher;
use App\Models\Timeslot;
use App\Models\PreacherAvailability;
use Carbon\Carbon;

class PreacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $preachers = Preacher::orderBy('lastname', 'asc')->get();

        return view ('pages.preachers', compact('preachers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $preacher = Preacher :: find($id);
        $timeslots = Timeslot :: all();

        // Espositori
        $preacherAvailabilitiesPublisher = PreacherAvailability :: all() 
            -> where('preacher_id', '=', $preacher->id)
            -> where('timeslot_id', '<', 9);

        
        // Case nuove
        $preacherAvailabilitiesCaseNuove = PreacherAvailability :: all() 
            -> where('preacher_id', '=', $preacher->id)
            -> where('timeslot_id', '>', 8);
            
        
        $cn_availability_monday = [];
        $cn_availability_tuesday = [];
        $cn_availability_wednesday = [];
        $cn_availability_thursday = [];
        $cn_availability_friday = [];
        $cn_availability_saturday = [];
        $cn_availability_sunday = [];


        foreach ($preacherAvailabilitiesCaseNuove as $availability) {
            if($availability->timeslot["day"] == "Lunedì") {
                $cn_availability_monday[] = $availability;
            } 
            elseif ($availability->timeslot["day"] == "Martedì") {
                $cn_availability_tuesday[] = $availability;
            }
            elseif ($availability->timeslot["day"] == "Mercoledì") {
                $cn_availability_wednesday[] = $availability;
            }
            elseif ($availability->timeslot["day"] == "Giovedì") {
                $cn_availability_thursday[] = $availability;
            }
            elseif ($availability->timeslot["day"] == "Venerdì") {
                $cn_availability_friday[] = $availability;
            }
            elseif ($availability->timeslot["day"] == "Sabato") {
                $cn_availability_saturday[] = $availability;
            }
            elseif ($availability->timeslot["day"] == "Domenica") {
                $cn_availability_sunday[] = $availability;
            }
        }

        

        $currentMonth = Carbon::now();
        $nextMonth = $currentMonth->addMonth();
        $nextMonthName = $nextMonth->locale('it')->monthName;

        return view('pages.preacher', compact('preacher', 'nextMonthName', 'timeslots', 'preacherAvailabilitiesPublisher', 'preacherAvailabilitiesCaseNuove', 'cn_availability_monday', 'cn_availability_tuesday', 'cn_availability_wednesday', 'cn_availability_thursday', 'cn_availability_friday', 'cn_availability_saturday', 'cn_availability_sunday'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
