@extends('app-layout.layout')
 
@section('content')
<div class="container">
    <div class="jumbotron my-2">
       
        <a href="{{url('meetings')}}" class="btn btn-info my-3">meeting List</a>
        <div>
          
            <h5>Subject</h5>
            <p>{{$meeting->subject}}</p>
            <h5>Address</h5>
            <p>{{$meeting->address}}</p>
            <h5>Start date</h5>
            <p>{{$meeting->start_date}}</p>
            <h5>End Date</h5>
            <p>{{$meeting->end_date}}</p>
            <h5>Start Time</h5>
            <p>{{$meeting->address}}</p>
            <h5>End Time</h5>
            <p>{{$meeting->start_date}}</p>
            <h5>Attendies</h5>
            <ul>
                @if (isset($meeting->attendies) && !empty($meeting->attendies))
                    @foreach ($meeting->attendies as $att)
                    <li>{{$att->email}}</li>
                    @endforeach
                @endif
               
                
            </ul>
        </div>
        
    </div>
</div>