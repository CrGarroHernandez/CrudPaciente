@extends('layout')

@section('content')

<h1>Registrar Paciente</h1>

<form method="POST" action="{{ route('nuevoPaciente') }}">
        @csrf
            <div class="form-group">
                <label for="rut">Rut</label>
                <input type="text" class="form-control" id="rut" name="rut" placeholder="12345678-9">
            </div>
            <div class="form-group">
                <label for="ficha_clinica">Ficha Clinica</label>
                <input type="text" class="form-control" id="ficha_clinica" name="ficha_clinica">
            </div>
            <div class="form-group">
                <label for="nombres">Nombres</label>
                <input type="text" class="form-control" id="nombres" name="nombres">
            </div>
            <div class="form-group">
                <label for="paterno">Apellido Paterno</label>
                <input type="text" class="form-control" id="paterno" name="paterno">
            </div>
            <div class="form-group">
                <label for="materno">Apellido Materno</label>
                <input type="text" class="form-control" id="materno" name="materno">
            </div>
            <div class="form-group">
                <label for="fecha_nacimiento">Fecha Nacimiento</label>
                <input class="form-control" id="fecha_nacimiento" name="fecha_nacimiento" type="date">
            </div>

            <button class="btn btn-success">Guardar</button>
        </form>

@endsection('content')

