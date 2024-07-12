<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use App\Http\Requests\CreateAlumnoRequest;
use App\Models\Alumno;

class AlumnosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $alumnos = Alumno::all();
        $alumnos = Alumno::paginate(2);
        return view('alumnos',compact('alumnos'));
    }

    public function show($id) 
    {

        $alumno = Alumno::find($id)??new Alumno();
        return view('show', [
            'alumno' => $alumno
        ]);
    } 

     public function create(){
        $token = Str::random(32);
        return view('create', compact('token'));
     }

     public function store(CreateAlumnoRequest $request)
     {
         // Validación de datos (puedes personalizar esto según tus necesidades)
         date_default_timezone_set('America/Lima');


        $alumno = new Alumno();
        $alumno->nombre = $request->nombre;
        $alumno->apellidos = $request->apellidos;
        $alumno->curso = $request->curso;
        $alumno->nota1 = $request->nota1;
        $alumno->nota2 = $request->nota2;
        $alumno->nota3 = $request->nota3;
        $alumno->save();

        return redirect()->route('alumnos')->with('success', 'Nuevo Ingreso creado exitosamente.');

} 
 
}