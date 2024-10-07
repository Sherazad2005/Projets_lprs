<?php

namespace App\Http\Controllers;

use App\Models\Utilisateur;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function inscription(){
        return view('auth.inscription');
    }
    public function index(){
        return view('welcome');
    }
    function ListUtilisateurs(){
        $utilisateurs = Utilisateur::get();
    }
}
