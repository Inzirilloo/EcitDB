@extends('layout.backoffice')

@section('main-content')
<a href = "{{ route('persona.index')}}" > 
    Torna alla pagina iniziale
</a>
<!-- se avessi fatto dopo il title e 
prima il main-content stampa lo stesso prim ail title
perche nel file backoffice segue 
l'ordine dei segnaposti


cosa signfiica ::
cosa significa name nella route
come funziona yiled cioè vado nello show ma fa prima index

 -->

@endsection
