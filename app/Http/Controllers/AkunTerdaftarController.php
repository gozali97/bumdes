<?php

namespace App\Http\Controllers;

use App\Exports\DataPendaftar;
use App\Models\Profil;
use App\Models\User;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class AkunTerdaftarController extends Controller
{
   public function index()
   {
      $users = User::whereNotIn('hak_akses', ['0'])->get();
    //   $province = Profil::all();
    //   foreach ($province as $pro) {
    //      $test = $pro->profil->name;
    //   }
      // dd($test);
      return view('admin.akunterdaftar.index', ['users' => $users]);
   }
   public function lihat($id)
   {
    
    $users = User::where('id', $id)->first();
    //   $users = User::select('users.id', 'users.name', 'profil.nama_instansi', 'profil.jabatan', 'provinces.name AS provinsi', 'regencies.name AS kota', 'profil.tgl_lahir', 'profil.jekel', 'users.email', 'profil.no_telp', 'users.hak_akses')
    //      ->join('profil', 'users.id', '=', 'profil.user_id')
    //      ->join('provinces', 'profil.province_id', '=', 'provinces.id')
    //      ->join('regencies', 'profil.city_id', '=', 'regencies.id')
    //      ->where('users.id', $id)->first();
      //$users = User::find($id);
      return response()->json([
         'data' => $users
      ]);
   }
   public function export()
   {
      return Excel::download(new DataPendaftar, 'pendaftar.xlsx');
   }
}
