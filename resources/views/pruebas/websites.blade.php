@extends('app')

@section('content')
    <div class="container-fluid d-flex justify-content-center aling-items-center">
        <div class="card" style="margin: 2%; width: 100%;">
            <div class="text-center" style="margin: 2%">
                <h1 class="text-dark mb-5">Sitios Web</h1>

                <a href="{{route('web.create')}}" class="btn btn-primary mb-3">Crear</a>
            </div>
            <div class="card-body">
                <table class="">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($webs as $web)
                            <tr>
                                <td>{{ $web->id }}</td>
                                <td>{{ $web->nombre }}</td>
                                <td>
                                    <form action="{{ route('web.destroy', $web->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger delete-btn" data-id="{{ $web->id }}">Eliminar</button>
                                    </form>
                                </td>
                                
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" />

@section('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    @if (session('mensaje'))
        <script>
            toastr.options = {
                "closeButton": true,
                "progressBar": true
            }
            console.log("ingresa a success");
            toastr.success("{{ session('mensaje') }}");
        </script>
    @endif

    @if (session('error'))
        <script>
            toastr.options = {
                "closeButton": true,
                "progressBar": true
            }
            console.log("ingresa a error")
            toastr.error("{{ session('error') }}");
        </script>
    @endif
@endsection
