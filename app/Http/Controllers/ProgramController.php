<?php

namespace App\Http\Controllers;

use App\Models\CategoryProgram;
use App\Models\Program;
use Illuminate\Http\Request;

class ProgramController extends Controller
{
    public function index(){
        $programs = Program::orderBy('id', 'asc')->get();
        $categories = CategoryProgram::all();
        return view('admin.program.index')->with(['programs'=> $programs, 'categories' => $categories]);
    }

    public function create()
    {
        $categories = CategoryProgram::all();
        $programs = Program::all();
        return view('admin.program.create', compact('categories', 'programs'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'program_id'            =>  'required',
            'question'              =>  'required',
            'answer'                =>  'required'
        ]);

        $program = new Program();
        $program->program_id	 = $request->program_id	;
        $program->question = $request->question;
        $program->answer = $request->answer;


        $program->save();
        return redirect()->route('admin.program')->with('success','You have successfully created a program.');
    }

    public function edit($id)
    {
        $program = Program::find($id);
        $categories = CategoryProgram::all();
        return view('admin.program.edit', [
            'program' => $program,
            'categories' => $categories
        ]);

    }

    public function update(Request $request)
    {
        $request->validate([
            // 'category_program_id'   =>  'required',
            'question'              =>  'required',
            'answer'                =>  'required'
        ]);

        $program = Program::find($request->id);

            $program->program_id = $request->program_id;
            $program->question  = $request->question;
            $program->answer       = $request->answer;
    
            $program->save();
            return redirect()->route('admin.program')->with('success','You have successfully update a program.');  
    }

    public function destroy(Request $request)
    {
        $program = Program::find($request->id);
        
        $program->delete();
        return redirect()->route('admin.program')->with('success','You have successfully delete a program.');  

    }

}
