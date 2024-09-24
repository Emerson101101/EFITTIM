<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Vehiculo;
use Illuminate\Http\Request;

class VehiculoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vehiculos = Vehiculo::all();

        return view("vehiculos.index", ["vehiculos"=> $vehiculos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("vehiculos.registrar");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = request()->validate([
            'idCliente' => 'required',
            'modelo' => 'required',
            'marca' => 'required',
            'placas'=> 'required',
            'fechaIngreso'=> 'required',
        ]);

        Vehiculo::create($data);

        return redirect('/vehiculos/show');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Vehiculo $vehiculo)
    {
        return view('vehiculos.actualizar', ['vehiculo'=> $vehiculo]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vehiculo $vehiculo)
    {
        $data = request()->validate([
            'modelo' => 'required',
            'marca' => 'required',
            'placas'=> 'required',
        ]);

        $vehiculo->modelo = $data['modelo'];
        $vehiculo->marca = $data['marca'];
        $vehiculo->placas = $data['placas'];

        $vehiculo->updated_at = now();
        
        $vehiculo->save();

        return redirect('/vehiculos/show');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Vehiculo::destroy($id);

        return response()->json(array("res"=>true));
    }
}
