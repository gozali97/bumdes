<?php

namespace App\Http\Controllers;

use App\Models\Trainer;
use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\File;

class TrainerController extends Controller
{
    public function index(){
        $trainers = Trainer::orderBy('id', 'desc')->get();
        return view('admin.training.trainer.index')->with('trainers', $trainers);
    }

    public function create()
    {
        return view('admin.training.trainer.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'trainer_name'         =>  'required|min:5',
            'instance'             => 'required',
            'description'          =>  'required',
            'image'                =>  'required|mimes:jpeg,png,jpg'
        ]);

        // $trainer = new Trainer;
        // $trainer->trainer_name = $request->trainer_name;
        // $trainer->instance = $request->instance;
        // $trainer->description = $request->description;
        // $trainer->image = $this->saveTrainerImage($trainer, $request);

        // $trainer->save();
        $input = $request->all();
  
        if ($image = $request->file('image')) {
            $destinationPath = 'public/images/trainer/';
            $profileImage = md5( $image->getClientOriginalName(). microtime() ).'.'.$image->getClientOriginalExtension();//date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }
    
        Trainer::create($input);
        return redirect()->route('admin.training.trainer')->with('success','kamu berhasil menyimpan data trainer.');
    }

    public function edit(Request $request)
    {
        $trainer = Trainer::find($request->id);
        return view('admin.training.trainer.edit')->with('trainer', $trainer);

    }

    public function update(Request $request)
    {
        $request->validate([
            'trainer_name'         =>  'required|min:5',
            'instance'             => 'required',
            'description'          =>  'required',
            // 'image'                =>  'required|mimes:jpeg,png,jpg,gif,svg'
        ]);

        $trainer = Trainer::find($request->id);
        //  if ($trainer) {
        //     $trainer->trainer_name = $request->trainer_name;
        //     $trainer->instance = $request->instance;
        //     $trainer->description = $request->description;
        //     if ($request->hasFile('image')) {
        //         $this->deletTrainerImage($trainer);
        //         $trainer->image = $this->saveTrainerImage($trainer, $request);
        //     }
        //     $trainer->save();
         if ($trainer) {
             $trainer->trainer_name = $request->trainer_name;
             $trainer->instance = $request->instance;
             $trainer->description = $request->description;
            if ($request->hasFile('image')) {
                $this->deletTrainerImage($trainer);
                 if ($image = $request->file('image')) {
                    $destinationPath = 'public/images/trainer';
                    $profileImage = md5( $image->getClientOriginalName(). microtime() ).'.'.$image->getClientOriginalExtension(); //date('YmdHis') . "." . $image->getClientOriginalExtension();
                    $image->move($destinationPath, $profileImage);
                    $trainer['image'] = "$profileImage";
                }
            }
            $trainer->save();
            return redirect()->route('admin.training.trainer')->with('success','kamu berhasil merubah data pemateri.');  
         }
         return back()->withError('Invalid trainer.');
    }

    public function destroy(Request $request)
    {
        $trainer = Trainer::find($request->id);
        if ($trainer) {
            $this->deletTrainerImage($trainer);
            $trainer->delete();
            return redirect()->route('admin.training.trainer')->with('success','You have successfully delete a trainer.');  
        }
        return back()->withError('Invalid trainer.');
    }

    private function deletTrainerImage($trainer){
        // if( $trainer->image ){
        //     $imgDestroy = public_path('images/trainer/'.$trainer->image);
        //     if ( file_exists($imgDestroy) ) unlink($imgDestroy);
        // }
        if( $trainer->image ){
            $imgDestroy = 'public/images/trainer/'.$trainer->image;
            // if ( file_exists($imgDestroy) ) unlink($imgDestroy);
            if (File::exists($imgDestroy)){
                File::delete($imgDestroy);
            }
        }
    }

    // private function saveTrainerImage($trainer, $request){
    //     $image = $request->file('image');
    //     $img = md5( $image->getClientOriginalName(). microtime() ).'.'.$image->getClientOriginalExtension();
    //     $location = public_path('images/trainer/'.$img);
    //     // Image::make($image)->resize(360, 250)->save($location_thumb);
    //     Image::make($image)->save($location);
    //     return $img;
    // }
}
