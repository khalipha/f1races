<div class="row">

    <div class="col-xs-12 col-sm-12 col-md-12">


        <div class="form-group">
            <strong>Race Name:</strong>
            {!! Form::text('RaceName', null, array('placeholder' => 'Race Name','class' => 'form-control')) !!}
        </div>

        <div class="form-group">
                   <strong>Race Time:</strong>
                    <input type="datetime-local" id="RaceTime" name="RaceTime" class="form-control">     
        </div>

        <div class="form-group">
               <strong>Race Coordinator:</strong>
                 {!! Form::text('RaceCoordinator', null, array('placeholder' => 'Race Coordinator','class' => 'form-control')) !!}
        </div>


        <p style="color:red;"><strong>Link Race to Event ? (Optional) </strong></p>

        <!-- <div class="form-group">
               <strong>Event:</strong>
                 {!! Form::text('RaceCoordinator', null, array('placeholder' => 'Race Coordinator','class' => 'form-control')) !!}
        </div> -->

        

    </div>



    <div class="col-xs-12 col-sm-12 col-md-12 text-center">

            <button type="submit" class="btn btn-primary">Submit</button>

    </div>

</div>