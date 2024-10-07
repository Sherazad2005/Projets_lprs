<?php

namespace App\Http\Controllers;

use App\Models\Utilisateur;
use Illuminate\Http\Request;
namespace App\Http\Controllers;


class AuthController extends Controller
{
    public function inscription(){
        return view('auth.inscription');
    }
    public function showConnection(){
        return view('auth.connection');

    }


}
