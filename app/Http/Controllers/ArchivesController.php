<?php

namespace App\Http\Controllers;

use App\Models\ArchiveCategory;
use App\Models\Archives;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;

class ArchivesController extends Controller
{
    public function index()
    {
      $archives = Archives::orderBy('id', 'asc')->get();
      $categories = ArchiveCategory::all();
      return view('admin.archives.index')->with(['archives'=> $archives, 'categories' => $categories]);
    }

    public function indexCategory()
    {
      $categories = ArchiveCategory::orderBy('id', 'desc')->get();
      return view ('admin.archives.category.index', compact('categories'));

    }

    public function create()
    {
      $Arcives   = Archives::all();
      $categories = ArchiveCategory::all();
      return view('admin.archives.create', compact('categories'));
    }

    public function createCategory()
    {
      $categories = ArchiveCategory::all();
      return view('admin.archives.category.create', compact('categories'));
    }

  

    public function storeCategory(Request $request)
    {
         $request->validate([
            'name'              =>  'required',

      ]);

      $category = new ArchiveCategory();
      $category->name	 = $request->name	;
      $category->slug = Str::slug($request->name);


      $category->save();
      return redirect()->route('admin.archives.category')->with('success','You have successfully created a Category.');
    }


    public function store(Request $request)
    {
        $request->validate([
            // 'archive_category_id'   =>  'required',
            'name'                  =>  'required',
            'path'                =>  'required|mimes:pdf,txt|max:20480',
        ]);


        $input = $request->all();
  
        if ($file = $request->file('path')) {
            $destinationPath = 'public/archive/';
            $profileFile =  $file->getClientOriginalName(); //. microtime() .'.'.$file->getClientOriginalExtension();
            $file->move($destinationPath, $profileFile);
            $input['path'] = "$profileFile";
        }
    
        Archives::create($input);

        return redirect()->route('admin.archives')->with('success','You have successfully created a archive.');
    }

    public function edit($id)
    {
        $archive = Archives::find($id);
        $categories = ArchiveCategory::all();
        return view('admin.archives.edit', [
            'archive' => $archive,
            'categories' => $categories
        ]);

    }

    public function editCategory($id)
    {
        $category = ArchiveCategory::find($id);
        
        return view('admin.archives.category.edit', compact('category'));

    }

    public function update(Request $request)
    {
        $request->validate([
            'name'                  =>  'required',
        ]);

        $archive = Archives::find($request->id);
            if ($archive) {
                $archive->name = $request->name;
                if ($request->hasFile('path')) {
                    $this->deletArchivePath($archive);
                    if ($path = $request->file('path')) {
                        $destinationPath = 'public/archive/';
                        $profilePath = $path->getClientOriginalName(). microtime() ;
                        $path->move($destinationPath, $profilePath);
                        $archive['path'] = "$profilePath";
                    }
                }
                $archive->save();
                return redirect()->route('admin.archives')->with('success','You have successfully update a archive.'); 
            }
        return back()->withError('Invalid archive.'); 
    }

    public function updateCategory(Request $request)
    {
        $request->validate([
            'name'              =>  'required',
        ]);

        $category = ArchiveCategory::find($request->id);

        $category->name	 = $request->name	;
        $category->slug = Str::slug($request->name);
    
        $category->save();
        return redirect()->route('admin.archives.category')->with('success','You have successfully update a category.');  
    }

    public function destroy(Request $request)
    {
        $archive = Archives::find($request->id);
        if ($archive) {
            $this->deletArchivePath($archive);
            $archive->delete();
            return redirect()->route('admin.archives')->with('success','You have successfully delete a archive.');  
        }
        return back()->withError('Invalid archive.');

    }

    public function destroyCategory(Request $request)
    {
        $category = ArchiveCategory::find($request->id);
        
        $category->delete();
        return redirect()->route('admin.archives.category')->with('success','You have successfully delete a category.');  

    }

    private function deletArchivePath($archive){
        if( $archive->path ){
            // $imgDestroy = 'public/images/banner/'.$banner->image;
            $imgDestroy = 'public/archive/' .$archive->path;
            if (File::exists($imgDestroy)){
                File::delete($imgDestroy);
            }
        }
    }
 
    public function download(Archives $archives)
    {
       return response()->download('public/archive/'.$archives->path);
    }

    public function show()
    {
      return view('frontend.download.index', [
         'categories' => ArchiveCategory::all(),
         'archives' => Archives::with('archiveCategory')->filter(request(['search', 'category', 'sort']))->latest()->paginate(20)->withQueryString()
      ]);
    }
}
