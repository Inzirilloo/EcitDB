
@extends('layout.backoffice')
@section('title')

<h1 class= "titolo">
  Pagina INDEX
</h1>


@endsection

@section('content')
<p>Contenuto della pagina home.</p>

@foreach ($persone as $persona)
        <tr>
        <th scope="row">{{ $loop->iteration }}/{{ $persona->id }}</th>
        <td>{{ $persona->nome }}</td>
        <td>{{ $persona->cognome }}</td>
    <!--<td>{{ $persona->cognome }}&dollar;</td>   -->
        <form action="{{ route('persona.destroy', [$persona->id]) }}" method="POST">
                @csrf
                    <button type="submit">
                    Delete
                </button>
        </form>
        <form action="{{ route('persona.edit', [$persona->id]) }}" method="GET">
                @csrf
                    <button type="submit">
                    Edit
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
<td>


@endforeach
<br></br>
@endsection
