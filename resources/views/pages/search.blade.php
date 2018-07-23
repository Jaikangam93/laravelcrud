@extends('main')

@section('title', '| Search ')


@section('body')
				
	<div class="container" style="margin-bottom: 150px"><br>
				<h3>Search </h3>
				<form action="/search" method="POST" >
					{{ csrf_field() }}
							<div class="input-group">
								<input type="text" class="form-control col-sm-9" name="searchdata" placeholder="Search users"> 
								<span class="input-group-btn">
									<button type="submit" class="btn btn-info" style="margin-left: 5px">
										 Search
											</button>
										
							</div>	
				</form>
			
			<div class="container">
			
				@if(isset($details))<br>
					<h4> The sample details are :</h4>
			    	<p> The search result for your query <b> {{ $query }} </b> are:
					<h5> Sample Data are here </h5>
				<table class="table table-striped">
					<thead style="background-color: black; color: white;">
						<tr> 
							 <th> Firstname</th>
							 <th> Email </th>
						</tr>					
					</thead>
				  <tbody>
					@foreach($details as $angam)
					<tr>
						<td> {{$angam->firstname}} </td>
						<td> {{$angam->email}} </td>
					</tr>
					@endforeach
				  </tbody>
			   </table>
			@elseif(isset($message))
				<p>{{ $message }}</p>
			
			@endif 
			
			</div>
	</div>

			
			
	
				

@endsection