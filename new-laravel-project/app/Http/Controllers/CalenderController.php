<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Models\Event;
 
class CalendarController extends Controller
{
    public function fetchEvents(Request $request)
    {
        $events = Event::all(); // Fetch all events from the database
        return response()->json($events);
    }
 
    public function storeEvent(Request $request)
    {
        // Validate incoming request data
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'start' => 'required|date',
            'end' => 'required|date|after_or_equal:start',
        ]);
 
        $event = Event::create($validatedData); // Store the event in the database
        return response()->json($event);
    }
}