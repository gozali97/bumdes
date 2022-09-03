<?php

namespace App\Http\Controllers\Mentorship;

use App\Http\Controllers\Controller;
use App\Models\Mentorship\MentorshipMethod;
use Illuminate\Http\Request;

class MentorshipMethodController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $methods = MentorshipMethod::all();
        return view('admin.mentorship.method.index', [
            'methods' => $methods,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.mentorship.method.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'method_name' => 'required',
            // 'description' => 'required'
        ]);

        MentorshipMethod::create([
            'method_name' =>$request->method_name,
            'description'           =>$request->description
        ]);

        return redirect()->route('admin.mentorship.method');


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
    public function edit(Request $request)
    {
        $method = MentorshipMethod::find($request->id);
        return view('admin.mentorship.method.edit')->with('method', $method);
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
        $method = MentorshipMethod::find($request->id);

        $method->update([
            'method_name' => $request->method_name,
            'description' => $request->description,
        ]);

        return redirect()->route('admin.mentorship.method');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $method = MentorshipMethod::find($request->id);
        $method->delete();

        return redirect()->route('admin.mentorship.method');
    }
}
