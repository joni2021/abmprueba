<?php namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginUserRequest;

class AuthController extends Controller {

    public function index() {
        return view('auth.login');
    }

    public function authenticate(LoginUserRequest $request) {

        if (\Auth::attempt(['email' => $request->get('email'), 'password' => $request->get('password'), 'estado' => '1']))
            return redirect()->intended('usuarios.index');
        else
            return redirect()->back()->withErrors('Hubo un error de logueo');

    }

    public function logout() {
        \Auth::logout();

        return redirect()->route('auth.login');
    }

}
