<?php

namespace App\Http\Controllers;

use App\Models\Province;
use App\Models\Regency;
use App\Models\RegisterTraining;
use App\Models\Schedule;
use App\Models\Training;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RegisterTrainingController extends Controller
{
  
   //view training on dashboard
   public function dashboard()
   {
       $registerTrainings = RegisterTraining::orderBy('id', 'desc')->get();
       return view('admin.training.dashboard', compact('registerTrainings'));
   }
  
   // view register training
   public function index()
   {
      return view('pelatihan.daftar.step-one', [
         'provinces' => Province::all(),
         'cities' => Regency::where('province_id', session('province_id'))->get(),
      ]);
   }

   // proccess submit data step one
   public function proccess(Request $request)
   {
      // clear session
      session()->forget(['nama', 'email', 'whatsapp', 'instansi', 'jabatan', 'provinsi', 'kota']);

      // validation rules
      $rules = [
         'nama' => ['required'],
         'email' => ['required', 'email:dns', 'unique:register_trainings'],
         'whatsapp' => ['required', 'numeric'],
         'instansi' => ['required'],
         'jabatan' => ['required'],
         'provinsi' => ['required'],
         'kota' => ['required'],
      ];

      // validation messages
      $messages = [
         'required' => Str::title(':attribute') . ' harus diisi.',
         'email' => Str::title(':attribute') . ' harus valid.',
         'numeric' => Str::title(':attribute') . ' harus berupa angka.',
         'unique' => Str::title(':attribute') . ' sudah terdaftar.',
      ];

      // validation input
      $validated = $request->validate($rules, $messages);

      // save input to session
      session(['nama' => $validated['nama']]);
      session(['email' => $validated['email']]);
      session(['whatsapp' => $validated['whatsapp']]);
      session(['instansi' => $validated['instansi']]);
      session(['jabatan' => $validated['jabatan']]);
      session(['provinsi' => $validated['provinsi']]);
      session(['kota' => $validated['kota']]);
      
      // check, if session nama not available, redirect to view step one
      if (!session()->has('nama')) {
         return redirect()->back();
      }

      // continue to next step
      return view('pelatihan.daftar.step-two', [
         'trainings' => Training::all(),
      ]);

   }

   // submit data
   public function submit(Request $request)
   {
      // validation rules
      $rules = [
         'opsi' => ['required'],
         'pelatihan' => ['required'],
         'jadwal' => ['required'],
      ];

      // if input jadwal == lainnya, set rules input tanggal
      if ($request->jadwal == 'Lainnya') {
         $rules['tanggal'] = 'required';
      }

      // validation messages
      $messages = [
         'required' => Str::title(':attribute') . ' harus diisi.',
      ];

      // validation input
      $validator = Validator::make($request->all(), $rules, $messages);

      // if invalid, send message error
      if ($validator->fails()) {
         return ['invalid' => $validator->getMessageBag()];
      }

      // input validated
      $data = $validator->validated();

      // get session and fill data
      $data['nama'] = session('nama');
      $data['email'] = session('email');
      $data['whatsapp'] = session('whatsapp');
      $data['instansi'] = session('instansi');
      $data['jabatan'] = session('jabatan');
      $data['provinsi'] = session('provinsi');
      $data['kota'] = session('kota');

      // clear session
      session()->forget(['nama', 'email', 'whatsapp', 'instansi', 'jabatan', 'provinsi', 'kota']);

      // save data to table register trainings
      return RegisterTraining::create($data);
   }

   // get regency / city by province
   public function getCityByProvince($province_id)
   {
      session(['province_id' => $province_id]);
      return Regency::where('province_id', $province_id)->get();
   }

   // get schedule by training
   public function getScheduleByTraining($training_id)
   {
      session(['training_id' => $training_id]);
      return Schedule::where('training_id', $training_id)->whereDate('event_date', '>=', Carbon::now())->get();
   }

   // get schedule by id
   public function getScheduleById($id)
   {
      return Schedule::where('id', $id)->first();
   }
}
