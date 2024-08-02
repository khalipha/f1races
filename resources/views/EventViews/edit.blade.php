@extends('layouts.app')

@section('content')

@section('title','Edit Event Details')

    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2>Edit Event</h2>

            </div>

            <div class="pull-right">

                <a class="btn btn-primary" href="{{ route('events.index') }}"> Back</a>

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


<div class="row">
<div class="col-md-4"></div>
<div class="col-md-4">
    {!! Form::model($event, ['method' => 'PATCH','route' => ['events.update', $event->EventId]]) !!}

        @include('EventViews.form')

    {!! Form::close() !!}
</div>
<div class="col-md-4"></div>
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