@extends('layout')

@section('content')

<h1>Editar Paciente</h1>

<form method="POST" action="{{ route('actualizarPaciente', $paciente) }}">
        @csrf @method('PATCH')
            <div class="form-group">
                <label for="rut">Rut</label>
                <input type="text" class="form-control" id="rut" name="rut" value="{{ $paciente->rut }}">
            </div>
            <div class="form-group">
                <label for="ficha_clinica">Ficha Clinica</label>
                <input type="text" class="form-control" id="ficha_clinica" name="ficha_clinica" value="{{ $paciente->numfichaclinica }}">
            </div>
            <div class="form-group">
                <label for="nombres">Nombres</label>
                <input type="text" class="form-control" id="nombres" name="nombres" value="{{ $paciente->nombres }}">
            </div>
            <div class="form-group">
                <label for="paterno">Apellido Paterno</label>
                <input type="text" class="form-control" id="paterno" name="paterno" value="{{ $paciente->apellidopaterno }}">
            </div>
            <div class="form-group">
                <label for="materno">Apellido Materno</label>
                <input type="text" class="form-control" id="materno" name="materno" value="{{ $paciente->apellidomaterno }}">
            </div>
            <div class="form-group">
                <label for="fecha_nacimiento">Fecha Nacimiento</label>
                <input class="form-control" id="fecha_nacimiento" name="fecha_nacimiento" type="date" value="{{ $paciente->fechanacimiento }}">
            </div>

            <button class="btn btn-success">Guardar</button>
        </form>

@endsection('content')

