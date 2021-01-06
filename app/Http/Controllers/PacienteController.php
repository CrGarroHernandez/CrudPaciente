<?php

namespace App\Http\Controllers;

use App\Paciente;
use Illuminate\Http\Request;

class PacienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $pacientes = Paciente::All();

        return view('pacientes', compact('pacientes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('nuevoPaciente');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        Paciente::create([
            'rut' => request('rut'),
            'numfichaclinica' => request('ficha_clinica'),
            'nombres' => request('nombres'),
            'apellidopaterno' => request('paterno'),
            'apellidomaterno' => request('materno'),
            'fechanacimiento' => request('fecha_nacimiento')
        ]);

        return redirect()->route('pacientes');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Paciente  $paciente
     * @return \Illuminate\Http\Response
     */
    public function show(Paciente $paciente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Paciente  $paciente
     * @return \Illuminate\Http\Response
     */
    public function edit(Paciente $paciente)
    {
        //
        return view('editarPaciente', ['paciente' => $paciente]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Paciente  $paciente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Paciente $paciente)
    {
        //
        $paciente->update([
            'rut' => request('rut'),
            'numfichaclinica' => request('ficha_clinica'),
            'nombres' => request('nombres'),
            'apellidopaterno' => request('paterno'),
            'apellidomaterno' => request('materno'),
            'fechanacimiento' => request('fecha_nacimiento')
        ]);

        return redirect()->route('pacientes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Paciente  $paciente
     * @return \Illuminate\Http\Response
     */
    public function destroy(Paciente $paciente)
    {
        //
        Paciente::destroy($paciente->id);

        return redirect()->route('pacientes');

    }
}
