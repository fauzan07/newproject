<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class ProjectshowcasingController extends Controller
{
    public function main(Request $request){

    return view('projectshowcasing.main');
}

public function message(Request $request){
if (Auth::check()) {
    return view('projectshowcasing.message');
     }else{
        echo "you are logged out";
    }
}


public function logout1(Request $request){
    Auth::logout();
    return redirect('/customer');
}

}
