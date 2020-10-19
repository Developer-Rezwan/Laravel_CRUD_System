<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserFormData;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function register()
    {
    	return view('register');
    }

    public function user(UserFormData $fdata)
    {
    	 $data = [
    		'name' => $fdata->username,
    		'email' => $fdata->email,
    		'password' => Hash::make($fdata->password),
    	];
        
        User::insert($data);
        return redirect('login');
        
    }
}
