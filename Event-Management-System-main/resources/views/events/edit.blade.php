<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="/css/create.css" rel="stylesheet">

  <title>Edit Event</title>
</head>

<body>
  <h1>Edit Event:</h1>
  <p>"Refine the Experience, Elevate the Event - Edit and Update with Precision!"</p>
  <br>

  <div class="error-container">
    @if($errors->any())
    <ul>
      @foreach($errors->all() as $error)
      <li>{{$error}}</li>
      @endforeach
    </ul>
    @endif
  </div>

  <form method='post' action="{{route('events.update', ['event'=> $event])}}">
    @csrf
    @method('put')

    <input type="hidden" name="id" value="{{ auth()->id() }}">

    <div>
      <label>Event Name</label>
      <input type='text' name='name' value="{{$event->name}}" />
    </div>
    <div>
      <label>Date</label>
      <input type='date' name='date' value="{{$event->date}}" />
    </div>
    <div>
      <label>Start time</label>
      <input type='time' name='startTime' value="{{$event->startTime}}" />
    </div>
    <div>
      <label>End time</label>
      <input type='time' name='endTime' value="{{$event->endTime}}" />
    </div>
    <div>
      <label>City</label>
      <input type='text' name='city' value="{{$event->city}}" />
    </div>
    <div>
      <label>State</label>
      <input type='text' name='state' value="{{$event->state}}" />
    </div>
    <div>
      <label>Country</label>
      <input type='text' name='country' value="{{$event->country}}" />
    </div>
    <div>
      <label>Description</label>
      <input type='text' name='description' value="{{$event->description}}" />
    </div>
    <div>
      <label>Price</label>
      <input type='number' name='price' step='0.01' value="{{$event->price}}" />
    </div>

    <input type='submit' value='Update Event Details' />
  </form>

</body>

</html>
