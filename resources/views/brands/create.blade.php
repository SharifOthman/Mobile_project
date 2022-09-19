@extends('layouts.app')
@section('content')


	<div class="container">
		 <h1 class="text-center">Add Brand</h1>
		<div class="box">
			<form action="{{route('brands.store')}}" method="POST">
				@csrf
			<div class="form-group">
			<label for="name">Name:</label>
			<input type="text" class="form-control" placeholder="Enter name" id="name" name="name">
			</div>
        	<button type="submit" class="btn btn-primary">Add</button>
			</form>

		</div>


	</div>







@endsection