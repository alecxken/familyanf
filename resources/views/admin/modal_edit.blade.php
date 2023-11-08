<div  class="modal fade" id="modal-user" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-md" role="document">
         {!! Form::open(['method'=> 'post','url' => 'users_update', 'files' => true ]) !!}
         <input type="hidden" id="task_id" name="id">

            <div class="modal-content modal-content-demo">
               <div class="modal-header">
                    <h6 class="modal-title">Edit Creation Portal</h6>
                    <button type="button" class="close modelClose" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
              </div>
             <div class="modal-body">

                <div class="row">
                <div class="form-group col-md-6">
                    {{ Form::label('name', 'Name') }}
                    {{ Form::text('name', Null, array('id' => 'name','class' => 'form-control', 'readonly')) }}
                </div>

                <div class="form-group col-md-6">
                    {{ Form::label('name', 'Title') }}
                    {{ Form::text('title', Null, array('id' => 'name','class' => 'form-control')) }}
                </div>

                 <div class="form-group col-md-6">
                     {{ Form::label('name', 'PIN') }}
                     {{ Form::text('pin', Null, array('id' => 'pin','class' => 'form-control','max'=>'5')) }}
                 </div>

                <div class="form-group col-md-6">
                    {{ Form::label('email', 'Email') }}
                    {{ Form::email('email', Null, array('id' => 'email','class' => 'form-control', 'readonly')) }}
                </div>

              

                <div class='form-group col-md-12'>
                   
                                <label><strong>Select User System Roles :</strong></label><br>
                                @if(!empty($roles))
                                      @foreach ($roles as $role)
                     <label><input type="checkbox" name="roles[]"  value="{{$role->name}}"> {{$role->name}}</label>
                     @endforeach
                                   @endif
                               
                       <!--      </div>  
                  <select class="form-control select select2" name="roles[]" multiple >
                                   <option selected value="">Basic User No Role</option>
                                   @if(!empty($roles))
                                      @foreach ($roles as $role)
                                      <option>{{$role->name}}</option>
                                      @endforeach
                                   @endif
                                   </select> -->
                </div>
                <div class='form-group col-md-12'>
                    <small><i>Kindly Allocate system roles as below
                        <li>Admin - Overall System Manager</li>
                        <li>Enumerators - Biometric Device Users</li>
                        <li>Supervisor,Agents,Finance,Report - Workflow Module Roles</li>
                    </i></small>
                </div>
            </div>

          <div class="modal-footer">
            <button type="submit" id="SubmitCreateProductForsm" class="btn btn-outline-success">Submit </button>
            <button type="button" class="btn btn-outline-danger modelClose" data-dismiss="modal">Close</button>
          </div>
        </div>
          {!!Form::close()!!}
      </div><!-- modal-dialog -->
    </div>
</div>
