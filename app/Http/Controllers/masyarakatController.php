<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\facades\DB;


class masyarakatController extends Controller
{
    function rakyat(){

        $masyarakat = DB::table('masyarakat')->get();

        return view('masyarakat',['masyarakat' => $masyarakat]);

    }

    function login(){
     
        $login = "silahkan login";
        return view('login', ['login' =>  $login]);
    }
}