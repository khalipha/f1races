
@extends('layouts.app')

@section('content')

@section('title','View Event Details')

<div class="row">
<div class="col-lg-12 margin-tb">
    <div class="pull-left">
        <h2> Events details</h2>
    </div>

    <div class="pull-right">
        <a class="btn btn-primary" href="{{ route('events.index') }}"> Back</a>
    </div>

</div>
</div>



<div class="row">

<div class="col-xs-12 col-sm-12 col-md-12">

    <div class="form-group">

        <strong>Event Name:</strong>

        {{ $events->EventName}}

        

    </div>

</div>

<div class="col-xs-12 col-sm-12 col-md-12">

 

        <div class="form-group">

        <strong>Event Venue:</strong>

        {{ $events->EventVenue}}

        </div>

        <div class="form-group">

        <strong>Event Start Time:</strong>

        {{ $events->EventStartTime}}

        </div>

        <div class="form-group">

        <strong>Event End Time:</strong>

        {{ $events->EventEndTime}}

        </div>

       </div>

</div>

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