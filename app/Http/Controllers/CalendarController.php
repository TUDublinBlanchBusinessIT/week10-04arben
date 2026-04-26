<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class CalendarController extends Controller
{
    public function display()
    {
        return view('calendar.display');
    }

    public function json()
    {
        return response(Event::all(), 200)
            ->header('Content-Type', 'application/json');
    }
}