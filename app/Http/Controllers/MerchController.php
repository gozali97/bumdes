<?php

namespace App\Http\Controllers;

use App\Models\CategoryMerchandise;
use App\Models\Merchandise;
use Illuminate\Http\Request;

class MerchController extends Controller
{
    public function index()
    {
        $category = CategoryMerchandise::all();
        $data = Merchandise::with('categoryMerchandise')->filter(request(['search', 'category', 'sort']))->latest()->paginate(20)->withQueryString();
        // dd($category);
        return view('merchandise.index', compact('category', 'data'));
        // [
        //     'category' => CategoryMerchandise::all(),
        //     // dd($category),
        //     'data' => Merchandise::with('categoryMerchandise')->filter(request(['search', 'category', 'sort']))->latest()->paginate(20)->withQueryString()
        // ]);
    }

    public function create()
    {
        return view('admin.merchandise.create');
    }


    public function details($id)
    {
        $data = Merchandise::find($id);
        return view('merchandise.details', compact('data'));
    }
}
