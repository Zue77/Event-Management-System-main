<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use Carbon\Carbon;

class EventController extends Controller
{

    public function allEvents(){
        $events = Event::all();
        return view('events.allEvents',['events'=>$events]);
    }

    public function create(){
        return view('events.create');
    }

    public function store(Request $request){
        $data = $request->validate([
            'name'=> 'required',
            'date'=> 'date',
            'startTime'=> 'required',
            'endTime'=> 'required',
            'city'=> 'required',
            'state'=> 'required',
            'country'=> 'required',
            'description'=> 'nullable',
            'price'=> 'required | decimal:0,2',
        ]);

        if (auth()->check()) {
            // A user is authenticated
        
            // Retrieve the user ID from the authenticated user
            $userId = auth()->id();
        
            // Associate the user ID with the new event
            $data['user_id'] = $userId;
        
            // Create a new event with the provided data
            $newEvent = Event::create($data);
            
        } else {
            // No user is authenticated
            return redirect()->route('login')->with('error', 'Please log in to create an event.');
        }
        
    }

    public function edit(Event $event){
        return view('events.edit', ['event'=> $event]);
    }

    public function update(Event $event, Request $request){
        $data = $request->validate([
            'name'=> 'required',
            'date'=> 'date',
            'startTime'=> 'required',
            'endTime'=> 'required',
            'city'=> 'required',
            'state'=> 'required',
            'country'=> 'required',
            'description'=> 'nullable',
            'price'=> 'required | decimal:0,2',
        ]);

        $event->update($data);

        return redirect(route('events.allEvents'))->with('success','Event Updated Successfully');
    }

    public function delete(Event $event){
        $event->delete();
        return redirect(route('events.allEvents'))->with('success','Event Deleted Successfully');
    }

    public function browse(Request $request)
    {
        $query = Event::query();

        // Search
        $search = $request->input('search');
        if ($search) {
            $query->where('name', 'like', "%$search%");
        }

        // Filter Location
        $filter = $request->input('location');
        if ($filter) {
            $query->where('state', $filter);
        }

        // Filter Date
        $startDate = $request->input('start_date');
        $endDate = $request->input('end_date');

        if ($startDate && $endDate) {
            $startDate = Carbon::parse($startDate)->startOfDay();
            $endDate = Carbon::parse($endDate)->endOfDay();

            $query->whereBetween('date', [$startDate, $endDate]);
        }

        // Order By
        $attribute = $request->input('attribute');
        $order = $request->input('order');
        if ($attribute) {
            $query->orderBy($attribute, $order)->get();
        }

        // Pagination
        $events = $query->paginate(5);

        return view('events.browse', compact('events'));
    }

    public function view(Event $event)
    {
        return view('events.view', ['event'=> $event]);
    }

}
