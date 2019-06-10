@extends("layouts.master")

@section('content')
<!DOCTYPE html>
<html>
<head>
  <title>welcome</title>
    <!--  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
</head>
<body>

             <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
  </section>
  
  @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

  
        <div class="container">
        <div class="row justify-content-center">
        <div class="col-sm-6">
        <form action="{{url('project')}}" method="post" enctype="multipart/form-data">
        <h1>PROJECT</h1>
        <hr class="mb-3">

        <label for="head"><b>Title</b></label>
        <input class="form-control" type="text" name="title" >

         <label for="disc"><b>Discription</b></label>
        <input class="form-control" type="text" name="discription" >


        <label for="parcat"><b>Select catagories</b></label>
                <select class="form-control" name="parcat">
                    @foreach($pros as $pro)
                <option value="{{$pro->id}}">{{$pro->id}}/{{$pro->name}}</option>
                @endforeach
                </select>

                 <label ><b>Relatedproject</b></label>  
        <select class="form-control" name="rb[]" multiple>
            @foreach($pros1 as $pro)
        <option value="{{$pro->id}}">{{$pro->id}}/{{$pro->title}}"</option>
        @endforeach
        </select> 

                  
        <label for="price"><b>Price</b></label>
        <input class="form-control" type="number" name="price">
       
            
    {{csrf_field()}}

     <label for="img"><b>Upload image</b></label>
        <input class="form-control-file" type="file" name="image" >
        <hr class="mb-3">
  
   
                  
                <input class="btn btn-primary" type="submit" value="Save" name="log">
                </form>
            </div>

            </div>
            </div>

</body>
</html>
@endsection