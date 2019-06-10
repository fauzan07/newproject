@extends("layouts.master")

@section('content')
<!DOCTYPE html>
<html>
<head>
	<title></title>
	  <!--   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> --> 
<div class="container-fluid mt-8">
</head>
<body>
             <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      
  </section>

	<div class="container">
    <h1>CATAGORY ASSIGN</h1>
 @if (session('message'))
                            <div class="alert alert-warning" role="alert">
                                {{ session('message') }}
                            </div>
                        @endif

</div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">projectcatagory</th>
        <th scope="col">clientname</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  	@foreach($pros as $pro)
    <tr>
      <th scope="row">{{$pro->id}}</th>
      <td>{{$pro->catagory_id}}</td>
        <td>{{$pro->user_id}}</td>
      <td><a class="btn btn-primary" href="{{url('catagoryassign',$pro->id)}}">view</a>
      <a class="btn btn-success" href="{{url('catagoryassign',[$pro->id ,'edit'])}}">edit</a>
      <form action="{{url('catagoryassign',$pro->id)}}" method="post">
        <input type="hidden" name="_method" value="DELETE">
         {{csrf_field()}}
        <input class="btn btn-danger" type="submit" name="submit" value="delete">
       
      	</form>
    </tr>
    @endforeach
  </tbody>
</table>


</body>
</html>
@endsection