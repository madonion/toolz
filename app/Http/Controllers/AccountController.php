<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class AccountController extends Controller
{
    //
    public function myAccount(Request $request){
        dd($request->user());
        return view('pages.contul-meu');
    }
}
