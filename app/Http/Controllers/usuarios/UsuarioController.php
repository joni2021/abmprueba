<?php namespace App\Http\Controllers\usuarios;

use App\Entities\Usuario;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Repositories\SexoRepo;
use App\Repositories\UsuarioRepo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Pagination\Paginator;
use App\Http\Requests\CreateUserRequest;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Hash;

class UsuarioController extends Controller {

    protected $usuarioRepo;
    protected $sexoRepo;

    public function __construct(UsuarioRepo $usuarioRepo, SexoRepo $sexoRepo) {
        $this->usuarioRepo = $usuarioRepo;
        $this->sexoRepo = $sexoRepo;
    }

	public function login(Request $request)
    {

    }

	public function index(Request $request)
	{
        $usuario = $this->usuarioRepo->ListAndPaginate(
            $request->get('search'),
            10
        );
				
		return view('usuarios/usuarios', compact('usuario'));
	}

	public function create() {
        $sexos = $this->sexoRepo->Listing();

		return view('usuarios.create', compact('sexos'));
	}

	
	public function store(CreateUserRequest $request)
	{
        $datos = $request->only('nombre','apellido','email','fkSexo','usuario','password');

		$datos = $request->all();
		$datos['fkNivel'] = 2;

        Usuario::create($datos);
        return \Redirect::to('usuarios');

	}


	public function edit()
	{
		$usuario = $this->usuarioRepo->getModel();
        $sexos = $this->sexoRepo->Listing();

		return view('usuarios/formModificar', compact('usuario','sexos'));
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

		$usuarioDesactivado->estado = 0;

		if($usuarioDesactivado->save())
			return \Redirect::to('usuarios')->with('estado', ['ok' => 'Se desactivó al usuario <b>'.$usuarioDesactivado->usuario.'</b>']);
		else
			return \Redirect::to('usuarios')->with('estado', ['no' => 'No se puso desactivar al usuario <b>'.$usuarioDesactivado->usuario.'</b>']);


	}


	public function activar($id)
	{
		$usuario = Usuario::find($id);

		$usuario->estado = 1;

		if($usuario->save())
			return \Redirect::to('usuarios')->with('estado', ['ok' => 'Se activó al usuario <b>'.$usuario->usuario.'</b>']);
		else
			return \Redirect::to('usuarios')->with('estado', ['no' => 'No se puso activar al usuario <b>'.$usuario->usuario.'</b>']);

		
	}


	public function logout()
	{
		\Auth::logout();

		return \Redirect::to('auth/login');
	}

}