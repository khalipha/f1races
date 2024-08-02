@extends('layouts.app')

@section('content')

@section('title','View Events')

<!--  -->


<a href="#" class="recent-work" style="background-image:url({{url('images/f1car.jpg')}})">
<div class="row">

<div class="col-lg-12 margin-tb">

    <div class="pull-left">

        <h2>Upcoming Event Listing</h2>

    </div>

    <div class="pull-right">

        <a class="btn btn-primary" href="/"> Home </a>
        <a class="btn btn-success" href="{{ route('events.create') }}"> Create New Event</a>

    </div>

</div>

</div>


<table class="table table-bordered">

<tr>
    <th>No</th>
    <th>Event Name</th>
    <th>Event Venue</th>
    <th>Start Time</th>
    <th>End Time</th>
    <th width="280px">Action</th>
</tr>

@foreach ($events as $event)

<tr>
<td>{{ ++$i }}</td>
<td>{{ $event->EventName }}</td>
<td>{{ $event->EventVenue}}</td>
<td>{{ date('d-m-Y H:i', strtotime($event->EventStartTime))}}</td>
<td>{{ date('d-m-Y H:i', strtotime($event->EventEndTime))}}</td>

<td>

    <a class="btn btn-info" href="{{ route('events.show',$event->EventId) }}">Show</a>

    <a class="btn btn-primary" href="{{ route('events.edit',$event->EventId) }}">Edit</a>

    {!! Form::open(['method' => 'DELETE','route' => ['events.destroy', $event->EventId],'style'=>'display:inline']) !!}

    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}

    {!! Form::close() !!}

</td>

</tr>

@endforeach

</table>

@if ($errors->any())
<div class="alert alert-danger">

    <strong>Whoops!</strong> There were some problems with your input.<br><br>

    <ul>

    @foreach ($errors->all() as $error)

        <li>{{ $error }}</li>

    @endforeach

    </ul>

</div>

@endif



@endsection
