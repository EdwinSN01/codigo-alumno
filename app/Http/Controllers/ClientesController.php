<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use App\Http\Requests\CreateClienteRequest;
use App\Models\Cliente;
use GuzzleHttp\Client;

class ClientesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clientes = Cliente::all();
        $clientes = Cliente::paginate(2);
        return view('clientes',compact('clientes'));
    }

    public function show($id) 
    {

        $cliente = Cliente::find($id)??new Cliente();
        return view('show', [
            'cliente' => $cliente
        ]);
    } 

     public function create(){
        $token = Str::random(32);
        return view('create', compact('token'));
     }

     public function store(CreateClienteRequest $request)
     {
         // Validación de datos (puedes personalizar esto según tus necesidades)
         date_default_timezone_set('America/Lima');


        $cliente = new Cliente();
        $cliente->nombres = $request->nombres;
        $cliente->apellidos = $request->apellidos;
        $cliente->email = $request->email;
        $cliente->direccion = $request->direccion;
        $cliente->fono = $request->fono;
        $cliente->save();

        return redirect()->route('clientes')->with('success', 'Nuevo Ingreso creado exitosamente.');

} 
public function edit(Cliente $id)
{

            return view('edit',[
                'cliente'=> $id]);


    }

    public function update(CreateclienteRequest $request, $id)
{
 
        $cliente = Cliente::findOrFail($id);
        $cliente->nombres = $request->input('nombres');
        $cliente->apellidos = $request->input('apellidos');
        $cliente->email = $request->input('email');
        $cliente->direccion = $request->input('direccion');
        $cliente->fono = $request->input('fono');
        $cliente->save();
  

    return redirect()->route('clientes')->with('success', 'Cliente actualizado exitosamente.');
}
public function destroy(Cliente $cliente) {
    $cliente->delete();
    return redirect()->route('clientes');

}
}