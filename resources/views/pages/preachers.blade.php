@extends('layouts.main-layout')
@section('head')
<title>Preachers</title>
@endsection
@section('content')
@include('components.sidebar')
<div class="container-fluid" style="overflow-y: scroll">
    <br>
    <h1>Proclamatori</h1>

    <div class="container-fluid" style="margin-top: 30px; padding: 10px">
        <table id="preacher_table" style="width: 90%; margin: 0 auto">
            <thead>
                <tr class="table-primary">
                    <td>Proclamatore</td>
                    <td>Pioniere</td>
                    <td>Livello di inglese</td>
                    <td>Espositori</td>
                    <td>Case Nuove</td>
                    <td>Fascia</td>
                    <td>Disponibilità</td>
                </tr>
            </thead>
            <tbody>
                @foreach ($preachers as $preacher)
                <tr class="preacher_row">
                    <td>
                        {{ Str::upper($preacher->lastname) }}
                        {{$preacher->firstname}}
                    </td>
                    <td>
                        @if ($preacher->pioneer)
                        <span>Sì</span>
                        @else
                        <span>No</span>
                        @endif
                    </td>
                    <td>
                        @if ($preacher->english > 1)
                        <span>Autonomo</span>
                        @else
                        <span>Non autonomo</span>
                        @endif
                    </td>
                    <td>
                        @if ($preacher->publisher)
                        Sì
                        @else
                        No
                        @endif
                    </td>
                    <td>
                        @if ($preacher->case_nuove)
                        Sì
                        @else
                        No
                        @endif
                    </td>
                    <td>{{$preacher->category_slot_id}}</td>
                    <td>
                        <a href="{{route('show.preacher', $preacher->id)}}">
                            <button>
                                <i class="fas fa-search-plus"></i>
                                Visualizza Disponibilità
                            </button>
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>


        {{--
        <ul>
            @foreach ($preachers as $preacher)
            <li class="preacher_button">
                <a href="{{route('show.preacher', $preacher->id)}}">
                    {{$preacher -> lastname}}
                    {{$preacher -> firstname}}
                </a>
            </li>
            @endforeach
        </ul> --}}
    </div>


    <a href="{{route('step1')}}">Torna indietro</a>
</div>
@endsection