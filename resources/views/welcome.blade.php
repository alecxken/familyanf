<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @php $ttl = 'HomePage' @endphp
    @extends('layouts.home.template')

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
    <div class="card">
    <div class="card-body">


    <h5 class="text-info text-center"> Welcome to Family & Friends  Site <br>
        <img src="/images/los2.png" width="400" alt=""/>
    </h5>

    </div>
    </div>

    <div class="row">




      <div class="col-md-6 col-sm-6 col-lg-6 col-xl-4">
        <a href="" >
        <div class="card dash-widget">
         <div class="card-body">
          <span class="dash-widget-icon bg-dark"><i class="fa fa-link text-white"></i></span>
          <div class="dash-widget-info">
            <h3>LINEAGE</h3>
            <span class="text-dark">Generate Family Tree</span>
          </div>
        </div>
      </div>
    </a>
    </div>

     <div class="col-md-6 col-sm-6 col-lg-6 col-xl-4">
        <a href="" >
        <div class="card dash-widget">
         <div class="card-body">
          <span class="dash-widget-icon bg-info"><i class="fa fa-link text-white"></i></span>
          <div class="dash-widget-info">
            <h3>CONTRIBUTE</h3>
            <span class="text-dark">ACCESS ANCESTRY STORY</span>
          </div>
        </div>
      </div>
    </a>
    </div>

     <div class="col-md-6 col-sm-6 col-lg-6 col-xl-4">
        <a href="" >
        <div class="card dash-widget">
         <div class="card-body">
          <span class="dash-widget-icon bg-warning"><i class="fa fa-link text-white"></i></span>
          <div class="dash-widget-info">
            <h3>CONNECT</h3>
            <span class="text-dark">CONNECT WITH FRIENDS</span>
          </div>
        </div>
      </div>
    </a>
    </div>

    <div class="col-md-12">
    <div class="card shadow mb-4"  style="border-radius: 30px;">

        <div class="card-header py-3">
            <div class="row">
                    <div class="col-md-4"> <h3 class="card-title">Tributes</h3></div>
                    <div class="col-md-8">
                     <div class="card-tools pull-right">
                           <div class="btn-group">

     <a  class="btn add-btn d-none d-sm-inline-block btn btn-warning shadow-sm"  href=""
     data-toggle="modal" data-target="#add_tribute"><i class="fa fa-plus"></i> Tribute</a>

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

    </div>


@include('tributemodal')
    @endsection


