<?php

namespace App\Http\Controllers;

use App\Mail\KirimOtp;
use App\Mail\LupaPassword;
use App\Models\Profil;
use App\Models\Province;
use App\Models\Regency;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use RealRashid\SweetAlert\Facades\Alert;

class AuthController extends Controller
{
   public function index(Request $request)
   {
      //dd($request->session()->get('email'));
      $request->session()->forget('email');
      $request->session()->forget('otp');
      return view('authentikasi.register.step1');
   }
   public function register(Request $request)
   {
      $otp = rand(1111, 9999);
      $request->session()->put('otp', $otp);
      $request->session()->put('email', $request->email);
      $count_user = User::where('email', $request->email)->count();
      $user = User::where('email', $request->email)->first();
      if ($count_user > 0) {
         if ($user->email_verified_at == null) {
            Mail::to($request->email)->send(new KirimOtp($otp));
            return redirect()->route('verification');
         }
         Alert::error('Gagal', 'Email yang anda gunakan telah terdaftar');
         return redirect()->back();
      } else {
         Mail::to($request->email)->send(new KirimOtp($otp));
         return redirect()->route('verification');
      }
   }

   public function resendOtp(Request $request)
   {
      $otp = rand(1111, 9999);
      $request->session()->put('otp', $otp);

      Mail::to($request->session()->get('email'))->send(new KirimOtp($otp));
      return redirect()->route('verification');
   }

