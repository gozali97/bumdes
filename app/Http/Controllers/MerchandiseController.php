<?php

namespace App\Http\Controllers;

use App\Models\CategoryMerchandise;
use App\Models\Merchandise;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\File;

class MerchandiseController extends Controller
{
    //

    public function index()
    {
        $Merchandise = Merchandise::orderBy('id', 'asc')->get();
        return view('admin.merchandise.index')->with(['merchandise' => $Merchandise]);;
    }

    public function create()
    {
        return view('admin.merchandise.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_produk'                =>  'required',
            'slug'              =>  'required',
            'stok'         =>  'required',
            'harga'         =>  'required',
            'stok'         =>  'required',
            'details'         =>  'required',
            'images'                =>  'required',
        ]);


        $input = $request->all();

        if ($file = $request->file('images')) {
            $destinationFile = 'assets/home/img/merchandise/';
            $profileFile =  $file->getClientOriginalName();
            $file->move($destinationFile, $profileFile);
            $input['images'] = "$profileFile";
        }

        Merchandise::create($input);

        return redirect()->route('admin.merch')->with('success', 'You have successfully created a newslatter.');
    }

    public function edit($id)
    {
        $merchandise = Merchandise::find($id);
        return view('admin.merchandise.edit', [
            'merchandise' => $merchandise,
        ]);
    }

    public function update(Request $request)
    {
        $request->validate([
            'nama_produk'                =>  'required',
            'slug'              =>  'required',
            'stok'         =>  'required',
            'harga'         =>  'required',
            'stok'         =>  'required',
            'details'         =>  'required',
        ]);

        $merchandise = Merchandise::find($request->id);
        if ($merchandise) {
            $merchandise->nama_produk = $request->nama_produk;
            $merchandise->slug = $request->slug;
            $merchandise->stok = $request->stok;
            $merchandise->harga = $request->harga;
            $merchandise->details = $request->details;
            if ($request->hasFile('images')) {
                $this->deletNewslatter($merchandise);
                if ($file = $request->file('images')) {
                    $destinationFile = 'assets/home/img/merchandise/';
                    $profile = $file->getClientOriginalName() . microtime();
                    $file->move($destinationFile, $profile);
                    $merchandise['images'] = "$profile";
                }
            }
            $merchandise->save();
            return redirect()->route('admin.merch')->with('success', 'You have successfully update a newslatter.');
        }
        return back()->withError('Invalid archive.');
    }

    public function destroy(Request $request)
    {
        $merchandise = Merchandise::find($request->id);
        if ($merchandise) {
            $this->deletMerchandise($merchandise);
            $merchandise->delete();
            return redirect()->route('admin.merch')->with('success', 'You have successfully delete a newslatter.');
        }
        return back()->withError('Invalid merchandise.');
    }

    private function deletMerchandise($merchandise)
    {
        if ($merchandise->file) {
            // $imgDestroy = 'public/images/banner/'.$banner->image;
            $fileDestroy = 'assets/home/img/merchandise/' . $merchandise->file;
            if (File::exists($fileDestroy)) {
                File::delete($fileDestroy);
            }
        }
    }

    public function details($id)
    {
        $data = Merchandise::find($id);
        return view('merchandise.details', compact('data'));
    }
}
