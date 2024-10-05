@extends('layouts.main-layout')
@section('content')
@include('components.sidebar')
<div id="step1" class="container-fluid" style="overflow-y: scroll">
    <h1>Supporto per programmi Espositori e Case Nuove</h1>
    <p>STEP 1</p>

    <div class="container-fluid">
        {{-- <ul>
            @foreach ($daysInNextMonth as $day)
            <li>{{$day['data']}} - {{$day['giorno_settimana']}}</li>
            @endforeach
        </ul> --}}

        <table>
            <thead>
                <tr>Giorno</tr>
            </thead>
            <tbody>
                @foreach ($daysInNextMonth as $day)
                <tr>
                    <td>{{$day['giorno_settimana']}}</td>
                    <td>{{$day['data']}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection