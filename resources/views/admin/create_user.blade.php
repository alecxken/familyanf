@extends('layouts.template')
@section('extracss')
    <link href="{{asset('css/jquery.dataTables.min.css')}}" rel="stylesheet">
<link href="{{asset('myfiles/css/select2.min.css')}}" rel="stylesheet" />

@endsection
@section('extrajs')
<script src="{{asset('js/select2.min.js')}}"></script>
      <script src="{{asset('js/jquery-1.10.2.min.js')}}"></script>
  <script src="{{asset('js/jquery.dataTables.min.js')}}"></script>
  <link rel="stylesheet" href="{{asset('myfiles/css/buttons.dataTables.min.css')}}">
<script src="{{asset('myfiles/js/dataTables.buttons.min.js')}}"></script>
<script src="/vendor/datatables/buttons.server-side.js"></script>

@endsection
@section('content')


        <div class="col-md-12" >
          <div class="row">

            <div class="page-header">
            <div class="row align-items-center">
              <div class="col">
                <h3 class="page-title">Users</h3>
                <ul class="breadcrumb">
                  <li class="breadcrumb-item"><a href="">Dashboard</a></li>
                  <li class="breadcrumb-item active">Users</li>
                </ul>
              </div>
              <div class="col-auto float-end ms-auto">
                 <a  class="btn add-btn"  href="" data-toggle="modal" data-target="#modaldemo2"><i class="fa fa-plus"></i> Add New User</a>
              </div>
            </div>
          </div>
        </div>
      </div>

<div class="col-md-12 table-responsive">

    {{ $dataTable->table(['class' => 'table table-bordered table-striped table-sm small']) }}
   
  </div>


@push('scripts')
    {{$dataTable->scripts()}}
@endpush
  

      @include('admin.modal_create_user')
       @include('admin.modal_edit')

        </div>
      </div>
    </div>
<div class="modal custom-modal fade" id="delete_expense" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <div class="form-header">
                    <h3>Delete Expense</h3>
                    <p>Are you sure want to delete?</p>
                </div>
                <div class="modal-btn delete-action">
                    <div class="row">
                        <div class="col-6">
                          <a href="javascript:void(0);" class="btn btn-primary continue-btn">Delete</a>
                        </div>
                        <div class="col-6">
                            <a href="javascript:void(0);" data-bs-dismiss="modal" class="btn btn-primary cancel-btn">Cancel</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



      <script src="{{asset('js/jquery-1.10.2.min.js')}}"></script>
           <script type="text/javascript">

           $('.modelClose').on('click', function(){
            $('#modal-user').hide();
        });
        var id;
        $('body').on('click', '#getEditProductData', function(e) {
            e.preventDefault();
            $('.alert-danger').html('');
            $('.alert-danger').hide();
            id =  $(this).val();
            $.ajax({
                url: "get-user-info/"+id,
                method: 'GET',
                // data: {
                //     id: id,
                // },
                success: function(data) {

                    console.log(data);
                    $('#task_id').val(data.id);
                    $('#name').val(data.name);
                    $('#pin').val(data.pin);
                    $('#email').val(data.email);
                     $('#modal-user').show();

                }
            });
        });


   $('#SubmitCreateProductForm').click(function(e) {
            e.preventDefault();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

        var csrf = $('input[name="_token"]').val();
        $.ajax({

                type:'POST',
                url:'/users_update',
                data: {
                    id: $('#id').val(),
                    name: $('#name').val(),
                    email: $('#email').val(),
                    roles: $('#roles').val(),
                    csrf: $('input[name="_token"]').val(),
                },
                success: function(result) {
                    if(result.errors) {
                        $('.alert-danger').html('');
                        $.each(result.errors, function(key, value) {
                            $('.alert-danger').show();
                            $('.alert-danger').append('<strong><li>'+value+'</li></strong>');
                        });
                    } else {
                        $('.alert-danger').hide();
                        $('.alert-success').show();
                        $('.datatable').DataTable().ajax.reload();
                        setInterval(function(){
                            $('.alert-success').hide();
                            $('#CreateProductModal').modal('hide');
                            location.reload();
                        }, 2000);
                    }
                }
            });
        });
</script>
    <script type="text/javascript">

</script>

  @endsection
