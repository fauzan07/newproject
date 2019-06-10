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

   <h1>PROJECT</h1>
<h2><b>CATAGORY: </b></h2><h3 style="font-size: 30px" >{{$category->name}}</h3></br>

<h2><b>PROJECT TITLE: </b></h2><h3 style="font-size: 30px" >{{$pros->title}}</h3></br>

<div class="container">
				<div class="row justify-content-center">
            	<div class="col-sm-9">
<img src='{{asset("storage/uploads/$pros->image")}}' style="width:800px;"></br>
</div>
</div>
</div>
<h2><b>DISCRIPTION: </b></h2><h3 style="font-size: 30px">{{$pros->discription}}<h3><br>


<h2><b>RELATED PROJECT: </b></h2><h3 style="font-size: 30px">


@foreach($pros1 as $pro)
{{$pro->title}}
<br>
@endforeach

<h2><b>PRICE: </b></h2><h3 style="font-size: 30px">{{$pros->price}}</h3>
</body>
</html>
@endsection