@extends('layouts.main-layout')
@section('head')
<title>Preacher</title>
@endsection
@section('content')
@include('components.sidebar')
@vite(['resources/js/preacher.js'])
<div class="container-fluid" style="overflow-y: scroll">
    <br>
    <h1>{{$preacher -> firstname}} {{$preacher -> lastname}}</h1>

    <div class="container-fluid" style="width: 90%">
        <div class="preacher_availability">
            <br>
            <h3>Disponibilità del proclamatore</h3>
            <br>
            <div class="preacher_programs_container">
                <div class="preacher_btn_container">
                    <a href="#" class="preacher_btn" id="showPublisherBtn">Disponibilità Espositori</a>
                    <a href="#" class="preacher_btn" id="showCaseNuoveBtn">Disponibilità Case Nuove</a>
                    {{-- <a href="#" class="nextMonth_btn" id="showNextMonthBtn">Disponibilità per il mese di
                        {{$nextMonthName}}</a> --}}
                </div>
                <div id="preacher_publisher_program">
                    <div style="display: flex; justify-content: space-between; width: 100%; margin-bottom: 30px">
                        <h3>Espositori</h3>
                        <button style="margin-bottom: 20px; margin-left: 20px; width: 200px">Modifica</button>
                    </div>

                    <table>
                        <thead>
                            <th id="day">Giorno</th>
                            <th id="time">Orario</th>
                            <th id="place">Luogo</th>
                            <th id="specific_availability">Disponibilità</th>
                        </thead>
                        <tbody>
                            @foreach ($preacherAvailabilitiesPublisher as $availability)
                            <tr>
                                <td>{{$availability->timeslot->day}}</td>
                                <td>{{$availability->timeslot->timeslot}}</td>
                                <td>{{$availability->timeslot->place}}</td>
                                @if ($availability->yes_or_no == true)
                                <td style="background: rgb(66, 227, 66)"></td>
                                @else
                                <td style="background: rgb(237, 32, 32)"></td>
                                @endif
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
                <div id="preacher_caseNuove_program">

                    <div style="display: flex; justify-content: space-between; width: 100%; margin-bottom: 30px">
                        <h3>Case Nuove</h3>
                        <button style="margin-bottom: 20px; margin-left: 20px; width: 200px">Modifica</button>
                    </div>

                    <table>
                        <thead>
                            <th></th>
                            <th>9:00-10:30</th>
                            <th>10:30-12:00</th>
                            <th>15:00-16:30</th>
                            <th>16:30-18:00</th>
                            <th>18:00-19:30</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Lunedì</td>
                                @foreach ($cn_availability_monday as $availability)
                                @if ($availability->yes_or_no == true)
                                <td style="background: rgb(66, 227, 66)"></td>
                                @else
                                <td style="background: rgb(237, 32, 32)"></td>
                                @endif
                                @endforeach
                            </tr>
                            <tr>
                                <td>Martedì</td>
                                @foreach ($cn_availability_tuesday as $availability)
                                @if ($availability->yes_or_no == true)
                                <td style="background: rgb(66, 227, 66)"></td>
                                @else
                                <td style="background: rgb(237, 32, 32)"></td>
                                @endif
                                @endforeach
                            </tr>
                            <tr>
                                <td>Mercoledì</td>
                                @foreach ($cn_availability_wednesday as $availability)
                                @if ($availability->yes_or_no == true)
                                <td style="background: rgb(66, 227, 66)"></td>
                                @else
                                <td style="background: rgb(237, 32, 32)"></td>
                                @endif
                                @endforeach
                            </tr>
                            <tr>
                                <td>Giovedì</td>
                                @foreach ($cn_availability_thursday as $availability)
                                @if ($availability->yes_or_no == true)
                                <td style="background: rgb(66, 227, 66)"></td>
                                @else
                                <td style="background: rgb(237, 32, 32)"></td>
                                @endif
                                @endforeach
                            </tr>
                            <tr>
                                <td>Venerdì</td>
                                @foreach ($cn_availability_friday as $availability)
                                @if ($availability->yes_or_no == true)
                                <td style="background: rgb(66, 227, 66)"></td>
                                @else
                                <td style="background: rgb(237, 32, 32)"></td>
                                @endif
                                @endforeach
                            </tr>
                            <tr>
                                <td>Sabato</td>
                                @foreach ($cn_availability_saturday as $availability)
                                @if ($availability->yes_or_no == true)
                                <td style="background: rgb(66, 227, 66)"></td>
                                @else
                                <td style="background: rgb(237, 32, 32)"></td>
                                @endif
                                @endforeach
                            </tr>
                            <tr>
                                <td>Domenica</td>
                                <td style="background: rgb(237, 32, 32)"></td>
                                <td style="background: rgb(237, 32, 32)"></td>
                                @foreach ($cn_availability_sunday as $availability)
                                @if ($availability->yes_or_no == true)
                                <td style="background: rgb(66, 227, 66)"></td>
                                @else
                                <td style="background: rgb(237, 32, 32)"></td>
                                @endif
                                @endforeach
                            </tr>

                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
    <br><br>
    <a href="{{route('preachers')}}">Torna indietro</a>
</div>
@endsection