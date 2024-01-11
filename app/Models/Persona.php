<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    use HasFactory;
    //posso anche non metterlo se faccio la validazione 🦭
    //protected $fillable = array('id', 'nome', 'cognome'); 
    //i modelli sono inutili per creare le tabelle tu 
    //crei una migrazione la definisci e poi fai
    //php artisan migrate


    // non è vero il modello non è inutile se non faccio questo
    //comando non mi trova la tabella non so perchè però
    // il modello è tipo un tramite tra db e "'GUI'"??
    protected $table = 'persone';
    protected $fillable = array('id', 'nome', 'cognome'); 
}
