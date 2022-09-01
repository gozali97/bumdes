<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Event;
use Illuminate\Support\Arr;
use Illuminate\Http\Request;
use Acaronlex\LaravelCalendar\Calendar;

class EventController extends Controller
{
   public function index()
   {
      $events = Event::all();

      $dataEvents = [];
      foreach ($events as $i => $event) {
         $dataEvents[$i] = \Calendar::event(
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

      return view('agenda.index', [
         'calendar' => $calendar
      ]);
   }
}
