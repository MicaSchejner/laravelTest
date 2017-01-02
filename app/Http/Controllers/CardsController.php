<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use DB;
use App\Card;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class CardsController extends Controller
{
    public function index(){
//        $cards = DB::table('cards')->get(); // esto es con use DB
        $cards = Card::all(); //esto es con el modelo App\Card
        return view('cards.index', compact('cards'));
    }

    /*public function show($card){
        return $card;
    }*/

    /*public function show($id){
        $card = Card::find($id);
        return view('cards.show',compact('card'));
//        return $card;//te devuelve el json con el resultado
    }*/

    public function show(Card $card){

        // return $card;
        return view('cards.show',compact('card'));

    }
}
