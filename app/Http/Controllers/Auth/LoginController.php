<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }

    public function authenticate(Request $request)
    {
        $data = $request->only([
            'email', 'password'
        ]);
        $validator = $this->validator($data);
        $remember = $request->remember;
        if ($validator->fails()) {
            return redirect()->route('login')
                ->withErrors($validator)
                ->withInput(['email']);
        }

    

        if (Auth::attempt($data, $remember)) {
            $request->session()->regenerate();
            return redirect()->route('home');
        } else {
            $validator->errors()->add('password', 'E-mail e/ou senha inválido(s)');
            return redirect()->route('login')
                ->withErrors($validator)
                ->withInput(['email']);
        }
    }

    private function validator(array $data)
    {
        return Validator::make($data, [
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required', 'string']
        ]);
    }
}
