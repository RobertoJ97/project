<?php

namespace App\Http\Controllers;

use App\Models\Comentario;
use Illuminate\Http\Request;

class ComentarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.comentario');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $coment=new Comentario();
        $request->validate([
          'nombre'=>'required|max:30',
          'mensaje'=>'required| max:255',
          'image'=>'required|image'
        ]);
       if($request->hasFile('image')){
        $file=$request->file('image');
        $destinationPath='public/asset/img';
        $filename= time() . '-' . $file->getClientOriginalExtension();
        $uploadSuccess=$request->file('image')->move($destinationPath, $filename);
        $coment->image=$destinationPath . $filename;
       }
       $coment->nombre=$request->nombre;
       $coment->mensaje=$request->mensaje;
       $coment->save();
        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     */
    public function show(Comentario $comentario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comentario $comentario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comentario $comentario)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comentario $comentario)
    {
        //
    }
}
