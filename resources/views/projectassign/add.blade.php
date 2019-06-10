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


        <div class="container">
        <div class="row justify-content-center">
        <div class="col-sm-6">
        <form action="{{url('projectassign')}}" method="post" enctype="multipart/form-data">
        <h1>PROJECT ASSIGN</h1>
        <hr class="mb-3">

   <label for="clientname"><b>username</b></label> 
        <select class="form-control" name="rbi" >
            @foreach($pros as $pro)
        <option value="{{$pro->id}}">{{$pro->id}}/{{$pro->name}}"</option>
        @endforeach
        </select> 
        

      <label for="project"><b>project</b></label> 
        <select class="form-control" name="rb[]" multiple>
            @foreach($pros1 as $pro)
        <option value="{{$pro->id}}">{{$pro->id}}/{{$pro->title}}"</option>
        @endforeach
        </select> 


      

      
                  
    {{csrf_field()}}
  
                <input class="btn btn-primary" type="submit" value="assign" name="log">
                </form>
            </div>

            </div>
            </div>

</body>
</html>
@endsection