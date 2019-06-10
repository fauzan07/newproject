@extends("layouts.master")

@section('content')
<!DOCTYPE html>
<html>
<head>
	<title></title>
	   <!--  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> --> 
<div class="container-fluid mt-10">
</head>
<body>

             <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
  </section>

  <h1>PROJECT</h1>
	<div class="container mt-4">
</div>
 @if (session('message'))
                            <div class="alert alert-warning" role="alert">
                                {{ session('message') }}
                            </div>
                        @endif
<table class="table table-striped">
   <thead class="thead-dark">
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Title</th>
       <th scope="col">category_id</th>
       <th scope="col">Image</th>
       <th scope="col">price</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  	@foreach($pros as $pro)
    <tr>
      <th scope="row">{{$pro->id}}</th>
      <td>{{$pro->title}}</td>
        <td>{{$pro->catagory_id}}</td>
      <td>
<img src='{{asset("storage/uploads/$pro->image")}}' style="width:50px;"></br></td>
<td>{{$pro->price}}</td>
      <td><a class="btn btn-primary" href="{{url('project',$pro->id)}}">view</a>
     @can('isadmin') <a class="btn btn-success" href="{{url('project',[$pro->id ,'edit'])}}">edit</a>
      <form action="{{url('project',$pro->id)}}" method="post">
        <input type="hidden" name="_method" value="DELETE">
         {{csrf_field()}}
        <input class="btn btn-danger" type="submit" name="submit" value="delete">
       
      	</form>@endcan
    </tr>
    @endforeach
  </tbody>
</table>


</body>
</html>
@endsection