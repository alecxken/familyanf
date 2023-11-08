
    @php $ttl = 'HomePage' @endphp
    @extends('layouts.template')

    @section('title', '| HomePage')

    @section('content')
    @section('extracss')
    <link href="{{ asset('css/jquery.dataTables.min.css') }}" rel="stylesheet">
    <link href="{{ asset('myfiles/css/select2.min.css') }}" rel="stylesheet" />
@endsection
@section('extrajs')
    <script src="{{ asset('js/select2.min.js') }}"></script>
    <script src="{{ asset('js/jquery-1.10.2.min.js') }}"></script>
    <script src="{{ asset('js/jquery.dataTables.min.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('myfiles/css/buttons.dataTables.min.css') }}">
    <script src="{{ asset('myfiles/js/dataTables.buttons.min.js') }}"></script>
    <script src="/vendor/datatables/buttons.server-side.js"></script>
@endsection
<div class="col-md-12">
    <div class="card shadow mb-4"  style="border-radius: 30px;">

        <div class="card-header py-3">
            <div class="row">
                    <div class="col-md-4"> <h3 class="card-title">Tributes Persons</h3></div>
                    <div class="col-md-8">
                     <div class="card-tools pull-right">
                           <div class="btn-group">

     <a  class="btn add-btn d-none d-sm-inline-block btn btn-warning shadow-sm"  href="" data-toggle="modal"
      data-target="#add_user"><i class="fa fa-plus"></i> Submit New Tribute</a>

                           </div>
                     </div>
                   </div>
                </div>
         </div>
           <div class="card-body table-responsive">
                 {!! $dataTable->table(['class'=>'small table table-striped small']) !!}
   {!! $dataTable->scripts() !!}
           </div>
    </div>


    </div>
    <div id="add_user" class="modal custom-modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">PERSON CREATION</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body ">
                    <!-- Start the form -->
                    {!! Form::open(['method' => 'post', 'url' => 'store-person', 'files' => true ]) !!}

<div class="row">

                    <div class="form-group col-md-6">
                        {!! Form::label('C_Name', 'First Name:', ['class' => 'col-form-label']) !!}
                        <input type="text" name='first_name' class="form-control" required="" />
                    </div>

                    <div class="form-group col-md-6">
                        {!! Form::label('C_Name', 'Last  Name:', ['class' => 'col-form-label']) !!}
                        <input type="text" name='last_name' class="form-control" />
                    </div>

                    <div class="form-group col-md-6">
                        {!! Form::label('C_Name', 'Year Of Birth:', ['class' => 'col-form-label']) !!}
                        <input type="year" name='yob' class="form-control" required="" />
                    </div>

                    <div class="form-group col-md-6">
                        {!! Form::label('C_Name', 'Year Of Death:', ['class' => 'col-form-label']) !!}
                        <input type="year" name='yod' class="form-control" />
                    </div>



                    <div class="form-group col-md-6">
                        {!! Form::label('C_Name', 'Family Email:', ['class' => 'col-form-label']) !!}
                        <input type="email" name='email' class="form-control" required="" />
                    </div>

                    <div class="form-group col-md-6">
                        {!! Form::label('C_Name', 'Family Profile:', ['class' => 'col-form-label']) !!}
                        <input type="file" name='profile' class="form-control" />
                    </div>
                        <!-- Manager's Email input -->
                        <div class="form-group col-md-12">
                            {!! Form::label('C_Name', 'Achievement:', ['class' => 'col-form-label']) !!}
                            <textarea class="form-control" name="message" rows="2"></textarea>
                        </div>
                        <div class="form-group col-md-12">
                            {!! Form::label('C_Name', 'Photos :', ['class' => 'col-form-label']) !!}
                            <input type="file" name='photos[]' multiple class="form-control"  />
                        </div>
</div>
     <!-- End the form -->
                </div>
                    <div class="modal-footer">
                        {{ Form::submit('Click To Submit', ['class' => 'btn btn-success pull-right']) }}
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>


@endsection
