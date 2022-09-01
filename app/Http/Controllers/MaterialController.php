<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Material;
use App\Models\Training;

class MaterialController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $materials        = Material::orderBy('id', 'desc')->with('trainings')->get();
        $trainings     = Training::orderBy('id', 'desc')->get();
        // $materials->id_pelatihan    =$trainings;

        $data           = array(
            'materials'   =>$materials,
            'trainings'=>$trainings
        );
        return view('admin.training.material.index')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $trainings = Training::all();
        return view('admin.training.material.create', compact('trainings'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            // 'id_pelatihan   '   =>'required',
            'title'      =>'required',
            'description'         =>'required',

        ]);

        $material                  = new Material();
        // $material->training_id    = $request->training_id;
        $material->title    = $request->title;
        $material->description       = $request->description;
        $material->save();
        return redirect()->route('admin.training.material');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $material = Material::find($request->id);
        $trainings = Training::all();

        $data = array(
            'material' => $material,
            'trainings' => $trainings
        );

        return view('admin.training.material.edit')->with($data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $input= $request->validate([
            'title'      =>'required',
            'description'         =>'required',

        ]);


        $material                       = Material::find($request->id);
        if($material){
            $material->title            = $request->title;
            $material->description            = $request->description;
            $material->update();

            //$training->facilities()->attach($input['facility'], ['training_id' => $training->id]);
    
            return redirect()->route('admin.training.material');
        }
        return back()->withError('Invalid matearial.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
