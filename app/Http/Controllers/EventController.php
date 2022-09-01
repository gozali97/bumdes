<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Event;
use Illuminate\Support\Arr;
use Illuminate\Http\Request;
use Acaronlex\LaravelCalendar\Calendar;
use App\Models\Archives;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::all();
        return view('admin.event.index')->with('events', $events);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.event.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'  =>  'required',
            'start_date'   =>  'required',
            'end_date'         =>  'required'
        ]);

        $event = new Event();
        $event->name = $request->name;
        $event->start_date = $request->start_date;
        $event->end_date = $request->end_date;

        $event->save();
        return redirect()->route('admin.event')->with('success', 'You have successfully created a event.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $events = Event::all();

        $dataEvents = [];
        foreach ($events as $i => $event) {
            $dataEvents[$i] = Calendar::event(
                $event->name,
                false,
                $event->start_date,
                $event->end_date
            );
        }

        $calendar = new Calendar();
        $calendar->addEvents($dataEvents);
        $calendar->setOptions([
            'locale' => 'id',
            'firstDay' => 0,
            'displayEventTime' => true,
            'selectable' => true,
            'initialView' => 'dayGridMonth',
            'headerToolbar' => [
                'left' => 'prev,next today',
                'center' => 'title',
                'right' => 'dayGridMonth,listWeek'
            ],
            'height' => 500,
            'contentHeight' => 400,
            'aspectRatio' => 1,
            'expandRows' => true,
            'eventColor' => '#0EA44D',
            'eventBackgroundColor' => '#0EA44D',
        ]);

        $calendar->setCallbacks([
            'select' => 'function(selectionInfo){}',
            'eventClick' => 'function(event){}',
        ]);

        return view('frontend.agenda.index', [
            'calendar' => $calendar
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $event = Event::find($request->id);
        return view('admin.event.edit')->with('event', $event);
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
        $request->validate([
            'name'  =>  'required',
            'start_date'   =>  'required',
            'end_date'         =>  'required'
        ]);

        $event = Event::find($request->id);

        $event->name = $request->name;
        $event->start_date  = $request->start_date;
        $event->end_date       = $request->end_date;

        $event->save();
        return redirect()->route('admin.event')->with('success', 'You have successfully update a event.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $event = Event::find($request->id);

        $event->delete();
        return redirect()->route('admin.event')->with('success', 'You have successfully delete a event.');
    }
}
