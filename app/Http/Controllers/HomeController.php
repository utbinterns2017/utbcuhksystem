<?php

namespace App\Http\Controllers;

use App\UserModel;
use Illuminate\Http\Request;

class HomeController extends Controller
{
/*    public function show(){
    	$dataArr = UserModel::all();

    	return view('common.home', compact('dataArr'));
    }*/

    public function logout(Request $request){
    	$request->session()->flush();
    	return redirect('login');
    }
}
