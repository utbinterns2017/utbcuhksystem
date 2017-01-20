<?php

namespace App\Http\Controllers;

use DB;
use App\UserModel;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function store(Request $request){
    	$this->validate($request, [
    			'password'=>'required|min:8',
    			'username'=>'required|min:8',
    			'username'=>'required|max:16',
    			'email'=>'required|email'
    		]);

    		// access data from db
    		$checker = false;

	    	$data = new UserModel;
	    	$data->username = $request->username;
    		$data->email = $request->email;
    		$data->password = $request->password;
    		$result = $data->save();

    		
	    	 if($result == 1){
	    	  		return redirect('login');
	    	  } else{
	    	  		return back();
	    	  }

	}

	public function authenticate(Request $request){
		/*	1.Get input from user
			2.Get password from database based on username
			3.Compare password with database password*/

			$inpUsername = $request->username;
			$inpPw = $request->password;
			//$inpPw = '[{"password":"'.$request->password.'"}]';

			/*$data = new UserModel;
			$dbPw = $data::select('password')->where('username', $inpUsername)->get();*/

			$check = UserModel::selectRaw("Count(*) as Total")->where('username', '=', $inpUsername)->first();

			if(intval($check->Total) > 0){
				$dbPw = UserModel::select('password')->where('username','=', $inpUsername)->first();

				if(password_verify($inpPw, $dbPw->password)){
					//$request->session()->set('username', $inpUsername);
					//return redirect('home');
					return redirect('login');
				} else {
					$request->session()->set('username', $inpUsername);
					$name = $inpUsername;
					return view('common.home')->with('username',$inpUsername);
				}
			} else{
				return redirect('usernotfound');
			}
	}

	public function notFound(){
		echo 'Error 404: User not found';
	}

	    	/*$dataAr = $data::all();*/
	    	/*$checker = true;
*/
	    /*	foreach($dataAr as $element)
	    		if($request->username == $element || $request->email == $element)
	    			$checker = false;
	    			echo 'Same Username or email';



*/
	    	/*$result = DB::table('users')->insert(['username' => $request->username, 'email'=> $request->email, 'password'=>$request->password]);
*/
	    /*	if($checker){
	    		$data->username = $request->username;
    		$data->email = $request->email;
    		$data->password = $request->password;
    		$result = $data->save();

    		
	    	 if($result == 1){
	    	  		return redirect('login');
	    	  } else{
	    	  		return back();
	    	  }
	    	}*/
    		
    



}
