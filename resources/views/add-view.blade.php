@extends('app-layout.layout')
 
@section('content')

    <div class="container mt-4">
        <div class="jumbotron my-2 px-5">
            <a href="{{url('meetings')}}" class="btn btn-info my-3">Meetings List</a>
          
            @if(session()->has('success'))
                <div class="alert alert-success">
                    {{ session()->get('success') }}
                </div>
            @endif
            <form action="{{ url('meetings/store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label>Subject:</label>
                    <input type="text" name="subject" class="form-control" required>
                </div>
            
                <div class="form-group">
                    <label>Email:</label>
                    <input type="text" class="form-control" name="email" required>
                </div>
                <div class="form-group">
                    <label>Address:</label>
                    <input type="text" name="address" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Start date:</label>
                    <input type="date" class="form-control" name="start_date" required>
                </div>
                <div class="form-group">
                    <label>End Date:</label>
                    <input type="date" class="form-control" name="end_date" required>
                </div>
                <div class="form-group">
                    <label>Start Time:</label>
                    <input type="time" class="form-control" name="start_time" required>
                </div>
                <div class="form-group">
                    <label>End Time:</label>
                    <input type="time" class="form-control" name="end_time" required>
                </div>

            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
               
        </form>
    </div>
</div>
    