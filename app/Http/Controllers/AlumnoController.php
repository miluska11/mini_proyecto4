<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use Illuminate\Http\Request;

class AlumnoController extends Controller
{
    public function index()
    {
        $alumnos = new Alumno();
        return $alumnos->all();
    }

    public function show($id)
    {
        $alumnos = new Alumno();
        return $alumnos->find($id);
    }

    public function store(Request $request)
    {
        $alumnos = new Alumno();
        $alumnos->nombre = $request->nombre;
        $alumnos->apellido = $request->apellido;
        $alumnos->correo_electronico = $request->correo_electronico;
        $alumnos->asistencia = $request->asistencia;
        $alumnos->save();
        return $alumnos;
    }

    public function edit($id, Request $request)
    {
        $alumnos = Alumno::find($id);
        $alumnos->nombre = $request->nombre;
        $alumnos->apellido = $request->apellido;
        $alumnos->correo_electronico = $request->correo_electronico;
        $alumnos->asistencia = $request->asistencia;
        $alumnos->save();
        return $alumnos;
    }

    public function destroy($id){
        $alumnos = Alumno::find($id);
        $alumnos->delete();
        return $alumnos->all();
    }
}