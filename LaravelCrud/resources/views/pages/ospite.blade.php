@extends('layouts.main-layout')

@section('content')

    <div class="ospiti">



        <h1>{{$ospite -> name}}</h1>
        <h1>{{$ospite -> lastname}}</h1>

        <div class="datiospiti">

            <h3>Data di nascita : {{$ospite -> date_of_birth}}</h3>
            <h3>Documento rilasciato : {{$ospite -> document_type}}</h3>
            <h3>N°Documento : {{$ospite -> document_number}}</h3>


        </div>



    </div>



@endsection
