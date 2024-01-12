@extends('layout.backoffice')

@section('main-content')
<h1> Benvenuto pagina show </h1>

<a href = "{{ route('persona.index')}}" > 
    Schiaccia se vuoi tornare indietro
</a>
<!--<pre> </pre>-->

<br>

<a href = "{{ url('/persone')}}" > 
stessa cosa ma con url non con route
</a>

@foreach ($persone as $persona)
<div class = "forma">
        <tr>
        <th scope="row">{{ $loop->iteration }}/ id = {{ $persona->id }}</th>
        <td>{{ $persona->nome }}</td>
        <td>{{ $persona->cognome }}</td>
        <br>
</div>
@endforeach

<!-- se avessi fatto dopo il title e 
prima il main-content stampa lo stesso prim ail title
perche nel file backoffice segue 
l'ordine dei segnaposti


cosa signfiica ::
cosa significa name nella route
come funziona yiled cioè vado nello show ma fa prima index

 -->

@endsection
