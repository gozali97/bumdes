<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use App\Models\Training;
use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\File;

class TestimonialController extends Controller
{
    public function index(){
        $testimonials = Testimonial::orderBy('id', 'desc')->get();
        $trainings  = Training::all();
        return view('admin.training.testimonial.index')->with(['testimonials'=> $testimonials, 'trainings' => $trainings]);
    }

   public function create()
    {
        $testimonials = Testimonial::all();
        $trainings = Training::all();
        return view('admin.training.testimonial.create', compact('trainings', 'testimonials'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'                   =>'required|min:5',
            'instance'             => 'required',
            'description'          =>  'required',
            'avatar'                =>  'required|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // $testimonial = new Testimonial();
        // $testimonial->training_id = $request->training_id;
        // $testimonial->name = $request->name;
        // $testimonial->instance = $request->instance;
        // $testimonial->description = $request->description;
        // $testimonial->avatar = $this->saveTestimonialImage($testimonial, $request);
        // $testimonial->review = $request->review;

        // $testimonial->save();
        
        $input = $request->all();
  
        if ($image = $request->file('avatar')) {
            $destinationPath = 'public/images/testimonial';
            $profileImage = md5( $image->getClientOriginalName(). microtime() ).'.'.$image->getClientOriginalExtension();//date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['avatar'] = "$profileImage";
        }
    
        Testimonial::create($input);
        return redirect()->route('admin.training.testimonial')->with('success','kamu berhasil menyimpan data testimoni.');
    }

    public function edit(Request $request)
    {
        $testimonial = Testimonial::find($request->id);
        $trainings = Training::all();
        return view('admin.training.testimonial.edit')->with(['testimonial'=> $testimonial, 'trainings' => $trainings]);

    }

    public function update(Request $request)
    {
        $request->validate([
            'name'         =>  'required|min:5',
            'instance'             => 'required',
            'description'          =>  'required',
            // 'avatar'                =>  'required|mimes:jpeg,png,jpg,gif,svg'
        ]);

        $testimonial = Testimonial::find($request->id);
         if ($testimonial) {
            $testimonial->training_id = $request->training_id;
            $testimonial->name = $request->name;
            $testimonial->instance = $request->instance;
            $testimonial->description = $request->description;
            // if ($request->hasFile('avatar')) {
            //     $this->deletTestimonialImage($testimonial);
            //     $testimonial->avatar = $this->saveTestimonialImage($testimonial, $request);
            // }
            if ($request->hasFile('avatar')) {
                $this->deletTestimonialImage($testimonial);
                 if ($image = $request->file('avatar')) {
                    $destinationPath = 'public/images/testimonial';
                    $profileImage = md5( $image->getClientOriginalName(). microtime() ).'.'.$image->getClientOriginalExtension(); //date('YmdHis') . "." . $image->getClientOriginalExtension();
                    $image->move($destinationPath, $profileImage);
                    $testimonial['avatar'] = "$profileImage";
                }
            }
            $testimonial->save();
            return redirect()->route('admin.training.testimonial')->with('success','kamu berhasil merubah data pemateri.');  
         }
         return back()->withError('Invalid testimonial.');
    }

    public function destroy(Request $request)
    {
        $testimonial = Testimonial::find($request->id);
        if ($testimonial) {
            $this->deletTestimonialImage($testimonial);
            $testimonial->delete();
            return redirect()->route('admin.training.testimonial')->with('success','You have successfully delete a testimonial.');  
        }
        return back()->withError('Invalid testimonial.');
    }

    private function deletTestimonialImage($testimonial){
        // if( $testimonial->avatar ){
        //     $imgDestroy = public_path('images/testimonial/'.$testimonial->avatar);
        //     if ( file_exists($imgDestroy) ) unlink($imgDestroy);
        // }
        if( $testimonial->avatar ){
            $imgDestroy = 'public/images/testimonial/'.$testimonial->avatar;
            // if ( file_exists($imgDestroy) ) unlink($imgDestroy);
            if (File::exists($imgDestroy)){
                File::delete($imgDestroy);
            }
        }
    }

    // private function saveTestimonialImage($testimonial, $request){
    //     $image = $request->file('avatar');
    //     $img = md5( $image->getClientOriginalName(). microtime() ).'.'.$image->getClientOriginalExtension();
    //     $location = public_path('images/testimonial/'.$img);
    //     // Image::make($image)->resize(360, 250)->save($location_thumb);
    //     Image::make($image)->save($location);
    //     return $img;
    // }
}
