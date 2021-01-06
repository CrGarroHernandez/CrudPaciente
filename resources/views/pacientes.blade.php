@extends('layout')

@section('content')


    <h1 class="mt-4">Simple Sidebar</h1>
        <p></p>

    </div>

    <table class="table table-hover">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Rut</th>
            <th scope="col">Num. Ficha Clínica</th>
            <th scope="col">Nombres</th>
            <th scope="col">A. Paterno</th>
            <th scope="col">A. Materno</th>
            <th scope="col">Fecha Nacimiento</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($pacientes as $paciente)
        <tr>
            <th scope="row">{{ $paciente->id }}</th>
            <td>{{ $paciente->rut }}</td>
            <td>{{ $paciente->numfichaclinica }}</td>
            <td>{{ $paciente->nombres }}</td>
            <td>{{ $paciente->apellidopaterno }}</td>
            <td>{{ $paciente->apellidomaterno }}</td>
            <td>{{ $paciente->fechanacimiento }}</td>
            <td>
                <a class="btn btn-info" href="{{ route('editarPaciente', $paciente) }}"><i class="fa fa-pencil" aria-hidden="true"></i></a>
            </td>
            <td>
                <form method="POST" action="{{ route('eliminarPaciente', $paciente) }}">
                    @csrf @method('DELETE')
                    
                    <button class="btn btn-danger" ><i class="fa fa-trash" aria-hidden="true"></i></button>
                </form>
            </td>
            
        </tr>
        @endforeach
    </tbody>
</table>

@endsection('content')

