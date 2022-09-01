<?php

namespace App\Exports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\FromView;
use Illuminate\Contracts\View\View;

class DataPendaftar implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    // public function collection()
    // {
    //     // return 
    //     $user = User::join('profil', 'users.id','=','profil.user_id')
    //     ->join('provinces','profil.province_id','=','provinces.id')
    //     ->join('regencies','profil.city_id','=','regencies.id')
    //     ->select('users.name', 'profil.tgl_lahir', 'profil.jekel', 'profil.nama_instansi', 'profil.jabatan', 'provinces.name as provinsi', 'regencies.name', 'profil.no_telp', 'users.email')
    //     ->get();
    //     dd($user);
    // }
    public function view(): View
    {
        return view('exports.pendaftar', [
            'pendaftars' => User::all(),
        ]);
    }
}
