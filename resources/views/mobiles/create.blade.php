@extends('layouts.app')
@section('content')


	<div class="container">
		 <h1 class="text-center">Add Mobile</h1>
		<div class="box">
			<form action="{{route('mobiles.store')}}" method="POST" enctype="multipart/form-data">
				@csrf
			<div class="form-group">
			<label for="name">Name:</label>
			<input type="text" class="form-control" placeholder="Enter name" id="name" name="name">
			</div>


			<div class="form-group">
			<label for="image">Image:</label>
			<input type="file"  name="image">
			</div>

			<div class="form-group">
			<label for="price">Price:</label>
			<input type="integer" class="form-control" placeholder="Enter price" id="name" name="price">
			</div>

			


            <div class="form-group">
			<label for="description">Description:</label>
			<textarea name="description" class="form-control">  </textarea>
			</div>



			<div class="form-group">
			<label for="brand_id">Brand:</label>
			<select class="form-control" name="brand_id">
				@foreach($brands as $one)
				  <option value="{{$one->id}}">{{$one->name}}</option>
				@endforeach
				
			</select>
			</div>

            
            
            






        	<button type="submit" class="btn btn-primary">Add</button>
			</form>



		</div>


	</div>







@endsection