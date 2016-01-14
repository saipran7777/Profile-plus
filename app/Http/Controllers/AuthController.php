<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Http\Requests;

class AuthController extends Controller
{
    /**
     * Handle an authentication attempt.
     *
     * @return Response
     */
    public function getLogin()
    {
        $view= view('auth/login');
        return $view;
    }
    public function postLogin(Request $request)
    {
        $email= $request->input('Username');
        $password= $request->input('Password');
        if (Auth::attempt(['email' =>$email , 'password' => $password])){
            // Authentication passed...
            return redirect()->intended('Home');
        }
        else
        {
            return redirect()->intended('auth/login');
        }        
    }
    public function authenticate()
    {

    }
}
?>