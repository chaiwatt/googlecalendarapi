<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Spatie\GoogleCalendar\Event;

class GoogleCalendarController extends Controller
{
    public function Index(){
        $events = Event::get();
        return $events;
    }
    public function Create(){
        Event::create([
            'name' => 'ทดสอบ calenda',
            'startDateTime' => Carbon::now(),
            'endDateTime' => Carbon::now()->addHour(),
         ]);
         return redirect()->route('calendar');
    }
}
