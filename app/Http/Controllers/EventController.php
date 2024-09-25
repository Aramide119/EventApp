<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EventController extends Controller
{
    //
    public function index() {

        return view('index');

    }
    public function about() {
        
        return view('about');

    }
    public function eventDetails() {
        
        return view('event-details');

    }
    public function rent() {
        
        return view('rent-venue');

    }
    public function showEvent() {
        
        return view('shows-events');

    }
    public function ticketDetails() {
        
        return view('ticket-details');

    }
    public function tickets() {
        
        return view('tickets');

    }
}
