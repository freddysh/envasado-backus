@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-sm-9 col-md-10 col-lg-10">
                            <h2>
                                {{ $plantas->nombre }} Listado de contadores
                            </h2>
                        </div>
                        <div class="col-sm-3 col-md-2 col-lg-2">
                            <a class="btn btn-outline-primary" href="{{ route('home') }}">Regresar</a>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="row">
                        <div class="col">
                            <table class="table table-bordered table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>Marca</th>
                                        <th>Contador</th>
                                        <th>Fecha</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($plantas->envasados as $item)
                                    <tr>
                                        <td>{{ $item->marca_bebida }}</td>
                                        <td>{{ $item->contador }}</td>
                                        <td>{{ $item->fecha }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
