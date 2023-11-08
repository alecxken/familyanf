<div id="add_tribute" class="modal custom-modal fade" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">TRIBUTE CREATION</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Start the form -->
                {!! Form::open(['method' => 'post', 'url' => 'store-tvc-envs', 'files' => true ]) !!}

                <!-- Hidden token input -->

                <div class="row">
                    <!-- Date input -->
<!--                     <div class="form-group col-md-6">
                        {!! Form::label('C_Name', 'Date:', ['class' => 'col-form-label']) !!} -->
                        <input type="hidden" name='request_date' value="{{\Carbon\Carbon::now('EAT')}}" class="form-control" readonly="" />
                  <!--   </div> -->
                  <div class="form-group col-md-6">
                    {!! Form::label('C_Name', 'Tribute To:', ['class' => 'col-form-label']) !!}
                   <select class="form-control select2" name="tribute_to" id="tribute_to" required>
                    @isset($data)
                    @foreach($data as $attribute)
                    <option value="{{$attribute->id}}">{{$attribute->first_name}} {{$attribute->last_name}} -{{$attribute->yob}} {{$attribute->yod}}</option>
                    @endforeach
                    @endisset


                   </select>
                </div>
                  <div class="form-group col-md-6">
                    {!! Form::label('C_Name', 'First Name:', ['class' => 'col-form-label']) !!}
                    <input type="text" name='first_name' class="form-control" required="" />
                </div>

                <div class="form-group col-md-6">
                    {!! Form::label('C_Name', 'Last  Name:', ['class' => 'col-form-label']) !!}
                    <input type="text" name='last_name' class="form-control" />
                </div>



                <div class="form-group col-md-6">
                    {!! Form::label('C_Name', 'Subject:', ['class' => 'col-form-label']) !!}
                    <input type="text" name='subject' class="form-control" required="" />
                </div>
                    <!-- Manager's Email input -->
                    <div class="form-group col-md-12">
                        {!! Form::label('C_Name', 'Message:', ['class' => 'col-form-label']) !!}
                        <textarea class="form-control" name="message" rows="2"></textarea>
                    </div>
                    <div class="form-group col-md-12">
                        {!! Form::label('C_Name', 'Photos :', ['class' => 'col-form-label']) !!}
                        <input type="files" name='photos[]' class="form-control"  />
                    </div>
 <!-- End the form -->
                <div class="modal-footer">
                    {{ Form::submit('Click To Submit Your Request', ['class' => 'btn btn-success pull-right']) }}
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
