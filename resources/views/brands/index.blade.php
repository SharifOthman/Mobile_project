@extends('layouts.app')
@section('content')
          <div class="container">
          	  <h1 class="text-center">All brands</h1>
          	    <table class="table table-bordered">
					    <thead>
					      <tr>
					        <th>ID</th>
					        <th>Name</th>
					        <th>controle</th>
					      </tr>
					    </thead>
					    <tbody>
					    	@foreach($brands as $brand)
					      <tr>
					        <td>{{ $brand->id }}</td>
					        <td>{{$brand->name}}</td>
					        


					        <td>                                                                          <a href="/brands/{{$brand->id}}/edit" class="btn btn-success">Edit</a>
                            <a href="/brands/{{$brand->id}}" class="btn btn-danger">Delete</button>

					        </td>
					      </tr>
					   @endforeach
					    </tbody>
				 </table>
          </div>
@endsection