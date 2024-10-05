<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

class Step1Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Mese corrente
        $now = Carbon::now();
        $secondNow = Carbon::now(); // quello falso
        $currentMonthName = $now->locale('it')->monthName;
        $currentYear = $now->year;

        // Mese prossimo
        $nextMonth = $secondNow->addMonth();
        $nextMonthName = $nextMonth->locale('it')->monthName;
        $startDate = Carbon::create($currentYear, $nextMonth->month, 1);
        $secondStartDate = Carbon::create($currentYear, $nextMonth->month, 1);
        $startDateDay = $startDate->day;

        $endDate = $secondStartDate->endOfMonth();
        $endDateDay = $endDate->day;
        $daysInNextMonth = [];

        while ($startDateDay <= $endDateDay) {
            // Ottieni il nome del giorno della settimana in italiano
            $giornoSettimana = $startDate->locale('it')->dayName;
        
            // Aggiungi un array associativo con tutte le informazioni desiderate
            $daysInNextMonth[] = [
                'data' => $startDate->format('Y-m-d'),
                'giorno_mese' => $startDate->day,
                'giorno_settimana' => $giornoSettimana,
                // Puoi aggiungere altre informazioni, come festività, eventi, ecc.
            ];
        
            $startDate->addDay();
            $startDateDay++;
        }

        return view ('pages.step1', compact('now', 'currentMonthName', 'nextMonthName', 'daysInNextMonth'));
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
        //
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
