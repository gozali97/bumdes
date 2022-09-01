<?php

namespace App\Http\Controllers;

use App\Models\Newslatter;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;

class NewslatterController extends Controller
{
    public function index()
    {
      $newslatters = Newslatter::orderBy('id', 'asc')->get();
      return view('admin.newslatter.index')->with(['newslatters'=> $newslatters]);
    }

    public function create()
    {
      return view('admin.newslatter.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'                =>  'required',
            'period'              =>  'required',
            'description'         =>  'required',
            'file'                =>  'required|mimes:pdf,txt|max:20480',
        ]);


        $input = $request->all();
  
        if ($file = $request->file('file')) {
            $destinationFile = 'public/newslatter/';
            $profileFile =  $file->getClientOriginalName(); 
            $file->move($destinationFile, $profileFile);
            $input['file'] = "$profileFile";
        }
    
        Newslatter::create($input);

        return redirect()->route('admin.newslatter')->with('success','You have successfully created a newslatter.');
    }

    public function edit($id)
    {
        $newslatter = Newslatter::find($id);
        return view('admin.newslatter.edit', [
            'newslatter' => $newslatter,
        ]);

    }

    public function update(Request $request)
    {
        $request->validate([
            'name'                =>  'required',
            'period'              =>  'required',
            'description'         =>  'required',
        ]);

        $newslatter = Newslatter::find($request->id);
            if ($newslatter) {
                $newslatter->name = $request->name;
                $newslatter->period = $request->period;
                $newslatter->description = $request->description;
                if ($request->hasFile('file')) {
                    $this->deletNewslatter($newslatter);
                    if ($file = $request->file('file')) {
                        $destinationFile = 'public/newslatter/';
                        $profile = $file->getClientOriginalName(). microtime() ;
                        $file->move($destinationFile, $profile);
                        $newslatter['file'] = "$profile";
                    }
                }
                $newslatter->save();
                return redirect()->route('admin.newslatter')->with('success','You have successfully update a newslatter.'); 
            }
        return back()->withError('Invalid archive.'); 
    }

    public function destroy(Request $request)
    {
        $newslatter = Newslatter::find($request->id);
        if ($newslatter) {
            $this->deletNewslatter($newslatter);
            $newslatter->delete();
            return redirect()->route('admin.newslatter')->with('success','You have successfully delete a newslatter.');  
        }
        return back()->withError('Invalid newslatter.');

    }

    private function deletNewslatter($newslatter){
        if( $newslatter->file ){
            // $imgDestroy = 'public/images/banner/'.$banner->image;
            $fileDestroy = 'public/newslatter/' .$newslatter->file;
            if (File::exists($fileDestroy)){
                File::delete($fileDestroy);
            }
        }
    }
 
    public function download(Newslatter $newslatter)
    {
       return response()->download('public/newslatter/'.$newslatter->file);
    }


}
