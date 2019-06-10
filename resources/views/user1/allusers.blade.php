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

</div>
<h1>USERS</h1>
 @if (session('message'))
                            <div class="alert alert-warning" role="alert">
                                {{ session('message') }}
                            </div>
                        @endif
<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">name</th>
      <th scope="col">email</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($users as $pro)
    <tr>
      <th scope="row">{{$pro->id}}</th>
      <td>{{$pro->name}}</td>
      <td>{{$pro->email}}</td>

      <td><a class="btn btn-primary" href="{{url('showusers',$pro->id)}}">view</a></td>
    </tr>
    @endforeach
  </tbody>
</table>


</body>
</html>
@endsection