<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Portafolio;
use App\Http\Requests\PortafolioRequest;

class PortafolioController extends Controller
{
   
    public function index()
    {
    
        return Portafolio::all();
    }

    public function store(PortafolioRequest $request)
    {
        return Portafolio::create($request->all());
    }


    public function show($id)
    {
        return Portafolio::find($id);
    }


    public function update(PortafolioRequest $request, $id)
    {
    
        Portafolio::where('id',$id)->update([
            'nombre'=> $request ->nombre,
            'descripcion'=>$request->descripcion,
            'categoria'=> $request->categoria,
            'imagen'=> $request->imagen,
            'url'=> $request->url,
        ]);
        $portafolio=Portafolio::find($id);
        return $portafolio;

    }

 
    public function destroy($id)
    {
        //
        $portafolio = Portafolio::find($id);
        $portafolio ->delete();
        return response()->json([
            'response'=>'El portafolio fue eliminado'
        ]);


    }
}