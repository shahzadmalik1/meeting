@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Meetings</div>

                <div class="card-body">
                    <div class="form-group">
                        <a href="{{url('add-view')}}" class="btn btn-sm btn-primary my-2">Add Meetings</a>
                    </div>
                    <form action="{{url('meetings/add')}}" method="POST">
                        <div class="form-group py-1">
                            <label for="">Subject</label>
                            <input type="text" class="form-control form-control-sm">
                        </div>
                        <div class="form-group py-1">
                            <label for="">Email</label>
                            <input type="email" class="form-control form-control-sm">
                        </div>
                        <div class="form-group py-1">
                            <label for="">Start Date</label>
                            <input type="datetime" class="form-control form-control-sm">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
