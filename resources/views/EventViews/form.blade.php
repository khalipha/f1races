<div class="row">

    <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group">
            <strong>Event Name:</strong>
            {!! Form::text('EventName', null, array('placeholder' => 'Event Name','class' => 'form-control')) !!}
        </div>

        <div class="form-group">
            <strong>Event Venue:</strong>
            {!! Form::text('EventVenue', null, array('placeholder' => 'Event Venue','class' => 'form-control')) !!}
        </div>

        <div class="form-group">
            <strong>Event Start Time:</strong>

            @if(empty($event))         
                    
                     <input type="datetime-local" id="EventStartTime" name="EventStartTime" class="form-control"/>          
            @else   
                    <input type="datetime-local" id="EventStartTime" name="EventStartTime" class="form-control" value="<?php echo $event->EventStartTime  ?>">     
            @endif
  
        </div>

        <div class="form-group">
            <strong>Event End Time:</strong>

            @if(empty($event))                           
                     <input type="datetime-local" id="EventEndTime" name="EventEndTime" class="form-control"/>           
            @else   
                    <input type="datetime-local" id="EventEndTime" name="EventEndTime" class="form-control" value="<?php echo $event->EventEndTime  ?>">     
            @endif

            <!-- {!! Form::text('EventEndTime', null, array('placeholder' => 'Event End Time','class' => 'form-control')) !!} -->
        </div>

    </div>



    <div class="col-xs-12 col-sm-12 col-md-12 text-center">

            <button type="submit" class="btn btn-primary">Submit</button>

    </div>

</div>