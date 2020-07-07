@extends('layouts.app')
@php
    function fecha_peru($fecha){
        if($fecha==''){
            return '';
        }else{
        $arreglo =explode(' ',$fecha);
        $fecha1 =explode('-',$arreglo[0]);
        return $fecha1[2].'-'.$fecha1[1].'-'.$fecha1[0].' a las '.$arreglo[1];
    }
    }
@endphp
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-6">
                            <h2>
                                {{ $plantas->nombre }}
                            </h2>
                        </div>
                        <div class="col-6">
                            <div class="row">
                                <div class="col-6">
                                    <a class="btn btn-primary" href="{{ route('envasados',$id) }}">Actualizar</a>
                                </div>
                                <div class="col-6">
                                    <a class="btn btn-outline-primary" href="{{ route('home') }}">Regresar</a>
                                </div>
                            </div>
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
                                        <th>Contador de Palet</th>
                                        <th>Fecha</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($plantas->envasados->SortByDesc('fecha')->take(1) as $item)
                                    <tr>
                                        <td>{{ $marcas->where('codigo',$item->marca_codigo)->first()->marca_bebida}}</td>
                                        <td>{{ $item->contador }}</td>
                                        <td>{{fecha_peru($item->fecha) }}</td>
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
