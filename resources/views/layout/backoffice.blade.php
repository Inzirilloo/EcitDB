<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <link href="stile.css" rel="stylesheet">

    <!-- Styles -->
    <style>
.forma {
  width: 900px;
  margin: 0 auto;
  padding: 20px;
  background-color: #fff;
  border-radius: 30px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);

}

button{
 border:1px solid #f7f25f;
 background-image: -webkit-gradient(linear, left  top, left bottom, from(#1708eb), to(#08ebe7));
 position: relative;
 left:125px;
}
</style>
</head>

<body>
<h1 class= "titolo">
  Pagina backoffice
</h1>

    <hr>
    @yield('title')
        
    @yield('content')     
    
    <a href = "{{ url('/show')}}" > 
        Show (scritto con url e non con route non schicciare tnato non fa nulla)
    </a>

    <br>

    <br>
        @yield('main-content')

       
</body>

</html>