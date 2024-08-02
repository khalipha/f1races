@extends('layouts.app')

@section('content')

@section('title','View Races')


<div class="row">

<div class="col-lg-12 margin-tb">

    <div class="pull-left">

        <h2>Update Race Results</h2>

    </div>


    <div class="pull-right">

        <a class="btn btn-primary" href="/"> Home </a>
        <!-- <a class="btn btn-success" href="{{ route('races.create') }}"> Create New Race</a> -->

    </div>

</div>


<div class="row">
  <div class="col">


      <table class="table table-bordered">

<tr>
    <th>No</th>
    <th>Race Name</th>
    <th>Race Time</th>
    <th>Race Coordinator</th>
    <th>Podium Positions</th>
    <th>Results</th>
    <th>Action</th>
   
</tr>

    @foreach ($races as $race)

    <tr>
    <td>{{ ++$i }}</td>
    <td>{{ $race->RaceName }}</td>
    <td>{{ date('d-m-Y H:i', strtotime($race->RaceTime))}}</td>
    <td>{{ $race->RaceCoordinator}}</td>
    <td>{{ $race->PodiumPositions}}</td>
    <td>{{ $race->Results}}</td>
    <td><a class="btn btn-primary" href="{{ route('races.edit',$race->RaceId) }}">Update Results</a></td>



</tr>

    @endforeach

</table>
     <!-- End View Past Rcaes -->
         
   
  </div>
</div>









@endsection 
