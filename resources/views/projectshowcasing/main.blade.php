<!DOCTYPE html>
<html>
<head>
    <title></title>
     <style>
                /*body{
     background:linear-gradient(rgba(0,0,50,0.1),rgba(0,0,50,0.1)),url(logo.png);
    background-size:cover;
    background-position:center;
}*/
</style>
</head>
<body>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> 
  <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                        <a href="{{ route('customer.login') }}"><h1>Click here to register</h1></a>
                    
                </div>
            @endif

</body>
</html>


           