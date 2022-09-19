@extends('layouts.app')
@section('content')
          <div class="container">
          	  <h1 class="text-center">Edit brands</h1>
          	  <div class="box">
						<form action="/brands/{{$brand->id}}/update" method="POST">
							@csrf
						  <div class="form-group">
						    <label for="name">Name:</label>
						    <input type="text" class="form-control" placeholder="Enter name" id="name"
                              name="name"
                              value="{{$brand->name}}"
                              image="string"
						    >
						  </div>
						
						  <button type="submit" class="btn btn-primary">Update</button>
						</form>
						                   


          	  </div>
          </div>
@endsection