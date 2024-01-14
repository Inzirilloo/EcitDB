@extends('layout.backoffice')

@section ('title')


<h1 class="titolo">
    Creazione nuova persona
</h1>

@endsection
@section('main-content')

<form action="{{ route('persona.store') }}" method="POST">
    <!-- per un qualche motivo se non metto
    csrf il sito si expired -->
    @csrf

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
@if ($errors->any())
<div>
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif


<!--<form action = "{{ route('persona.store') }}" method = "POST">
    @csrf
    
    <label for = "nome"> Nome </label>
    <input type="submit" value="Invia">
    </form>
-->
<!--
<input type="text" name="nome" id = "nome">
     label è la scritta associata all'input si associa 
    solo tramite id -->
@endsection