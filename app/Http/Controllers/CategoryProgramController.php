<?php

namespace App\Http\Controllers;

use App\Models\CategoryProgram;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\File;

class CategoryProgramController extends Controller
{
    public function index(){
        $Categories = CategoryProgram::orderBy('id', 'asc')->paginate(5);
        return view('admin.program.category.index')->with('Categories', $Categories);
    }

    public function create()
    {
        return view('admin.program.category.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'program_name'  =>  'required|max:150|min:5',
            // 'slug'          =>  'required',
            'description'   =>  'required',
            'image'         =>  'required|mimes:jpeg,png,jpg,gif,svg'
        ]);

        // $category = new CategoryProgram();
        // $category->program_name = $request->program_name;
        // $category->slug = Str::slug($request->program_name);
        // $category->description = $request->description;
        // $category->button = $request->button;
        // $category->image = $this->saveCategoryImage($category, $request);

        // $category->save();
        
        // $input = $request->all();
        // $input = $request->slug = Str::slug($request->program_name);
  
        if ($image = $request->file('image')) {
            $destinationPath = 'public/images/category/';
            $profileImage = md5( $image->getClientOriginalName(). microtime() ).'.'.$image->getClientOriginalExtension();//date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            // $input['image'] = "$profileImage";
        }
    
        CategoryProgram::create([
            'program_name' => $request->program_name,
            'slug'         => Str::slug($request->program_name),
            'description'  => $request->description,
            'button '      => $request->button,
            'image'        => $profileImage
            ]);
        return redirect()->route('admin.program.category')->with('success','You have successfully created a program.');
    }

    public function edit(Request $request)
    {
        $category = CategoryProgram::find($request->id);
        return view('admin.program.category.edit')->with('category', $category);

    }

    public function update(Request $request)
    {
        $request->validate([
            'program_name'  =>  'required|max:150|min:5',
            'description'   =>  'required',
        ]);

        // $category = CategoryProgram::find($request->id);
        //  if ($category) {
        //     $category->program_name = $request->program_name;
        //     $category->slug         = Str::slug($request->program_name);
        //     $category->description  = $request->description;
        //     $category->button       = $request->button;
        //     if ($request->hasFile('image')) {
        //         $this->deletCategoryImage($category);
        //         $category->image = $this->saveCategoryImage($category, $request);
        //     }
        //     $category->save();
        //     return redirect()->route('admin.program.category')->with('success','You have successfully update a category.');  
        //  }
        //  return back()->withError('Invalid category.');
        
       $category = CategoryProgram::find($request->id);
        if ($category) {
           $category->program_name = $request->program_name;
           $category->slug         = Str::slug($request->program_name);
           $category->description  = $request->description;
           $category->button       = $request->button;
           if ($request->hasFile('image')) {
               $this->deletCategoryImage($category);
                if ($image = $request->file('image')) {
                   $destinationPath = 'public/images/category/';
                   $profileImage = md5( $image->getClientOriginalName(). microtime() ).'.'.$image->getClientOriginalExtension(); //date('YmdHis') . "." . $image->getClientOriginalExtension();
                   $image->move($destinationPath, $profileImage);
                   $category['image'] = "$profileImage";
               }
           }
           $category->save();
           return redirect()->route('admin.program.category')->with('success','You have successfully update a category.');  
        }
    return back()->withError('Invalid category.');
    }

    public function destroy(Request $request)
    {
        $category = CategoryProgram::find($request->id);
        if ($category) {
            $this->deletCategoryImage($category);
            $category->delete();
            return redirect()->route('admin.program.category')->with('success','You have successfully delete a category.');  
        }
        return back()->withError('Invalid category.');
    }

    private function deletCategoryImage($category){
        // if( $category->image ){
        //     $imgDestroy = public_path('images/category/'.$category->image);
        //     if ( file_exists($imgDestroy) ) unlink($imgDestroy);
        // }
        
         if( $category->image ){
            $imgDestroy = 'public/images/category/'.$category->image;
            // if ( file_exists($imgDestroy) ) unlink($imgDestroy);
            if (File::exists($imgDestroy)){
                File::delete($imgDestroy);
            }
        }
    }

    // private function saveCategoryImage($category, $request){
    //     $image = $request->file('image');
    //     $img = md5( $image->getClientOriginalName(). microtime() ).'.'.$image->getClientOriginalExtension();
    //     $location = public_path('images/category/'.$img);
    //     // Image::make($image)->resize(360, 250)->save($location_thumb);
    //     Image::make($image)->save($location);
    //     return $img;
    // }

}
