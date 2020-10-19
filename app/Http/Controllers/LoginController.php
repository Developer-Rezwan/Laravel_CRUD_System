<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ValidLogin;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login()
    {
    	return view('login');
    }

    public function check(ValidLogin $value)
    {

    	// $user = $data->username;
    	// $pass = $data->password;

    	// ekebare array akare pete hole nicher system a nite hobe

    	$name = $value->name;
        $pass = $value->password;

        $data = [
          'name' => $name,
          'password' => $pass
        ];
    	

     //$data = $value->only('name','password');
        
    	if(Auth::attempt($data)){
    		return redirect()->intended('/'); //intended use korle any specific page a login kora jay
    	}else{
    		return redirect()->to('/login');
    	}
           
    }
}
