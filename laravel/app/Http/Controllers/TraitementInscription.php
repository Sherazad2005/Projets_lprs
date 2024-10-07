<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TraitementInscription extends Controller
{
    public function showInscription(){
        return view('auth.inscription');

    }
    public function showConnection(){
        return view('auth.connection');

    }
    function inscriptionPost(Request $request){

    }


    function connectionPost(Request $request){

    }
}
