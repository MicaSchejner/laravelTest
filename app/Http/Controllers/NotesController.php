<?php

namespace App\Http\Controllers;

use App\Card;
use App\Note;
use Illuminate\Http\Request;

use App\Http\Requests;

class NotesController extends Controller
{
    public function store(Request $request, Card $card){

//        $note = New Note();
//        $note->body = $request->body;
//        $card->notes()->save($note);

    /** otra forma **/
//        $note = New Note(['body'=>$request->body]);// tiene que estar en fillable en el modelo
//        $card->notes()->save($note);


    /** otra forma **/
//        $card->notes()->save(
//            New Note(['body'=>$request->body]);
//        );


    /** otra forma **/
//        $card->notes()->create([
//            'body'=>$request->body
//        ]);

    /** otra forma **/
//        $card->notes()->create($request->all()); //devuelve un array con todo lo del request y solo guarda los que estan como filleable

    /** otra forma **/
        $card->addNote(
            new Note($request->all())
        );


//        return \Redirect::to('/some/new/uri');
//        return $redirect()->to('/some/new/uri');
//        return $redirect('/some/new/uri');
        return back();

    }
}
