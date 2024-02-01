<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="/css/create.css" rel="stylesheet">

  <title>Create Event</title>
</head>

<body>
  <h1>Create Event :</h1>
  <p>"Where Ideas Meet Execution - Your Event Awaits!"</p>
  <br>

  <div  class="error-container">
    @if($errors->any())
    <ul>
      @foreach($errors->all() as $error)
        <li>{{$error}}</li>
      @endforeach
    </ul>
    @endif
  </div>
  
  <form method='post' action="{{route('events.store')}}">
    @csrf
    @method('post')

    <div>
      <label>Event Name</label>
        <input type='string' name='name' />
    </div>
    <div>
      <label>Date</label>
        <input type='date' name='date' />
    </div>
    <div>
      <label>Start time</label>
        <input type='time' name='startTime' />
    </div>
    <div>
      <label>End time</label>
        <input type='time' name='endTime' />
    </div>
    <div>
      <label>City</label>
        <input type='string' name='city' />
    </div>
    <div>
      <label>State</label>
        <input type='string' name='state' />
    </div>
    <div>
      <label>Country</label>
        <input type='string' name='country' />
    </div>
    <div>
      <label>Description</label>
        <input type='text' name='description' />
    </div>
    <div>
      <label>Price</label>
        <input type='decimal' name='price' />
    </div>

      <input type='submit' value='Create'/>
    </div>
  </form>  
  
</body>
</html>