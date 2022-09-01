<?php

namespace App\Http\Controllers;

use App\Models\Facility;
use App\Models\Material;
use App\Models\Trainer;
use App\Models\Training;
use App\Models\Testimonial;
use App\Models\Schedule;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class TrainingController extends Controller
{
   /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function index()
   {
      $trainings = Training::with(['facilities','trainers','materials'])->get();
      $facilities  = Facility::all();
      $materials  = Material::all();
      $trainers   = Trainer::all();
      // return ($trainings);

      return view('admin.training.index', [
         'trainings' => $trainings,
         'facilities'  => $facilities,
         'materials'  => $materials,
         'trainers'   => $trainers
      ]);
   }

   /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function create()
   {
      $facilities = Facility::all();
      $materials  = Material::all();
      $trainers   = Trainer::all();
      return view('admin.training.create', [
         'facilities' => $facilities,
         'materials'  => $materials,
         'trainers'   => $trainers
      ]);
   }

   /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
   public function store(Request $request)
   {
      $input = $request->validate([
         'title'        => 'required|min:5|max:200',
         'facility'     => 'required',
         'material'     => 'required',
         'trainer'     => 'required',
         'participant'  => 'required|numeric',
         'description'  => 'required',
         'price'        => 'required|numeric',
         'purposes'     => 'required',
         'video_link'   => 'required'
      ]);


      // $facility =$input['facility'];
      // $input['facility'] = implode(',',$facility);

      $training = Training::create([
         'title'             => $request->title,
         'slug'              => Str::slug($request->title),
         'participant'       => $request->participant,
         'description'       => $request->description,
         'price'             => $request->price,
         'purposes'          => $request->purposes,
         'video_link'        => $request->link_video
      ]);



      $training->facilities()->attach($input['facility'], ['training_id' => $training->id]);
      $training->materials()->attach($input['material'], ['training_id' => $training->id]);
      $training->trainers()->attach($input['trainer'], ['training_id' => $training->id]);

      return redirect()->route('admin.training');
   }

   /**
    * Display the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function show(Request $request)
   {
      $list_trainings = Training::all();
      $facilities  = Facility::all();
      $materials  = Material::all();
      $schedules  = Schedule::all();
      $training      = Training::with('facilities','testimonial','schedule')->where('slug', $request->slug)->first();
      
      $data           = array(
         'list_trainings' => $list_trainings,
         'training' => $training,
         'materials'  => $materials,
      );
     
      

      return view('admin.training.show')->with($data);
   }

   /**
    * Show the form for editing the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function edit(Training $training, $id)
   {
      $training = Training::find($id);
      $facilities = Facility::all();
      $materials  = Material::all();
      $trainers   = Trainer::all();
      return view('admin.training.edit', [
         'training' => $training,
         'facilities' => $facilities,
         'materials'  => $materials,
         'trainers'   => $trainers
      ]);
   }

   /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function update(Request $request, $id)
   {
      $input = $request->validate([
         'title'        => 'required|min:5|max:200',
         'facility'     => 'required',
         'material'     => 'required',
         'trainer'      => 'required',
         'participant'  => 'required|numeric',
         'description'  => 'required',
         'price'        => 'required|numeric',
         'purposes'     => 'required',
         'video_link'   => 'required'
      ]);


      $training                       = Training::find($request->id);
      if ($training) {
         $training->title            = $request->title;
         $training->slug             = Str::slug($request->title);
         $training->participant      = $request->participant;
         $training->description      = $request->description;
         $training->price            = $request->price;
         // $training->facility         = $request->facility;
         $training->purposes         = $request->purposes;
         $training->video_link       = $request->video_link;

         $training->facilities()->sync($request->facility);
         $training->materials()->sync($request->material);
         $training->trainers()->sync($request->trainer);
         
         $training->update();

         //$training->facilities()->attach($input['facility'], ['training_id' => $training->id]);
        

         return redirect()->route('admin.training');
      }
      return back()->withError('Invalid banner.');
   }

   /**
    * Remove the specified resource from storage.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function destroy($id)
   {
      //
   }
}
