<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <link href="stile.css" rel="stylesheet">

    <!-- Styles -->
    
</head>

<body>
<h1 class= "titolo">
  Pagina backoffice
</h1>

    @yield('title')

    @yield('content')     

    buongiorno
    <br>
    <a href = "{{ route('persona.gialloMetodo')}}" > 
        GIallo
    </a>

    <br>

    <a href = "{{ url('/show')}}" > 
        Show
    </a>

    <br>

    <a href="{{ route('persona.create') }}">
                        Crea una nuova persona
                    </a>

    <br>
    <a href="{{ route('persona.delete') }}">
            distruggi una persona
    </a>
    <br>
    
    <br>
        @yield('main-content')

       
</body>

</html>