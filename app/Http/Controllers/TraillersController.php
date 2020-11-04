<?php

namespace App\Http\Controllers;

use App\Traillers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TraillersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['trailers']=Traillers::paginate(6);

        return view('trailers.index', $datos);
        return view('user.index', $datos);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('trailers.create');
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
        // $datosTraillers=request()->all();

        $datosTraillers = request()->except('_token');

        if($request->hasFile('Foto')){

            $datosTraillers['Foto']=$request->file('Foto')->store('uploads', 'public');

        }

        Traillers::insert($datosTraillers);

        // return response()->json($datosTraillers);
        return redirect('trailers')->with('Mensaje', 'Trailer agregado con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Traillers  $traillers
     * @return \Illuminate\Http\Response
     */
    public function show(Traillers $traillers)
    {
        return view('trailers.form');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Traillers  $traillers
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $trail = Traillers::findOrFail($id);

        return view('trailers.edit', compact('trail'));

        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Traillers  $traillers
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $datosTraillers = request()->except(['_token','_method']);

        if($request->hasFile('Foto')){

            $trail = Traillers::findOrFail($id);

            Storage::delete('public/'. $trail->Foto);

            $datosTraillers['Foto']=$request->file('Foto')->store('uploads', 'public');

        }

        Traillers::where('id','=',$id)->update($datosTraillers);

        // $trail = Traillers::findOrFail($id);
        //  return view('trailers.edit', compact('trail'));

        return redirect('trailers')->with('Mensaje', 'Trailer modificado con exito');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Traillers  $traillers
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {


        $trail = Traillers::findOrFail($id);

        if(Storage::delete('public/'. $trail->Foto)){

            Traillers::destroy($id);

        }

        

        return redirect('trailers')->with('Mensaje', 'Trailer Eliminado');
    }
}
