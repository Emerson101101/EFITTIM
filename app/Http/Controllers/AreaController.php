<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Area;
use Illuminate\Http\Request;

class AreaController extends Controller
{
    public function index()
    {
        // Para obtener todas las áreas de la db
        $areas = Area::all();

        // Retornar la vista
        return view('areas.show', ["areas"=> $areas]);
    }

    public function destroy($id)
    {
        // Buscar el área por su ID
        $area = Area::find($id);

        if ($area) 
        {
            // Eliminar área
            $area->delete();
            // Redirigir de vuelta a la lista de áreas con un mensaje de éxito
            return redirect()->route('areas.show')->with('success', 'Área eliminada correctamente.');
        }

    return redirect()->route('areas.show')->with('error', 'Área no encontrada.');
    }

    public function create()
    {
        // Retornar la vista de creación de áreas
        return view('areas.create');
    }

    public function store(Request $request)
    {
        // Validar los datos del formulario
        $request->validate([
            'nombreArea' => 'required',
            'descripcion' => 'required',
        ]);

        // Crear una nueva área en la base de datos
        Area::create([
            'nombreArea' => $request->nombreArea,
            'descripcion' => $request->descripcion,
        ]);

        // Redirigir al listado de áreas
        return redirect('areas/show');
    }
}
