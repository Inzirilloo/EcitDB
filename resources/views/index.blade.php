@extends('layout.backoffice')
@section('title')
<fieldset>

    <h1 class="titolo">
        Pagina Index(estende backoffice)(il file padre è la struttura e
        le sue cose vengono per prima)
    </h1>

</fieldset>
@endsection

@section('content')
<p>Contenuto della pagina index.</p>

<a href="{{ route('persona.create') }}">
    <h3>Crea una nuova persona </h3>
</a>
@foreach ($persone as $persona)
<div class="forma">
    <tr>
        <th scope="row">{{ $loop->iteration }}/ id = {{ $persona->id }}</th>
        <td>{{ $persona->nome }}</td>
        <td>{{ $persona->cognome }}</td>
        <!--<td>{{ $persona->cognome }}&dollar;</td>   -->
</div>
<form action="{{ route('persona.edit', [$persona->id]) }}" method="GET">

    <button type="submit">
        Edit
    </button>
</form>
<!--
        <form action="{{ route('persona.update', [$persona->id]) }}" method="POST" >
                @csrf
                @method('PUT')
        <table>
        <tr>
            <td>Nome</td>
            <td><input type="text" name="nome" value="" id = "nome"></td>
        </tr>
        <tr>
            <td>Cognome</td>
            <td><input type="text" name="cognome" value="" id = "cognome"></td>
        </tr>
            <td></td>
            <td>
            </td>
        </tr>
        </table>
</div>
         <button type="submit">
                    Edit
                </button>
        </form>
-->

<form action="{{ route('persona.destroy', [$persona->id]) }}" method="POST" class="form">
    @csrf
    <button type="submit">
        Delete
    </button>
</form>


<!--<form action="{{ route('persona.update', [$persona->id]) }}" method="POST">
                @csrf
                <table>

        <tr>
            <td>Nome</td>
            <td><input type="text" name="nome" value="" id = "nome"></td>
        </tr>
        <tr>
            <td>Cognome</td>
            <td><input type="text" name="cognome" value="" id = "cognome"></td>
        </tr>
            <td></td>
            <td>
                <input type="submit" />
            </td>
        </tr>
    </table>
                Edit
                </button>
        </form>
-->
<br>

@endforeach

<form id="form">
    <input hidden type="text" id="r" value="false">
</form>

<!-- questo if lo faccio perchè se io provo a fare $persona->nome mi dice che non è definito
se non esistono ancora delle persone nel database
percio sizeof ritorna true se ce almeno una roba dentro 
cioe in realta ritorna la lunghezza dell'array perro vabbe stessa roba cioe non è la stessa roba
ma la uso cosi vabbe ok-->
@if(sizeof($persone))
<form action="{{ route('persona.show') }}" method="POST" class="form">
    @csrf
    <!--
        conviene usare put o post
        @method('PUT')
        -->
    <h4> Nome di chi vuoi cercare </h4>
    <input type="text" id="nome" name="nome">
    <br>
    <button type="submit">show</button>
</form>

@csrf
<!--
        conviene usare put o post
        @method('PUT')
        -->
<button type="submit">indietro</button>

@endif

@if(sizeof($persone) == 0)
<form action="{{ route('persona.index') }}" method="GET" class="form">
    @csrf
    <!--
        conviene usare put o post
        @method('PUT')
        -->
    <button type="submit">indietro</button>
</form>

@endif
<br>

fine pagina index!
<hr>
<br></br>
@endsection