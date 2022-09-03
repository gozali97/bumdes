<?php

namespace App\Http\Controllers\Mentorship;

use App\Http\Controllers\Controller;
use App\Models\Mentorship\Mentorship;
use App\Models\Mentorship\Alumnae;
use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\File;

class AlumnaeController extends Controller
{
    public function index(){
        $alumnaes = Alumnae::orderBy('id', 'desc')->get();
        return view('admin.mentorship.alumnae.index')->with('alumnaes', $alumnaes);
    }

    public function create()
    {
        $mentorships = Mentorship::all();
        $alumnaes     = Alumnae::all();
        return view('admin.mentorship.alumnae.create', compact('mentorships', 'alumnaes'));
    }

    public function store(Request $request)
    {
        // $request->validate([
        //     'alumnae_name'                   =>'required|min:5',
        //     'institution'             => 'required',
        //     'description'          =>  'required',
        //     'image'                =>  'required|mimes:jpeg,png,jpg,gif,svg',
        // ]);

        // $alumnae = new alumnae();
        // $alumnae->mentorship_id = $request->mentorship_id;
        // $alumnae->alumnae_name = $request->alumnae_name;
        // $alumnae->institution = $request->institution;
        // $alumnae->description = $request->description;
        // $alumnae->image = $this->saveAlumnaeImage($alumnae, $request);
        // $alumnae->review = $request->review;

        // $alumnae->save();
        
        $input =  $request->validate([
            'mentorship_id'         => 'required',
            'alumnae_name'          =>'required|min:5',
            'institution'           => 'required',
            'description'          =>  'required',
            'image'                =>  'required|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

    
      
       if ($image = $request->file('image')) {
            $destinationPath = 'public/images/mentorship/alumnae';
            $profileImage = md5( $image->getClientOriginalName(). microtime() ).'.'.$image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }
        
        
      $alumnae = Alumnae::create([
         'mentorship_id'         =>  $request->mentorship_id,
         'alumnae_name'          =>  $request->alumnae_name,
         'institution'           => $request->institution,
         'description'           =>  $request->description,
         'image'                   => $input['image'],
      ]);
      

      $alumnae->save();
        return redirect()->route('admin.mentorship.alumnae')->with('success','kamu berhasil menyimpan data testimoni.');
    }

    public function edit(Request $request)
    {
        $alumnae = alumnae::find($request->id);
        $mentorships = Mentorship::all();
        return view('admin.mentorship.alumnae.edit')->with(['alumnae'=> $alumnae, 'mentorships' => $mentorships]);

    }

    public function update(Request $request)
    {
        $request->validate([
            'alumnae_name'         =>  'required|min:5',
            'institution'             => 'required',
            'description'          =>  'required',
        ]);

        $alumnae = alumnae::find($request->id);
         if ($alumnae) {
            $alumnae->mentorship_id = $request->mentorship_id;
            $alumnae->alumnae_name = $request->alumnae_name;
            $alumnae->institution = $request->institution;
            $alumnae->description = $request->description;
            if ($request->hasFile('image')) {
                $this->deletAlumnaeImage($alumnae);
                 if ($image = $request->file('image')) {
                    $destinationPath = 'public/images/mentorship/alumnae';
                    $profileImage = md5( $image->getClientOriginalName(). microtime() ).'.'.$image->getClientOriginalExtension(); 
                    $image->move($destinationPath, $profileImage);
                    $alumnae['image'] = "$profileImage";
                }
            }
            $alumnae->save();
            return redirect()->route('admin.mentorship.alumnae')->with('success','kamu berhasil merubah data pemateri.');  
         }
         return back()->withError('Invalid alumnae.');
    }

    public function destroy(Request $request)
    {
        $alumnae = alumnae::find($request->id);
        if ($alumnae) {
            $this->deletAlumnaeImage($alumnae);
            $alumnae->delete();
            return redirect()->route('admin.alumnae')->with('success','You have successfully delete a alumnae.');  
        }
        return back()->withError('Invalid alumnae.');
    }

    private function deletAlumnaeImage($alumnae){
        if( $alumnae->image ){
            $imgDestroy = 'public/images/mentorship/alumnae/'.$alumnae->image;
            if (File::exists($imgDestroy)){
                File::delete($imgDestroy);
            }
        }
    }

    // private function saveAlumnaeImage($alumnae, $request){
    //     $image = $request->file('image');
    //     $img = md5( $image->getClientOriginalName(). microtime() ).'.'.$image->getClientOriginalExtension();
    //     $location = public_path('images/mentorship/alumnae/'.$img);
    //     // Image::make($image)->resize(360, 250)->save($location_thumb);
    //     Image::make($image)->save($location);
    //     return $img;
    // }
}
