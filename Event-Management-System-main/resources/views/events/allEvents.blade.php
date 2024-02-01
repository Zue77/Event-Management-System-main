<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/css/allEvent.css" rel="stylesheet">
    <title>All Event</title>
</head>

<body>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('CRUD Event') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

            <div class="success-message">
            @if(session()->has('success'))
            <div>
                {{session('success')}}
            </div>
            @endif
        </div>

        <div>
            <table border='1'>
                <tr>
                    <th>Event ID</th>
                    <th>User ID</th>
                    <th>Name</th>
                    <th>Date</th>
                    <th>Start time</th>
                    <th>End Time</th>
                    <th>City</th>
                    <th>State</th>
                    <th>Country</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                @foreach($events as $event)
                <tr>
                    <td>{{$event->id}}</td>
                    <td>{{$event->user_id}}</td>
                    <td>{{$event->date}}</td>
                    <td>{{$event->startTime}}</td>
                    <td>{{$event->endTime}}</td>
                    <td>{{$event->name}}</td>
                    <td>{{$event->city}}</td>
                    <td>{{$event->state}}</td>
                    <td>{{$event->country}}</td>
                    <td>{{$event->description}}</td>
                    <td>{{$event->price}}</td>

                    <td>
                      <x-primary-link href="{{route('events.edit',['event'=> $event])}}">Edit </x-primary-link>
                    </td>

                    <td>
                        <form class="delete_button" method="post" action="{{ route('events.delete', ['event' => $event]) }}">
                            @csrf
                            @method('delete')
                            <button type="submit">Delete</button>
                        </form>
                    </td>

                </tr>
                @endforeach
            </table>
        </div>

        <div class="button-container">
            <div class="button-wrapper">
                <a href="{{ route('dashboard') }}" class="dashboard-button">Go to Dashboard</a>
                <a href="{{ route('events.create') }}" class="create-event-button">Create Event</a>
            </div>
        </div>

    </x-app-layout>

</body>
</html>
