<?php namespace App\Http\Controllers\usuarios;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Pagination\Paginator;
use App\Http\Requests\CreateUserRequest;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Hash;

class UsuarioController extends Controller {

	public function __construct()
	{
		$this->beforeFilter('@findUser', ['only' => ['edit', 'update']]);
	}


	public function findUser(Route $route)
	{
		$this->usuario = Usuario::findOrFail($route->getParameter('id'));
	}


	public function login()
    {
        if (Auth::attempt(['email' => \Request::get('email'), 'password' => \Request::get('password'), 'estado' => '1']))
        {
            return \Redirect::to('usuarios');
        }else{
            return \Redirect::to('auth/login')->withInput()->with('errors','Hubo un error de logueo');
        }
    }

	public function listaPorId($id){
		$users = \DB::table('usuarios')->where('id',$id)->get();		
	}


	public function index()
	{
		$usuario = \DB::table('usuarios')
						->join('sexos','sexos.idSexo','=','usuarios.fkSexo')
						->join('niveles','niveles.idNivel','=','usuarios.fkNivel')
                        ->orderBy('id','desc')
						->paginate(15);
				
		return view('usuarios/usuarios', compact('usuario'));
		
	}

	public function formAlta()
	{
		return view('usuarios/formAlta');
	}

	
	public function create(CreateUserRequest $request)
	{
		$datos = $request->all();
		$datos['fkNivel'] = 2;

        $datos['password'] = Hash::make($datos['password']);

        Usuario::create($datos);
        return \Redirect::to('usuarios');

	}


	public function edit()
	{
		$usuario = $this->usuario;

		return view('usuarios/formModificar', compact('usuario'));
	}


	
	public function update(CreateUserRequest $request)
	{
		$this->usuario->fill($request->all());
		$this->usuario->save();

		if(\Request::ajax())
			return response()->json(['ok' => 'Se actualizó al usuario <b>'.$this->usuario->usuario.'</b>']);
		else
			return redirect()->back()->with('estado', ['ok' => 'Se actualizó al usuario <b>'.$this->usuario->usuario.'</b>']);
	}


	public function desactivar($id)
	{
		$usuarioDesactivado = Usuario::find($id);

		$usuarioDesactivado->estado = false;

		if($usuarioDesactivado->save())
		{
			return \Redirect::to('usuarios')->with('estado', ['ok' => 'Se desactivó al usuario <b>'.$usuarioDesactivado->usuario.'</b>']);
		}else
		{
			return \Redirect::to('usuarios')->with('estado', ['no' => 'No se puso desactivar al usuario <b>'.$usuarioDesactivado->usuario.'</b>']);
		}

	}


	public function activar($id)
	{
		$usuario = Usuario::find($id);

		$usuario->estado = 1;

		if($usuario->save())
		{
			return \Redirect::to('usuarios')->with('estado', ['ok' => 'Se activó al usuario <b>'.$usuario->usuario.'</b>']);
		}else
		{
			return \Redirect::to('usuarios')->with('estado', ['no' => 'No se puso activar al usuario <b>'.$usuario->usuario.'</b>']);
		}
		
	}


	public function logout()
	{
		\Auth::logout();

		return \Redirect::to('auth/login');
	}

}