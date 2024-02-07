@extends('app')

@section('content')
    <div class="container-fluid d-flex justify-content-center aling-items-center">
        <div class="card" style="margin: 2%; width: 100%;">
            <div class="text-center" style="margin: 2%">
                <h1 class="text-dark mb-5">Actualizar sitio Web</h1>
                <form method="POST" action="{{ route('web.update') }}">
                    @csrf
                    @method('PUT')
                    <div class="card-body" id="notificaciones-view">
                        <div class="form-group">
                            <label for="name">Nombre:</label>
                            <input type="text" class="form-control" id="nombre" name="nombre" required value="{{$web->nombre}}">
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Actualizar</button>
                    </div>
                </form>
            </div>
        </div>
    @endsection
