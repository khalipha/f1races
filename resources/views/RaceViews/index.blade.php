@extends('layouts.app')

@section('content')

@section('title','View Races')


<div class="row">

<div class="col-lg-12 margin-tb">

    <div class="pull-left">

        <h2>Races</h2>

    </div>


    <div class="pull-right">

        <a class="btn btn-primary" href="/"> Home </a>
      
    </div>

</div>


<div class="row">

  <!-- <p>
  <a class="btn btn-primary" data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Create Race</a>
  <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2">View Past Races</button>
  
</p> -->
  <div class="col-md-6">
    <!-- <div class="collapse multi-collapse" id="multiCollapseExample1">
      <div class="card card-body"> -->

      <!-- start create race body -->

         <h1>Create Race</h1>


           {!! Form::open(array('route' => 'races.store','method'=>'POST')) !!}

            @include('RaceViews.form')

            {!! Form::close() !!}


       <!-- end start races -->
      <!-- </div>
    </div> -->
  </div>
  <div class="col-md-6">
    <!-- <div class="collapse multi-collapse" id="multiCollapseExample2">
      <div class="card card-body"> -->

      <!-- Start View Past Races -->
      <h1>View Past Races</h1>


      <table class="table table-bordered">

<tr>
    <th>No</th>
    <th>Race Name</th>
    <th>Race Time</th>
    <th>Race Coordinator</th>
    <th>Podium Positions</th>
    <th>Results</th>
   
</tr>

    @foreach ($races as $race)

    <tr>
    <td>{{ ++$i }}</td>
    <td>{{ $race->RaceName }}</td>
    <td>{{ date('d-m-Y H:i', strtotime($race->RaceTime))}}</td>
    <td>{{ $race->RaceCoordinator}}</td>
    <td>{{ $race->PodiumPositions}}</td>
    <td>{{ $race->Results}}</td>



    </tr>

    @endforeach

</table>
     <!-- End View Past Rcaes -->
         
      <!-- </div>
    </div> -->
  </div>
</div>









@endsection 
