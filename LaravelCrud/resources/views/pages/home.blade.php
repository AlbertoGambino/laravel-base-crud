@extends('layouts.main-layout')
@section('content')

    <div class="container">

        <h1>Movies</h1>
        <ul>
            @foreach ($ospiti as $ospite)



                    <li>

                        <a href="{{ route('ospite', $ospite -> id)}}">
                        {{$ospite -> name}},{{$ospite -> lastname}}

                         </a>

                    </li>





            @endforeach
        </ul>

    </div>

@endsection
