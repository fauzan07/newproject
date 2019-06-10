@extends("layouts.master")

@section('content')
<!DOCTYPE html>
<html>
<head>
  <title>welcome</title>
    <!-- <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> -->
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
        <form action="{{url('project',$project->id)}}" method="post" enctype="multipart/form-data">
        <input type="hidden" name="_method" value="PUT">
        <h1>PROJECT</h1>
        <hr class="mb-3">

        <label for="head"><b>Title</b></label>
        <input class="form-control" type="text" name="title" value="{{$project->title}}">

         <label for="disc"><b>Discription</b></label>
        <input class="form-control" type="text" name="discription"value="{{$project->discription}}" >


        <label for="parcat"><b>Select catagories</b></label>
                <select class="form-control" name="parcat">
                    @foreach($categories as $pro)
                <option value="{{$pro->id}}" {{  $project->category->id == $pro->id ? 'selected' : ''}}>{{$pro->id}}/{{$pro->name}}
                </option>
                @endforeach
                </select>


                  <label ><b>Relatedproject</b></label>  
                        <select class="form-control" name="rb[]" multiple>
                                @foreach($allRelatedproject as $rb)
                                    <option value="{{$rb->id}}" {{ in_array($rb->id, $relatedprojectIds) ? 'selected' : '' }}>{{$rb->id}}/{{$rb->title}}"</option>
                                @endforeach
                        </select> 

                  
        <label for="pri"><b>Price</b></label>
        <input class="form-control" type="number" name="price" value="{{$project->price}}" >
       
            
    {{csrf_field()}}

     <label for="img"><b>Upload image</b></label>
        <input class="form-control-file" type="file" name="image" >
        <hr class="mb-3">

  <img src="{{ asset('storage/uploads/'.$project->image) }}" style="width:200px;">
                <input class="btn btn-primary" type="submit" value="update" name="log">


                </form>
            </div>

            </div>
            </div>

</body>
</html>
@endsection
