<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/persone', [PersonaController::class, 'index'])->name('persona.index');

Route::post('/persone', [PersonaController::class, 'show'])->name('persona.show');

Route::get('/create', [PersonaController::class, 'create'])->name('persona.create');

//Route::post('/show/{id}', [PersonaController::class, 'show'])->name('persona.show');

//Route::get('/destroy/{id}', [PersonaController::class, 'showdestroy'])->name('persona.delete');
//se non specifico che ci deve essre un id nella route non funziona
//potrei farlo anche con la richiesta DELETE non so cosa cambierebbe però
Route::post('/destroy/{id}', [PersonaController::class, 'destroy'])->name('persona.destroy');


//Route::delete('/destroy', [PersonaController::class, 'create'])->name('persona.destroy');
// esiste il tipo di richiesta HTTP delete bho ok
//Route::get('/persone', [PersonaController::class, 'destroy'])->name('persona.delete');
/*Route::get('/show', function(){ 
return view ('show');});*/


/*visto che il form l'ho sto facendo nel file create creo una route
che dirà che nell'url di create quindi nel file create si aspetterò un richiesta 
di tipo post che dovrà reinderizzare a quel metodo di controll che
praticamente farà l'inserimento*/
Route::post('/create', [PersonaController::class, 'store'])->name('persona.store');

/* STESSA COSA SOLO CHE PER CHIAMARE STA ROTTA PUOI USARE SOLO /giallo
/giallo
Route::get('/giallo', [PersonaController::class, 'gialloMetodo']); 
*/
Route::get('/giallo', [PersonaController::class, 'gialloMetodo'])->name('persona.gialloMetodo');

//Route::get('/{id}/edit', [PersonaController::class, 'edit'])->name('persona.edit');
//Route::post('/persone/{id}', [PersonaController::class, 'phpedit'])->name('persona.edit');
Route::get('/edit/{id}', [PersonaController::class, 'edit'])->name('persona.edit');

//Route::post('/edit/{id}', [PersonaController::class, 'edit'])->name('persona.edit');
Route::put('/persona/{id}', [PersonaController::class, 'update'])->name('persona.update');



/* questa rotta praticaemnte fa che se tu nell'url scrivi /giallo ti chiama 
il controller che chiama il metodo, cioe chiama il metodo gialloMetodo della
classe controller PersonaController, questa rotta puo essre chiamata internamente 
tramite il suo nome se non vuoi usare l'URL tipo se vuoi fare un link
invece di fare robe strane nbasta che chiami sta rotta
*/
/*il coso name è una roba che serve a te teoricamente nel senso è uguale al url ma 
lo puoi usare internamente perche devi capire che ora hai creato una rotta con nome
persone.gialloMetodo che puoi chimare in altre pagine quindi in realtà puoi anche non metterlo
il name*/

Auth::route();
