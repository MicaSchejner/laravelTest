<?php

namespace App\Http\Controllers;


class PagesController extends Controller{

	public function home(){

		$people = ['Mica','Pedro','Luis'];

	    // return view('welcome',['people' => $people]);
	    return view('welcome',compact('people'));
	    // return view('welcome')->with->('people',$people);
	}

	public function about (){
		return view('pages.about');

	}

}    

