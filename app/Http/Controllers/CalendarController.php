<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalendarController extends Controller
{
    public function index_calendar()
    {
        return view('calendar');
    }
}
