@extends('layout.backoffice')

@section ('title')


<h1 class= "titolo">
Distruzione persona
</h1>

@endsection
@section('main-content')

@foreach ($persone as $persona)
<br> 

                            <tr>
                                <th scope="row">{{ $loop->iteration }}/{{ $persona->id }}</th>
                                <td>{{ $persona->nome }}</td>
                                <td>{{ $persona->cognome }}&dollar;</td>
                                    <form action="{{ route('persona.destroy', [$persona->id]) }}" method="POST">
                                        @csrf
                                        <button type="submit">
                                            Delete
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                         
@endsection
