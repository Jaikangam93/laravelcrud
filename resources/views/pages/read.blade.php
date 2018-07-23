@extends('main')

@section('title','| Read')

@section('style')
<!-- Bootstrap CSS file -->
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
@endsection

@section('body')
		<div class="container-fluid">
				
			
					<div class=""> <h3 style="text-align: center;">Read</h3></div>
		 
		           <table class="table table-bordered">

		                      <thead style="background-color: #3E8E8C; color: white; ">
			                      <tr>
			                        <th scope="col">SL. No</th>
			                        <th scope="col">First Name </th>
			                        <th scope="col">Last Name </th>
			                        <th scope="col"> Email</th>
			                        <th scope="col">Mobile no </th>
			                        <th scope="col">Action</th>
			                      </tr>
		                      </thead>
		                     
		                      <tbody>
		                     
			                       @foreach ($displays as $display)
			                        <tr>
			                        	<td> {{ $display['id'] }}</td>
			                        	<td> {{ $display['firstname'] }}</td>
			                        	<td> {{ $display['lastname'] }}</td>
			                        	<td> {{ $display['email'] }}</td>
			                        	<td> {{ $display['mobileno'] }}</td>
			                        	<td>
			                        		<div class="row">
			                        		<div class="col-md-3">
			                        			<a class="btn btn-primary col-sm- 12"role="button"  href=" {{route('cruds.show', $display->id)}}"> Show</a>

			                        		</div>	
			                        		<div class="col-md-3">
			                        			<a class="btn btn-success col-md-12"role="button"  href="{{url('cruds/'.$display->id.'/edit')}}"> Edit</a>

			                        		</div>
			                        		

			                        		<div class="col-md-6">
			                        			<form action="{{route('cruds.destroy',$display->id)}}" method="POST">
												   <input type="hidden" name="_method" value="DELETE">
												   <input type="hidden" name="_token" value="{{ csrf_token() }}">
												   <input type="submit" class="btn btn-danger col-md-12"  value="Delete"/>
												</form>

			                        		</div>


												
											</div>
			                        		

			                        	</td>
					                
			                        @endforeach
			                       
		                      </tbody>
		          </table>
		         
				         
		</div>
		<div class="text-center">
         		{{ $displays -> links()}}
    	</div>

@endsection
