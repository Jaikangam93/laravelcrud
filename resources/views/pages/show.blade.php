@extends('main')

@section('title', '| Show ')

@section('body')

<div class="container">
	<br>

	<h2> Show </h2>
	<hr>
	
		<div class="row">
			<div class="col-md-6">
				
					<label for="firstname">First Name:</label> {{$displays->firstname}}		
			</div>

			<div class="col-md-6">
				
					<label for="lastname">Last Name:</label> {{$displays->lastname}}
		
			</div>
		</div>


		<div class="row">
			<div class="col-md-6">
				
					<label for="email">Email:</label> {{$displays->email}}
					
			</div>
			<div class="col-md-6">
				
					<label for="mobileno">Mobile No:</label> {{$displays->mobileno}}
					
			</div>
		</div>
		<br><br>
		<div class="row">
			<div class="col-md-1">
				
					
					<a href="{{route('cruds.index')}}" class="btn btn-info" role="button">Back</a>
		
			</div>
		</div>


	
</div>
<br>




@endsection

