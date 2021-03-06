<?php namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginUserRequest;
use Illuminate\Support\Facades\Redirect;

class AuthController extends Controller {

    public function index() {
        if(\Auth::check())
            return Redirect::route('usuarios.index');
        else
            return view('auth.login');
    }

    public function authenticate(LoginUserRequest $request) {

        if (\Auth::attempt(['email' => $request->get('email'), 'password' => $request->get('password'), 'estado' => '1']))
            return Redirect::route('usuarios.index');
        else
            return redirect()->back()->withErrors('Hubo un error de logueo');

    }

    public function logout() {
        \Auth::logout();

        return redirect()->route('auth.login');
    }

}
