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



<h2>clientname: </h2><b style="font-size: 50px">
@foreach($pros as $pro)
{{$pro->name}}
@endforeach



<h2>projectcatagory: </h2><b style="font-size: 50px">
@foreach($pros1 as $pro)
{{$pro->parent_catagories}}
@endforeach



</body>
</html>
@endsection

 