   public function verification(Request $request)
   {
      $email = $request->session()->get('email');
      if (!$email) {
         return redirect()->route('daftar');
      } else {
         return view('authentikasi.register.step2', ['email' => $email]);
      }
   }
   public function proses_verification(Request $request)
   {
      $kode = $request->otp1 . $request->otp2 . $request->otp3 . $request->otp4;
      $otp = $request->session()->get('otp');
      if ($otp == $kode) {
         // $user = User::where('email', $request->session()->get('email'))->where('email_verified_at', '!=', '')->first();
         // if (!$user) {
         //    Alert::success('Berhasil', 'Email anda sudah terverifikasi');
         //    return redirect()->route('profil_satu');
         // } else {
         $user = new User();
         $user->create([
            'name' => '',
            'email' => $request->session()->get('email'),
            'password' => '',
            'hak_akses' => '1'
         ]);
         // $user->email = $request->session()->get('email');
         // $user->save();
         Alert::success('Berhasil', 'Email anda sudah terverifikasi');
         return redirect()->route('profil_satu');
         // }
      } else {
         Alert::error('OTP Salah', 'OTP yang anda masukkan salah');
         return redirect()->back();
      }
   }
   public function profil_satu(Request $request)
   {
      $email = $request->session()->get('email');
      $count_user = User::where('email', $email)->count();
      if ($count_user == 0) {
         return redirect()->route('daftar');
      } else {
         return view('authentikasi.register.step3');
      }
   }
   public function proses_profilsatu(Request $request)
   {
      $messages = [
         'required' => 'Data Harus Disi Semua',
      ];
      $request->validate([
         'daftarsebagai' => 'required',
         'nama_lengkap' => 'required',
         'tgl_lahir' => 'required',
         'jekel' => 'required'
      ], $messages);
      $request->session()->put('daftarsebagai', $request->daftarsebagai);
      $request->session()->put('nama_lengkap', $request->nama_lengkap);
      $request->session()->put('tgl_lahir', $request->tgl_lahir);
      $request->session()->put('jekel', $request->jekel);

      return redirect()->route('profil_dua');
   }
   public function profil_dua(Request $request)
   {
      $email = $request->session()->get('email');
      $count_user = User::where('email', $email)->count();
      if ($count_user == 0) {
         return redirect()->route('daftar');
      } else {
         $provinces = Province::all();
         $regencies = Regency::all();
         return view('authentikasi.register.step4', ['provinces' => $provinces, 'regencies' => $regencies]);
      }
   }
   public function get_kota($id)
   {
      $data = DB::table('regencies')->where("province_id", $id)->pluck('id', 'name');
      return response()->json($data);
   }
   public function proses_profildua(Request $request)
   {
      $messages = [
         'required' => 'Data Harus Disi Semua',
      ];
      $request->validate([
         'nama_bumdes' => 'required',
         'jabatan' => 'required',
         'provinsi' => 'required',
         'kota' => 'required'
      ], $messages);

      $request->session()->put('nama_bumdes', $request->nama_bumdes);
      $request->session()->put('jabatan', $request->jabatan);
      $request->session()->put('provinsi', $request->provinsi);
      $request->session()->put('kota', $request->kota);

      return redirect()->route('profil_tiga');
   }
   public function profil_tiga(Request $request)
   {
      $email = $request->session()->get('email');
      $count_user = User::where('email', $email)->count();
      if ($count_user == 0) {
         return redirect()->route('daftar');
      } else {
         return view('authentikasi.register.step5');
      }
   }
   public function proses_profiltiga(Request $request)
   {
      $messages = [
         'required' => 'Data Harus Disi Semua',
         'same' => 'Password tidak cocok',
         'min' => 'Password harus lebih dari 8 karakter'
      ];
      $request->validate([
         'no_ponsel' => 'required',
         'password' => 'min:8|same:konfirmasi_password',
         'konfirmasi_password' => 'min:8',
      ], $messages);

      $user = User::where('email', $request->session()->get('email'))->first();
      $id_user = $user->id;

      $profil = new Profil();
      $profil->user_id = $id_user;
      $profil->tgl_lahir = $request->session()->get('tgl_lahir');
      $profil->jekel = $request->session()->get('jekel');
      $profil->nama_instansi = $request->session()->get('nama_bumdes');
      $profil->jabatan = $request->session()->get('jabatan');
      $profil->province_id = $request->session()->get('provinsi');
      $profil->city_id = $request->session()->get('kota');
      $profil->no_telp = $request->no_ponsel;
      $profil->save();

      $edit_user = User::find($id_user);
      $edit_user->name = $request->session()->get('nama_lengkap');
      $edit_user->password = bcrypt($request->password);
      $role = $request->session()->get('daftarsebagai');
      if ($role == "Pegawai Bumdes") {
         $edit_user->hak_akses = 1;
      } else if ($role == "Pegawai Desa") {
         $edit_user->hak_akses = 2;
      } else if ($role == "Umum") {
         $edit_user->hak_akses = 3;
      }
      $edit_user->email_verified_at = date('d-m-Y  h:i:s');
      $edit_user->save();
      return redirect()->route('selesai');
   }
   public function selesai()
   {
      return view('authentikasi.register.step6');
   }
   public function login()
   {
      if ($user = Auth::user()) {
         if ($user->hak_akses == '0') {
            return redirect()->intended('admin');
         } elseif ($user->hak_akses == '1') {
            return redirect()->intended('pegawai_bumdes');
         } elseif ($user->hak_akses == '2') {
            return redirect()->intended('pegawai_desa');
         } elseif ($user->level == '3') {
            return redirect()->intended('umum');
         }
      }
      return view('authentikasi.login.login');
   }
   public function proses_login(Request $request)
   {
      $messages = [
         'required' => 'Data Harus Disi Semua',
      ];
      request()->validate([
         'email' => 'required',
         'password' => 'required',
      ], $messages);

      $kredensil = $request->only('email', 'password');
      $ingat = $request->remember ? true : false;
      if (Auth::attempt($kredensil, $ingat)) {
         $user = Auth::user();
         if ($user->hak_akses == '0') {
            return redirect()->intended('admin');
         } elseif ($user->hak_akses == '1') {
            return redirect()->intended('pegawai_bumdes');
         } elseif ($user->hak_akses == '2') {
            return redirect()->intended('pegawai_desa');
         } elseif ($user->hak_akses == '3') {
            return redirect()->intended('umum');
         }
         return redirect()->intended('/login');
      }
      Alert::error('Gagal', 'Email dan password tidak terdaftar');
      return redirect('/login');
   }
   public function logout(Request $request)
   {
      if (Auth::user()->hak_akses == "0") {
         $request->session()->flush();
         Auth::logout();
         return Redirect('/login-admin');
      } else {
         $request->session()->flush();
         Auth::logout();
         return Redirect('/login');
      }
   }
   public function lupa_password()
   {
      return view('authentikasi.lupapassword.lupa');
   }
   public function proses_lupapassword(Request $request)
   {
      $user = User::where('email', $request->email)->count();
      if ($user <= 0) {
         Alert::error('Gagal', 'Email yang anda masukkan belum terdaftar');
         return redirect()->back();
      } else {
         $request->session()->put('email_lupa', $request->email);
         Mail::to($request->email)->send(new LupaPassword($request->email));
         Alert::success('Berhasil', 'Cek emailmu untuk melihat link ganti password');
         return redirect()->route('login');
      }
   }
   public function password_baru(Request $request, $id)
   {
      $data = Crypt::decrypt($id);
      $user = User::where('email', $data)->count();
      $email_lupa = $request->session()->get('email_lupa');
      if ($user <= 0) {
         Alert::error('Gagal', 'Email yang anda masukkan belum terdaftar');
         return redirect()->route('lupa_password');
      } else {
         $email = $data;
         if ($email_lupa != null) {
            return view('authentikasi.lupapassword.passwordbaru', ['email' => $email]);
         } else {
            Alert::error('Gagal', 'Kamu belum menginputkan emailmu');
            return redirect()->route('lupa_password');
         }
      }
   }
   public function proses_password_baru(Request $request, $id)
   {
      $messages = [
         'required' => 'Data Harus Disi Semua',
         'same' => 'Password tidak cocok',
         'min' => 'Password harus lebih dari 8 karakter'
      ];
      $request->validate([
         'password' => 'required|min:8|same:konfirmasi_password',
         'konfirmasi_password' => 'required|min:8',
      ], $messages);
      $edit_user = User::where('email', $id)->first();
      $edit_user->password = bcrypt($request->password);
      $edit_user->save();
      $request->session()->forget('email_lupa');
      Alert::success('Berhasil', 'Pergantian password berhasil');
      return redirect()->route('login');
   }
   public function login_admin()
   {
      return view('admin.login.login');
   }
}
