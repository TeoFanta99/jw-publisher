@extends('layouts.main-layout')
@section('content')
@include('components.sidebar')
<div class="container-fluid">
    <br>
    <h1>Supporto per programmi Espositori e Case Nuove</h1>
    <br><br>
    <a href="{{route('create.step1')}}">
        <button>Vai allo Step 1 - Genera mese</button>
    </a>
</div>

@endsection