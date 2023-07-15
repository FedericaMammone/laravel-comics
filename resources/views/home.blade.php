@extends('layouts.main-layout')

@section('content')
    <div class="container-home">
        <div class="row justify-content-between flex-wrap">
            @foreach ($fumetti as $fumetto)
                <div class="col-2 p-4">
                    <img src="{{ $fumetto['thumb'] }}" alt="">
                    <h4>{{ $fumetto['title'] }}</h4>
                </div>
            @endforeach


        </div>

    </div>
@endsection
