@extends('main')

@section('title', '| Upload ')



@section('body')
	<br>
	<div class="container" style="margin-bottom: 100px">
		<h3 align="center"> File Uploading in Laravel </h3><br>

		@if(count($errors)>0)
		<div class="alert alert-danger">
			Upload Validation Error<br>
			<ul>
				@foreach($errors->all() as $error )
				<li>{{$error}}</li>
				@endforeach
			</ul>
		</div>
		@endif

		<form action="/upload" enctype="multipart/form-data" method="post">
			{{csrf_field()}}
			<div class="form-group">
				<table class="table">
					<tr>
						<td width="40%" align="right"> <label> Select File for Upload</label> </td>
						<td width="30%" > <input type="file" name="image"> </td>
						<td width="30%" align="left"> <input type="submit" name="upload" class="btn btn-info" value="Upload" >  </td> 
					</tr>
				</table>

			</div>
			
		</form>
		<hr>
		<div class="row container">
			<h4> Show File </h4> <br>
			<img src="{{asset('storage/Upload/Desert.jpg')}}">
			


		</div>

	</div>				



@endsection