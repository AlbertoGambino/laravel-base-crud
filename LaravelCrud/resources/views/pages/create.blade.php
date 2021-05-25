@extends('layouts.main-layout')

@section('content')

    <h1>NEW MOVIE</h1>

    <form method="POST" action="{{route('store')}}">



        @csrf
            @method('POST')

            <div class="form-group row">

                <label for="name" class="col-md-4 col-form-label text-md-right">name</label>

                <div class="col-md-6">
                    <input id="title" type="name" class="form-control" name="name">
                </div>


            </div>
            <div class="form-group row">

                <label for="lastname" class="col-md-4 col-form-label text-md-right">lastname</label>

                <div class="col-md-6">
                    <input id="lastname" type="text" class="form-control" name="lastname">
                </div>


            </div>
            <div class="form-group row">

                <label for="date_of_birth" class="col-md-4 col-form-label text-md-right">date_of_birth</label>

                <div class="col-md-6">
                    <input id="date_of_birth" type="text" class="form-control" name="date_of_birth">
                </div>


            </div>
            <div class="form-group row">

                <label for="document_type" class="col-md-4 col-form-label text-md-right">document_type</label>

                <div class="col-md-6">
                    <input id="document_type" type="text" class="form-control" name="document_type">
                </div>


            </div>
            <div class="form-group row">

                <label for="document_number" class="col-md-4 col-form-label text-md-right">document_number</label>

                <div class="col-md-6">
                    <input id="document_number" type="text" class="form-control" name="document_number">
                </div>


            </div>
            <button type="submit">SUBMIT</button>

    </form>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
@endsection


