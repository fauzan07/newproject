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
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
  </section>


<h2>name: </h2><b style="font-size: 50px">{{$category->name}}</b></br>

<h2>ProjectTitle: </h2><b style="font-size: 30px">
@foreach($projects as $pro)
<li>{{$pro->title}}</li>
@endforeach


</body>
</html>
@endsection

 


