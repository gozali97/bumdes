<?php

namespace App\Http\Controllers;

use App\Models\Merchandise;
use Illuminate\Http\Request;

class MerchandiseController extends Controller
{
    //

    public function index()
    {
        $data = Merchandise::all();
        // dd($data);
        return view('merchandise.index', compact('data'));;
    }

    public function details($id)
    {
        $data = Merchandise::find($id);
        return view('merchandise.details', compact('data'));
    }
}
