@extends('layouts.app')

@section('content')

    <div class="row pt-3">
        @foreach($comics as $comic)
            <div class="d-flex col-2 mb-4">
                <div class="card" style="width: 18rem;">
                    <img src="{{$comic['thumb']}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"> {{$comic['title']}} </h5>
                    </div>
                </div>
            </div>

        @endforeach
    </div>
@endsection