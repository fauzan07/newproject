@extends("layouts.master")

@section('content')
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

             <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
     
  </section>

<h2>project: </h2>


	<div class="container">

</div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">project</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
 @foreach($sproject as $pro)
    <tr>
      <td>{{$pro->title}}</td>

<td>
<a class="btn btn-primary" href="{{url('projectdetails/'.$pro->id)}}">view</a>
</td>
</tr>
    @endforeach
  </tbody>
</table>


</body>
</html>
@endsection

 


