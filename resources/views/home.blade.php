@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col">
            <div class="row">
                @foreach ($plantas->sortBy('nombre') as $item)
                    <div class="col-sm-12 col-md-4 col-lg-3 mb-2">
                        <div class="card">
                            <figure class="w-100">
                                <img src="{{asset('img/'.$item->imagen)}}" class="card-img-top" alt="{{ $item->nombre }}">
                            </figure>
                            <div class="card-body">
                            <h5 class="card-title text-primary text-uppercase">{{ $item->nombre }}</h5>
                            {{--  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the cards content.</p>  --}}
                            <a href="{{ route('envasados',$item->id) }}" class="btn btn-primary btn-block">Click para ver</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
