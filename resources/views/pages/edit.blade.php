@extends('main')

@section('title', '| Edit')

@section('body')

<div class="container">
	<br>

	<h2> Edit </h2>
	<hr>
	
	<form method="POST" action="{{route('cruds.update', $displays->id)}}" autocomplete="off">
		<input type="hidden" name="_method" value="PUT">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">


		@if (Session::has('message'))
		<div class="alert alert-success" role="alert">	
			<strong>Thank you!!</strong> {{Session::get('message')}}
		</div>
	    @endif

		@if(count($errors))
			<div class="alert alert-danger">
				<strong>Whoops!</strong> There were some problems with your input.
				<br/>
				<ul>
					@foreach($errors->all() as $error)
					<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
		@endif

		<div class="row">
			<div class="col-md-6">
				<div class="form-group {{ $errors->has('firstname') ? 'has-error' : '' }}">
					<label for="firstname">First Name:</label>
					<input type="text" id="firstname" name="firstname" class="form-control" placeholder="Enter First Name" value="{{$displays->firstname}}	">
					<span class="text-danger">{{ $errors->first('firstname') }}</span>
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group {{ $errors->has('lastname') ? 'has-error' : '' }}">
					<label for="lastname">Last Name:</label>
					<input type="text" id="lastname" name="lastname" class="form-control" placeholder="Enter Last Name" value="{{$displays->lastname}}">
					<span class="text-danger">{{ $errors->first('lastname') }}</span>
				</div>
			</div>
		</div>


		<div class="row">
			<div class="col-md-6">
				<div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
					<label for="email">Email:</label>
					<input type="text" id="email" name="email" class="form-control" placeholder="Enter Email" value=" {{$displays->email}}">
					<span class="text-danger">{{ $errors->first('email') }}</span>
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group {{ $errors->has('mobileno') ? 'has-error' : '' }}">
					<label for="mobileno">Mobile No:</label>
					<input type="text" id="mobileno" name="mobileno" class="form-control" placeholder="Enter Mobile No" value="{{$displays->mobileno}}">
					<span class="text-danger">{{ $errors->first('mobileno') }}</span>
				</div>
			</div>
		</div>


		<div class="form-group">
			<a href="{{route('cruds.index')}}" class="btn btn-danger" role="button">Cancel</a>
			<button class="btn btn-success">Save Changes</button>
		</div>
		
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>


	</form>
</div>

@endsection

