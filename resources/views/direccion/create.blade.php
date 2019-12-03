@extends('layouts.app')
@section('content')
<div class="container">
   <div class="row">
      <div class="col-md-10 col-md-offset-1">
         <div class="panel panel-default">
            <div class="panel-heading">Crear Dirección</div>
                                @if($errors->has())
                        <div class='alert alert-danger'>
                            @foreach ($errors->all('<p>:message</p>') as $message)
                                {!! $message !!}
                            @endforeach
                        </div>
                    @endif
            <form class="formulario" role="form" method="POST" action="{{ route('direcciones.store') }}">
               {{ csrf_field() }}
               <div class="form-2">
                  <label for="nombre_inicio" class="col-md-4 control-label">Nombre Inicio</label>
                  <input id="nombre_inicio" type="text" class="form-control" name="nombre_inicio" value="{{ old('nombre_inicio') }}">
               </div>
                 <div class="form-2">
                  <label for="direccion_inicio" class="col-md-4 control-label">Direccion Inicio</label>
                  <input id="direccion_inicio" type="text" class="form-control" name="direccion_inicio" value="{{ old('direccion_inicio') }}">
               </div>
                <div class="form-2">
                  <label for="ciudad_inicio" class="col-md-4 control-label">Ciudad Inicio</label>
                  <input id="ciudad_inicio" type="text" class="form-control" name="ciudad_inicio" value="{{ old('ciudad_inicio') }}">
               </div>
               <br>
               <br>
               <div class="form-2">
                  <label for="nombre_destino" class="col-md-4 control-label">Nombre Destino</label>
                  <input id="nombre_destino" type="text" class="form-control" name="nombre_destino" value="{{ old('nombre_destino') }}">
               </div>
                 <div class="form-2">
                  <label for="direccion_destino" class="col-md-4 control-label">Direccion Destino</label>
                  <input id="direccion_destino" type="text" class="form-control" name="direccion_destino" value="{{ old('direccion_destino') }}">
               </div>
                <div class="form-2">
                  <label for="ciudad_destino" class="col-md-4 control-label">Ciudad Destino</label>
                  <input id="ciudad_destino" type="text" class="form-control" name="ciudad_destino" value="{{ old('ciudad_destino') }}">
               </div>
               <div class="form-group">
                  <button type="submit" class="btn-submit">
                  <i class="fa fa-btn"></i> Crear
                  </button>
               </div>
            </form>
         </div>
      </div>
   </div>
</div>
@endsection