@extends('layout.backoffice')

@section ('title')


<h1 class="titolo">
    Editazione persona
</h1>

@endsection
@section('main-content')
<br>
<tr>
    <th scope="row">{{ $persona->id }}</th>
    <td>{{ $persona->nome }}</td>
    <td>{{ $persona->cognome }}&dollar;</td>

    <form action="{{ route('persona.update', [$persona->id]) }}" method="POST">
        <!-- per un qualche motivo se non metto
    csrf il sito si expired -->
        @csrf
        @method('PUT')
        <table>
            <tr>
                <td>Nome</td>
                <td><input type="text" name="nome" value="" id="nome"></td>
            </tr>
            <tr>
                <td>Cognome</td>
                <td><input type="text" name="cognome" value="" id="cognome"></td>
            </tr>
            <td></td>
            <td>
                <input type="submit" />
            </td>
</tr>
</table>
</form>


@endsection