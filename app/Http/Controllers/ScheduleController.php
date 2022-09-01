<?php

namespace App\Http\Controllers;

use App\Models\Schedule;
use App\Models\Training;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $schedules        = Schedule::orderBy('id', 'desc')->get();
        $trainings  = Training::all();

        $data             = array(
            'schedules'   =>$schedules,
            'trainings'   =>$trainings
        );
        return view('admin.training.schedule.index')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $schedules  = Schedule::all();
        $trainings  = Training::all();
        return view('admin.training.schedule.create', ['schedules' => $schedules, 'trainings' => $trainings]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    //   return dd($request->all());
        $request->validate([
            // 'training_id   '    =>'required',
            'event_date'        =>'required',
            'event_duration'    =>'required',
            'event_time'        =>'required',
            'location'          =>'required',
            'last_registration' =>'required',

        ]);

        $schedule                     = new Schedule();
        $schedule->training_id        = $request->training_id;
        $schedule->event_date         = date('Y-m-d H:i:s' , strtotime($request->event_date));
        $schedule->event_duration     = $request->event_duration;
        $schedule->event_time         = $request->event_time;
        $schedule->location           = $request->location;
        $schedule->last_registration  = date('Y-m-d H:i:s' , strtotime($request->last_registration));
        $schedule->save();
        return redirect()->route('admin.training.schedule');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $schedule = Schedule::find($request->id);
        $trainings = Training::all();

        $data = array(
            'schedule' => $schedule,
            'trainings' => $trainings
        );

        return view('admin.training.schedule.edit')->with($data);
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
        $input= $request->validate([
            'event_date'        =>'required',
            'event_duration'    =>'required',
            'event_time'        =>'required',
            'location'          =>'required',
            'last_registration' =>'required',
        ]);


        $schedule                           = Schedule::find($request->id);
        if($schedule){
            $schedule->event_date           = date('Y-m-d H:i:s' , strtotime($request->event_date));
            $schedule->event_duration       = $request->event_duration;
            $schedule->event_time           = $request->event_time;
            $schedule->location             = $request->location;
            $schedule->last_registration    = date('Y-m-d H:i:s' , strtotime($request->last_registration));
            $schedule->update();
    
            return redirect()->route('admin.training.schedule');
        }
        return back()->withError('Invalid Schedule.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $schedule = Schedule::find($request->id);
        $schedule->delete();

        return redirect()->route('admin.training.schedule');
    }
}
