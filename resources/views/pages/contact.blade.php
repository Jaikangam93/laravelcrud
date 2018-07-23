@extends('main')

@section('title', '| Contact Us')


@section('body')

<div class="container col-md-6 ">
	<div class="row">
      <div class="col-md-12 ">
        <div class="well well-sm">

          <form class="form-horizontal" action="{{url('/contact')}}" method="post">
            <input type="hidden" name="_token" value="{{ csrf_token() }}"


            @if(count($errors))
            <div class="alert alert-danger" style="text-decoration-color: red"><br>
              <strong>Whoops!</strong> There were some problems with your input.
              <br/>
                    <ul>
                    @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                    </ul>
            </div>
            @endif

            @if (Session::has('success'))

                  <div class="alert alert-success" role="alert"><br>
                    
                    <strong>Thank you!!</strong> {{Session::get('success')}}
                  </div>
            @endif

          <fieldset>
            <br>
            <legend class="text-center">Contact us</legend>
    
            <!-- Name input-->
            <div class="form-group">
              <label class="col-md-12 control-label" for="name">Name</label>
              <div class="col-md-12">
                <input id="name" name="name" type="text" placeholder="Your name" class="form-control" value="{{ old('name') }}">
              </div>
            </div>
    
            <!-- Email input-->
            <div class="form-group">
              <label class="col-md-12 control-label" for="email">Your E-mail</label>
              <div class="col-md-12">
                <input id="email" name="email" type="text" placeholder="Your email" class="form-control" value="{{ old('email') }}">
              </div>
            </div>
    
            <!-- Message body -->
            <div class="form-group">
              <label class="col-md-12 control-label" for="message">Your message</label>
              <div class="col-md-12">
                <textarea class="form-control" id="message" name="message" placeholder="Please enter your message here..." value="{{ old('message') }}"  rows="5" ></textarea>
              </div>
            </div>
    
            <!-- Form actions -->
            <div class="form-group">
              <div class="col-md-12 text-right">
                <button type="submit" class="btn btn-success">Submit</button>
              </div>
            </div>
          </fieldset>
          </form>
        </div>
      </div>
	</div>
</div> 

@endsection