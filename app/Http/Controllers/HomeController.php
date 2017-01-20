<?php

namespace App\Http\Controllers;

use App\UserModel;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function show(Request $request){
    	$user = $request->session()->get('username', 'no data');

    	return view('common.home')->with('username', $user);
    }

    public function logout(Request $request){
    	$request->session()->flush();
    	return redirect('login');
    }
}
