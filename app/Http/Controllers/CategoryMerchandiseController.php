<?php

namespace App\Http\Controllers;

use App\Models\CategoryMerchandise;
use App\Models\MerchandiseDetails;
use Illuminate\Http\Request;

class CategoryMerchandiseController extends Controller
{
    //

    public function index()
    {
        $data = CategoryMerchandise::all();
        return view('admin.merchandise.category.index', compact('data'));
    }

    public function create()
    {
        return view('admin.merchandise.category.create');
    }

    public function input(Request $request)
    {
        $request->validate([
            'slug'              =>  'required',
        ]);

        $input = $request->all();

        CategoryMerchandise::create($input);
        return redirect()->route('admin.category')->with('success', 'You have successfully created a kategori merchandise.');
    }

    public function edit($id)
    {
        $category = CategoryMerchandise::find($id);
        return view('admin.merchandise.category.edit', [
            'category' => $category,
        ]);
    }

    public function update(Request $request)
    {
        $request->validate([
            'slug'              =>  'required',
        ]);

        $category = CategoryMerchandise::find($request->id);
        if ($category) {
            $category->slug = $request->slug;

            $category->save();
            return redirect()->route('admin.category')->with('success', 'You have successfully update a category.');
        }
        return back()->withError('Invalid archive.');
    }

    public function destroy($id)
    {
        $data = CategoryMerchandise::find($id);

        $data->delete();
        return redirect()->route('admin.category')->with('success', 'You have successfully delete category.');
    }
}
