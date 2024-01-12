<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Persona;

class PersonaController extends Controller
{
    //
    public function index()
    {
        // passo sto index perche con il foreach 
        //invece di contare l'id conta per in maniera normale da 1 a max
        $persone = Persona::all();
        //dd();
        return view('index', compact('persone'));
        //return view('layout.backoffice', compact('persone'));
    }

    /*public function create()
    {
        $persone
    }
*/

    public function show(Request $request)
    {

        $persona = new Persona();
        $persona->nome = $request->nome;
        $persone = Persona::where('nome', $persona->nome)->get();

        //$persona = Persona::with('nome')->get();
        //$persona = Persona::find($id);
        /* compcat crea un array con dentro le variabili del'oggetto richiesto in sto caso se tu richiedi di vedere
        quella determinata persona ti restitusice quella perche quando vai nella classe persona prende la view 
        che questo metodo show gli ha dato e te lo piazza sul sito
        cioe sto metodo ti restituisce l'oggetto persona*/
        return view('index', compact('persone'));
    }


    // questo metodo è collegato ad una rotta che 

    public function create()
    {
        return view('create');
    }

    public function gialloMetodo()
    {
        return view('giallo');
    }

    /* da quello che ho capito store
    gli metto come parametro request e non persona 
    perchè cioe io sto mettendo i dati dentro un form
    quindi alla fine è tutta roba stringa gliela comunico tramite
    il post a questo metodo quindi non è ancora una persona
    ora devo prendere le informazioni e metterle nel database*/
    public function store(Request $request)
    {
        //creo un oggetto persona 
        //cioe un oggetto con le caratteristiche 
        //del modello Persona , metto le () perche
        //è il costruttore


        /*$request->validate([
                'nome' => 'required|min:2|max:100',
                'cognome' => 'required|min:10',
            ],
            [
                'title.required' => 'Il Nome è obbligatorio; per favore inserisci un titolo',
                'title.min' => 'Hai scritto un titolo troppo corto; per favore inseriscine uno più lungo',
                'title.max' => 'Hai scritto un titolo troppo lungo; per favore inseriscine uno più corto',
                'cognome.required' => 'La descrizione è obbligatoria; per favore inseriscila',
                'cognome.min' => 'Hai scritto una descrizione troppo corta; per favore inseriscine una più lunga',
            ]
        );
*/
        $persona = new Persona();

        $persona->nome = $request['nome'];
        $persona->cognome = $request['cognome'];
        //dd($persona);
        $persona->save();
        //save è insert into
        //$persona->save();
        return redirect('/persone');
        //return view('index');
        //User got saved show OK message
        //return Response::json(array('success' => true, 'user_added' => 1), 200);
        // quando si usa un metodo post meglio usare view
        //quando si usa un get puoi anche usare redirect
        //return redirect()->back()->with('success', 'Comment stored successfully!');
        //return view('persone');
        //return redirect()->back()->with(\Session::flash('flash_message', 'Messo correttamente 👍'));
        //return redirect('')
    }


    // puoi usare il linguaggio eloquent solo
    // se hai creato un midello
    // senno dovresti usare sintatssi sql
    /* public function destroy(Request $request)
    { 
        $persona = Persona::find($request);
        $persona->delete();
        return view('index');
    }
    */
    public function destroy($id)
    {
        $persona = Persona::find($id);
        $persona->delete();
        /*$max = Persona('persone')->max('id') + 1; 
        ecitprova::statement("ALTER TABLE persone AUTO_INCREMENT =  $max");*/
        return redirect('/persone');
    }

    public function showdestroy()
    {
        // per fare il foreach gli devo passare tutti i record quindi
        //quando faccio return e lo reinderizzo alla pagina destroy
        // gli passo anche l'array di json probabilemnte
        $persone = Persona::all();
        return view('destroy', compact('persone'));
    }

    public function edit($id)
    {
        $persona = Persona::find($id);
        //return view('edit', compact('persona'));
        return view('edit', compact('persona'));
    }

    public function update(Request $request, $id)
    {
        $persona = Persona::find($id);
        $persona->nome = $request->input('nome');
        $persona->cognome = $request->input('cognome');
        $persona->update();
        return redirect('persone')->with('status', 'Persona Updated Successfully');
    }
}
