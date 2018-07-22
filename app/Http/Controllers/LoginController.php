<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $check = Auth::attempt(['email' => $request->email, 'password' => $request->password]);

        if($check) {
            $user = User::where('email', $request->email)->first();

            return redirect()->to($user->redirectUrlAfterLogin());
        }
        return redirect()->back();
        
   }

   public function __construct()
   {
       $this->middleware('guest')->except('logout');
   }
}
