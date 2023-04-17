<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    use AuthenticatesUsers;

    protected $maxAttempts = 3;
    protected $decayMinutes = 2;

    public function __construct()
    {
        $this->middleware('guest:customer')->except('postLogout');
    }

    public function getLogin()
    {
        return view('auth.customer.login');
    }

    public function postLogin(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:5'
        ]);

        if (auth()->guard('customer')->attempt($request->only('email', 'password'))) {
            $request->session()->regenerate();
            $this->clearLoginAttempts($request);
            return redirect()->intended('/dashboard');
        } else {
            $this->incrementLoginAttempts($request);

            return redirect()
                ->back()
                ->withInput()
                ->withErrors(["Incorrect user login details!"]);
        }
    }

    public function custRegister(){
        return view('auth.customer.register');
    }

    public function postLogout()
    {
        auth()->guard('customer')->logout();
        session()->flush();

        return redirect()->route('customerLogin');
    }

}
