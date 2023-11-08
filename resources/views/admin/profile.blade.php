@extends('layouts.biometrics.template')
@section('extracss')
    <link href="{{asset('css/jquery.dataTables.min.css')}}" rel="stylesheet">

@endsection
@section('extrajs')
      <script src="{{asset('js/jquery-1.10.2.min.js')}}"></script>
  <script src="{{asset('js/jquery.dataTables.min.js')}}"></script>
<!--   <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.0.3/css/buttons.dataTables.min.css">
<script src="https://cdn.datatables.net/buttons/1.0.3/js/dataTables.buttons.min.js"></script>
<script src="/vendor/datatables/buttons.server-side.js"></script>
 -->
@endsection
@section('content')



<div class="row">
	<div class="col-md-12">
	<div class="card">
	<div class="card-header">
	<h4 class="card-title mb-0">My Profile</h4>
	</div>
	<div class="card-body">

		<div class="col-md-12">
			<div class="profile-view">
				<div class="profile-img-wrap">
				<div class="profile-img">
				<a href="#"><img alt="" src="https://cliply.co/wp-content/uploads/2020/08/442008110_GLANCING_AVATAR_3D_400px.gif"></a>
				</div>
				</div>
				<div class="profile-basic">
				<div class="row">
				<div class="col-md-5">
				<div class="profile-info-left">
				<h3 class="user-name m-t-0 mb-0">{{\Auth::user()->name}}</h3>
				<h6 class="text-muted">UI/UX Design Team</h6>
				<small class="text-muted">XX</small>
				<div class="staff-id">Employee ID : FT-0{{\Auth::id()}}</div>
				<div class="small doj text-muted">Date of Join : {{\Carbon\Carbon::parse(Auth::user()->created_at)->format('d-m-Y')}}</div>
				<div class="staff-msg">
					<a class="btn btn-custom" href="#"></a></div>
				</div>
				</div>
				<div class="col-md-7">
				<ul class="personal-info">
				{{-- <li>
				<div class="title">Phone:</div>
				<div class="text"><a href="">9876543210</a></div>
				</li> --}}
				<li>
				<div class="title">Email:</div>
				<div class="text"><a href="">{{\Auth::user()->email}}</a></div>
				</li>
				{{-- <li>
				<div class="title">Birthday:</div>
				<div class="text">24th July</div>
				</li> --}}
				<li>
				<div class="title">Address:</div>
				<div class="text">South Sudan, Juba</div>
				</li>
				<li>
				<div class="title">Gender:</div>
				<div class="text">xx</div>
				</li>
				<li>
				<div class="title">Reports to:</div>
				<div class="text">
				<div class="avatar-box">
				<div class="avatar avatar-xs">
				<img src="{{asset('sigs/'.Auth::user()->signature)}}" alt="">
				</div>
				</div>
				<a href="https://www.signwell.com/online-signature/draw/">
				Signature
				</a>
				</div>
				</li>
				</ul>
				</div>
				</div>
				</div>
				<div class="pro-edit"><a data-bs-target="#profile_info" data-bs-toggle="modal" class="edit-icon" href="#"><i class="fa fa-pencil"></i></a></div>
				</div>
		</div>
		{!! Form::open(['method'=> 'post','url' => 'update_profile', 'files' => true ]) !!}
			<h4 class="card-title">Personal Information</h4>
			<div class="row">
			<div class="col-md-6">
				<div class="form-group ">
					<label>Full Name</label>
					<input type="text" class="form-control" readonly value="{{Auth::user()->name}}" name="name">
				</div>
				<div class="form-group ">
					<label>Email</label>
					<input type="email" readonly class="form-control" value="{{Auth::user()->email}}" name="email">
				</div>

			
				 <!-- form-group -->
            <div class="form-group">
					<label>EMPLOYEE ID</label>
					<input type="text" class="form-control" readonly value="{{Auth::user()->id}}" name="id">
				</div>
			
			</div>
			<div class="col-md-6">
				

			<div class="form-group">
			<label>Signature UPLOAD <a target="_blank" href="https://www.signwell.com/online-signature/draw/">
				Signature
				</a></label>
			<input type="file" name="signature" class="form-control">
			</div>
			<div class="form-group ">
              <label>Generate New Password</label>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
            </div>

             <div class="form-group ">
              <label>Confirm Password</label>
         <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                           
            </div>
		
			</div>
		
			
	</div>
	<div class="text-end">
	<button type="submit" class="btn btn-primary">Submit</button>
	 </div>
	 {!!Form::close()!!}
	</div>
	</div>
	</div>
	</div>
	
@endsection