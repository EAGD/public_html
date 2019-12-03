@extends('layouts.app')
    <head>
        <script type="text/javascript">var centreGot = false;</script>{!!$map['js']!!}
    </head>
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-body">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Nombre Inicio</th>
                            <th>Dirección Inicio</th>
                            <th>Ciudad Inicio</th>
                            <th>Nombre Destino</th>
                            <th>Dirección Destino</th>
                            <th>Ciudad Destino</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($direcciones as $direccion)
                            <tr>
                                <td>{!! $direccion->nombre_inicio !!}</td>
                                <td>{!! $direccion->direccion_inicio !!}</td>
                                <td>{!! $direccion->ciudad_inicio !!}</td>
                                <td>{!! $direccion->nombre_destino !!}</td>
                                <td>{!! $direccion->direccion_destino !!}</td>
                                <td>{!! $direccion->ciudad_destino !!}</td>
                        @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
            <a class="btn btn-primary" href="{!! URL::to('direcciones/create') !!}">Ingresar Dirección</a>
        </div>
        {!! $map['html'] !!}
    </div>
</div>
@endsection