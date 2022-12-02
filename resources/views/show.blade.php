@extends('app-layout.layout')
 
@section('content')
<div class="container">
    <div class="jumbotron my-2">
        @if(session()->has('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div>
        @endif
        <a href="{{url('meetings')}}" class="btn btn-info my-3">Meetings List</a>
        <div class="border border-secondary p-2 mb-4 rounded">
                <form action="{{ url('meetings/add-attendie/'.$meeting->id) }}" method="POST">
                    @csrf
                <div class="form-group">
                    <label for="">Add Attendie</label>
                    <input type="email" class="form-control" name="attendie_email">
                </div>
                <div class="form-group">
                    <input type="submit" value="Add" class="btn btn-sm btn-success">
                </div>
            </form>
        </div>
       
        <a href="{{url('meetings')}}" class="btn btn-info my-3">Meeting List</a>
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