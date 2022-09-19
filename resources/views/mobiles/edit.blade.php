@extends('layouts.app')
@section('content')


	<div class="container">
		 <h1 class="text-center">Add Mobile</h1>
		<div class="box">
			<form action="/mobiles/{{ $mobile->id }}/update" method="POST" enctype="multipart/form-data">
				@csrf
			<div class="form-group">
			<label for="name">Name:</label>
			<input type="text" class="form-control" placeholder="Enter name" id="name" value="{{ $mobile->name}}" name="name">
			</div>


			<div class="form-group">
			<label for="image">Image:</label>
			<input type="file" value="{{ $mobile->image}}"  name="image">
			</div>

			<div class="form-group">
			<label for="price">Price:</label>
			<input type="text" class="form-control" placeholder="Enter price" id="name" value="{{ $mobile->price}}" name="price">
			</div>

			


            <div class="form-group">
			<label for="description">Description:</label>
			<textarea name="description" value="{{ $mobile->description}}" class="form-control">  </textarea>
			</div>



		
            
            
            






        	<button type="submit" class="btn btn-primary">Add</button>
			</form>



		</div>


	</div>







@endsection