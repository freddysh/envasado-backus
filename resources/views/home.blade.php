@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col">

<h1>Plantas a observar</h1>
<div class="row">
    @foreach ($plantas as $item)
        <div class="col-3 m-2">
            <div class="card" style="width: 18rem;">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title">{{ $item->nombre }}</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the cards content.</p>
                <a href="{{ route('envasados',$item->id) }}" class="btn btn-primary btn-block">Ver</a>
                </div>
            </div>
        </div>
    @endforeach
</div>
        </div>
    </div>
</div>
@endsection
