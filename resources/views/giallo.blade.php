
@extends('layout.backoffice')
@section('title')

<h1 class= "titolo">
  🦭
  AO
</h1>

<a href = "{{ route('persona.gialloMetodo')}}" > 
    Ciao
</a>

<a href = "{{ url('/show')}}" > 
    Show
</a>
@endsection

@section('content')
<p>Contenuto della pagina home OOO.</p>
@endsection



