
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

<h1>USERS</h1>

<h3><b>NAME:</b></h3>{{$user->name}}</br>
<h3><b>EMAIL:</b></h3>{{$user->email}}</br>

<h3><b>CATAGORY ASSIGN:<b></h3>

@foreach($user->category as $cp)
{{$cp->name}}<br>
@endforeach 

<h3><b>PROJECT ASSIGN:<b></h3>

@foreach($user->project as $cp)
{{$cp->title}}<br>
@endforeach 


</body>
</html>
@endsection
