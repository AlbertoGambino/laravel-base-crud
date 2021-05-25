@extends('layouts.main-layout')

@section('content')

    <h1>{{$ospite -> name}}</h1>
    <h3>{{$ospite -> lastname}}</h3>
    <h3>{{$ospite -> date_of_birth}}</h3>
    <h3>{{$ospite -> document_type}}</h3>
    <h3>{{$ospite -> document_number}}</h3>

@endsection
