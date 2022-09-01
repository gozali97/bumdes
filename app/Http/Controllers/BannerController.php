<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;
//use Image;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\File;

class BannerController extends Controller
{
    public function index(){
        $banners = Banner::orderBy('id', 'desc')->paginate(5);
        return view('admin.banner.index')->with('banners', $banners);
    }

    public function create()
    {
        return view('admin.banner.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title'         =>  'required|max:150|min:5',
            'description'   =>  'required',
            'image'         =>  'required|mimes:jpeg,png,jpg,gif,svg'
        ]);

        // $banner = new Banner;
        // $banner->title = $request->title;
        // $banner->description = $request->description;
        // $banner->url = $request->url;
        // $banner->button = $request->button;
        // $banner->image = $this->saveBannerImage($banner, $request);
        
        // $banner->save();
        
         $input = $request->all();
  
        if ($image = $request->file('image')) {
            $destinationPath = 'public/images/banner';
            $profileImage = md5( $image->getClientOriginalName(). microtime() ).'.'.$image->getClientOriginalExtension();//date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }
    
        Banner::create($input);
        return redirect()->route('admin.banner')->with('success','You have successfully created a banner.');
    }

    public function edit(Request $request)
    {
        $banner = Banner::find($request->id);
        return view('admin.banner.edit')->with('banner', $banner);

    }

    public function update(Request $request)
    {
        $request->validate([
            'title'      =>  'required|max:150',
            'description'      =>  'required',
        ]);

        $banner = Banner::find($request->id);
         if ($banner) {
            $banner->title = $request->title;
            $banner->description = $request->description;
            $banner->url = $request->url;
            $banner->button = $request->button;
            if ($request->hasFile('image')) {
                $this->deletBannerImage($banner);
                 if ($image = $request->file('image')) {
                    $destinationPath = 'public/images/banner';
                    $profileImage = md5( $image->getClientOriginalName(). microtime() ).'.'.$image->getClientOriginalExtension(); //date('YmdHis') . "." . $image->getClientOriginalExtension();
                    $image->move($destinationPath, $profileImage);
                    $banner['image'] = "$profileImage";
                }
            }
            $banner->save();
            return redirect()->route('admin.banner')->with('success','You have successfully update a banner.');  
         }
         return back()->withError('Invalid banner.');
         
    }

    public function destroy(Request $request)
    {
        $banner = Banner::find($request->id);
        if ($banner) {
            $this->deletBannerImage($banner);
            $banner->delete();
            return redirect()->route('admin.banner')->with('success','You have successfully delete a banner.');  
        }
        return back()->withError('Invalid banner.');
    }

    private function deletBannerImage($banner){
        if( $banner->image ){
            $imgDestroy = 'public/images/banner/'.$banner->image;
            // if ( file_exists($imgDestroy) ) unlink($imgDestroy);
            if (File::exists($imgDestroy)){
                File::delete($imgDestroy);
            }
        }
    }

    // private function saveBannerImage($banner, $request){
    //     $image = $request->file('image');
    //     $img = md5( $image->getClientOriginalName(). microtime() ).'.'.$image->getClientOriginalExtension();
    //     $location = public_path('images/banner/'.$img);
    //     // Image::make($image)->resize(360, 250)->save($location_thumb);
    //     Image::make($image)->save($location);
       
    //     return $filename;
    // }

}
