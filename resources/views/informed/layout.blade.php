@include('layout.header')
@include('layout.topbar')
@include('layout.sidebar') 

<a href="{{ url('/contact') }}"></a>
<!DOCTYPE html>
<html>
<head>
    <title>Contact Laravel 8 CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body background="images/plains.jpg" style="background-repeat:no-repeat;background-size:100%">
<div class="container">
    @yield('content')
</div>   
   
</body>
</html>
@include('layout.footer')
