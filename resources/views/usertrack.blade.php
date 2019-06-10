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
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
  </section>

	<div class="container">

</div>
<table class="table">
  <thead>
    <tr>
       <th scope="col">Name</th>
        <th scope="col">CurrentSignInAt</th>
      <th scope="col">LastSignInAt</th>
    </tr>
  </thead>
  <tbody>

    <tr>
       <th scope="row">{{auth()->user()->name}}</th>
      <td>{{auth()->user()->current_sign_in_at->diffforhumans()}}</td>
       <td>{{auth()->user()->last_sign_in_at->diffforhumans()}}</td>
    
    
         {{csrf_field()}}
    </tr>

  </tbody>
</table>


</body>
</html>
@endsection