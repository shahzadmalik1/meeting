@extends('app-layout.layout')
 
@section('content')
<div class="container">
    <div class="jumbotron my-2">
       
        @if(session()->has('success'))
                <div class="alert alert-success">
                    {{ session()->get('success') }}
                </div>
            @endif
        <a href="{{url('meetings/create')}}" class="btn btn-primary my-2"> Add Meeting</a>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Subject</th>
                    <th>Email</th>
                    <th>Start Date</th>
                    <th>End Date</th>
                    <th>Start Time</th>
                    <th>End Time</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($meetings as $data)
                <tr>
                    <td>{{$data->email}}</td>
                    <td>{{$data->subject}}</td>
                    <td>{{$data->start_date}}</td>
                    <td>{{$data->end_date}}</td>
                    <td>{{$data->start_time}}</td>
                    <td>{{$data->end_time}}</td>
                    <td>
                        <a class="badge badge-info mr-1" href="{{ url('meetings/show',$data->id) }}">Show</a>
                        <a class="badge badge-warning mr-1" href="{{ url('meetings/edit',$data->id) }}">Edit</a>
                        <a class="badge badge-danger" href="{{ url('meetings/delete',$data->id) }}">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>