<?php

namespace App\Http\Controllers;

use App\Models\CategoryMerchandise;
use App\Models\Merchandise;
use App\Models\MerchandiseDetails;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\File;

class MerchandiseController extends Controller
{
    //

    public function index()
    {
        $Merchandise = Merchandise::orderBy('id', 'asc')->get();
        $category = CategoryMerchandise::all();
        // dd($Merchandise);
        return view('admin.merchandise.index')->with(['merchandise' => $Merchandise, 'category' => $category]);
    }

    public function create()
    {
        $slug = CategoryMerchandise::all();
        return view('admin.merchandise.create', compact('slug'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_produk'                =>  'required',
            'details'         =>  'required',
            'images'         =>  'required',
            'slug'              =>  'required',
            'harga'         =>  'required',
            'stok'         =>  'required',
        ]);
        if ($request->hasFile('images')) {
            // $request->file('gambar')->move('imgmenu/', $request->file('gambar')->getClientOriginalName());
            // $data->gambar = $request->file('gambar')->getClientOriginalName();
            // $data->save();
            $arrImage = array();
            $images = $request->file('images');
            // dd($images);
            foreach ($images as $image) {
                $name = $image->getClientOriginalName();
                $path = $image->move('assets/home/img/merchandise', $name);
                array_push($arrImage, '/' . $path);
            }
            // dd($arrImage);
            Merchandise::create([
                'nama_produk' => $request->nama_produk,
                'slug' => $request->slug,
                'details' => $request->details,
                'images' => $arrImage,
                'harga' => $request->harga,
                'stok' => $request->stok,
            ]);
        }

        return redirect()->route('admin.merch')->with('success', 'You have successfully created a newslatter.');
    }

    public function edit($id)
    {
        $slug = CategoryMerchandise::all();
        $merchandise = Merchandise::find($id);
        return view('admin.merchandise.edit', [
            'merchandise' => $merchandise,
            'slug' => $slug,
        ]);
    }

    public function update(Request $request)
    {

        $request->validate([
            'nama_produk'                =>  'required',
            'slug'              =>  'required',
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
                $this->deleteMerch($merchandise);
                if ($request->hasFile('images')) {
                    $arrImage = array();
                    $images = $request->file('images');
                    // dd($images);
                    foreach ($images as $image) {
                        $name = $image->getClientOriginalName();
                        $path = $image->move('assets/home/img/merchandise', $name);
                        array_push($arrImage, '/' . $path);
                    }
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

    private function deleteMerch($merchandise)
    {
        if ($merchandise->file) {
            // $imgDestroy = 'public/images/banner/'.$banner->image;
            $fileDestroy = 'assets/home/img/merchandise/' . $merchandise->file;
            if (File::exists($fileDestroy)) {
                File::delete($fileDestroy);
            }
        }
    }
}
