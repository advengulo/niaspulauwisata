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

<<<<<<< HEAD
       if($user->is_admin())
       {
         return redirect()->route('dashboard');
       }
       return redirect()->route('index');
     }
     return redirect()->back();
=======
            return redirect()->to($user->redirectUrlAfterLogin());
        }
        return redirect()->back();
        
>>>>>>> 7f3a4e96b7375ee845cacd885cc27fe308dffbb1
   }

   public function __construct()
   {
       $this->middleware('guest')->except('logout');
   }
}
