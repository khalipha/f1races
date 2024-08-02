<div class="row">

    <div class="col-xs-12 col-sm-12 col-md-12">


        <div class="form-group">
            <strong>Race Name:</strong>
            {!! Form::text('RaceName', null, array('placeholder' => 'Race Name','disabled' => 'disabled','class' => 'form-control')) !!}
        </div>

        <div class="form-group">
            <strong>Race Time:</strong>

            @if(empty($race))         
                     {!! Form::text('RaceTime', null, array('placeholder' => 'RaceTime','disabled' => 'disabled','class' => 'form-control')) !!}             
            @else   
                    <input type="datetime-local" disabled id="RaceTime" name="RaceTime" class="form-control" value="<?php echo $race->RaceTime  ?>">     
            @endif

          
        </div>

        <div class="form-group">
               <strong>Race Coordinator:</strong>
                 {!! Form::text('RaceCoordinator' , null, array('placeholder' => 'Race Coordinator', 'disabled' => 'disabled', 'class' => 'form-control')) !!}
        </div>

        <div class="form-group">
               <strong>Podium Position:</strong>
                 {!! Form::text('PodiumPositions' , null, array('placeholder' => 'Podium Positions','class' => 'form-control')) !!}
        </div>


        <div class="form-group">
               <strong>Race Result:</strong>
                 {!! Form::text('Results' , null, array('placeholder' => 'Results','class' => 'form-control')) !!}
        </div>

        <!-- <p style="color:red;"><strong>Link Race to Event ? (Optional) </strong></p> -->

       

        

    </div>



    <div class="col-xs-12 col-sm-12 col-md-12 text-center">

            <button type="submit" class="btn btn-primary">Submit</button>

    </div>

</div>