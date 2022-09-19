@extends('layouts.app')
@section('content')
          <div class="container">
          	  <h1 class="text-center">All Mobiles</h1>
          	    <table class="table table-bordered">
					    <thead>
					      <tr>
					        <th>ID</th>
					        <th>Brand</th>
					        <th>Name</th>
					        <th>Price</th>
					        <th>Description</th>
					        <th>Image</th>
					        <th>controle</th>
					      </tr>
					    </thead>
					    <tbody>
					    	@foreach($mobiles as $mobile)
					      <tr>

					      
					        <td>{{ $mobile->id }}</td>
					        <td>{{ $mobile->brand->name }}</td>
					        <td>{{$mobile->name}}</td>
					        <td>{{$mobile->price}}</td>
					        <td>{{$mobile->description}}</td>
					      
					        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 margin">
                        <div class="brand_box">
                         <td> 
					       <img src="upload/{{$mobile->image}}" alt="img" />
					       </td>
					           
                            
                        </div>
                    </div>




					        <td>                                                                          <a href="/mobiles/{{$mobile->id}}/edit" class="btn btn-success">Edit</a>
					        	<br>
					        	<br>
                            <a href="/mobiles/{{$mobile->id}}" class="btn btn-danger">Delete</button>
                              </a>
					        </td>
					      </tr>
					   @endforeach
					    </tbody>
				 </table>
          </div>
@endsection