<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class VendorLoginController extends Controller
{
    //
    public function __construct(){
        $this->middleware('guest:vendor');
    }
    public function showLoginForm(){
        return view('auth.vendor-login');
    }

    public function login(Request $request){


        $this->validate($request, [
            'email' =>'required|email',
            'password' => 'required|min:6'
        ]);
        
        if(Auth::guard('vendor')->attempt(['email'=> $request->email, 'password'=> $request->password], $request->remember)){
            return redirect()->route("vendorCenter");
        };

        return redirect()->back()->withInput($request->only('email'), 'remember');


    }
        protected function guard()
    {
        return auth()->guard('vendor');
    }

}
