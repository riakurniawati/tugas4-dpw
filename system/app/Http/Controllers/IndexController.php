<?php 

namespace App\Http\Controllers;


class indexController extends Controller
{
	function showindex(){
	
	    return view('index');
	}

	function showwatch(){

		return view('watch');

	}

	function showcontact(){

		return view('contact');

	}

}