@extends("layouts.master")

@section('content')
<!DOCTYPE html>
<html>
<head>
  <title>welcome</title>
   <!--  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> -->
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
        <form action="{{url('category')}}" method="post" enctype="multipart/form-data">
        <h1>CATAGORY</h1>
        <hr class="mb-3">

        <label for="cat"><b>name</b></label>
        <input class="form-control" type="text" name="name" ><br>
                  
    {{csrf_field()}}
  
                <input class="btn btn-primary" type="submit" value="Save" name="log">
                </form>
            </div>

            </div>
            </div>

</body>
</html>
@endsection