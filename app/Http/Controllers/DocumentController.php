<?php

namespace App\Http\Controllers;

use App\Models\CategoryDocument;
use App\Models\Documents;

class DocumentController extends Controller
{
    public function index()
    {
        return view('download.index', [
            'categories' => CategoryDocument::all(),
            'documents' => Documents::with('categoryDocument')->filter(request(['search', 'category', 'sort']))->latest()->paginate(20)->withQueryString()
        ]);
    }

    public function download(Documents $documents)
    {
        return response()->download(public_path($documents->path));
    }
}
