@extends("layouts.default")
@section("title","Connection")
@section("content")
@endsection

<?php
    class AuthController extends App\Http\Controllers\{
        public function login(){
            return view("auth.login");
        }
        function index()
        {
            return view("welcome")
        }
        function listUti()
        {

        }

    }
