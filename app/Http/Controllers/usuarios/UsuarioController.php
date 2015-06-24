<?php namespace App\Http\Controllers\usuarios;

use App\Entities\Usuario;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Repositories\SexoRepo;
use App\Repositories\UsuarioRepo;
use Illuminate\Http\Request;
use App\Http\Requests\CreateUserRequest;
use App\Http\Requests\EditUserRequest;


class UsuarioController extends Controller {

    protected $usuarioRepo;
    protected $sexoRepo;

    public function __construct(UsuarioRepo $usuarioRepo, SexoRepo $sexoRepo) {
        $this->usuarioRepo = $usuarioRepo;
        $this->sexoRepo = $sexoRepo;
    }

	public function index(Request $request)
	{
        $usuario = $this->usuarioRepo->ListAndPaginate(
            $request->get('search'),
            10
        );

		return view('usuarios.usuarios', compact('usuario'));
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


	public function edit($id)
	{
        $usuario = $this->usuarioRepo->getModel()->find($id);
        $sexos = $this->sexoRepo->Listing();

		return view('usuarios.formModificar', compact('usuario','sexos'));
	}



	public function update(EditUserRequest $request, $id)
	{
        $usuario = $this->usuarioRepo->find($id);

        if($request->get('password') != '')
            $datos = $request->only('nombre','apellido','email','fkSexo','usuario','password');
        else
            $datos = $request->only('nombre','apellido','email','fkSexo','usuario');

        $usuario->fill($datos);

        $usuario->save();

		if(\Request::ajax())
			return response()->json(['ok' => 'Se actualizó al usuario <b>'.$usuario->usuario.'</b>']);
		else
			return redirect()->route('usuarios.index')->with(['ok' => 'Se actualizó al usuario '.$usuario->usuario]);
	}


	public function desactivar($id)
	{
        $usuarioDesactivado = Usuario::find($id);

		$usuarioDesactivado->estado = 0;

		if($usuarioDesactivado->save())
			return \Redirect::to('usuarios')->with(['ok' => 'Se desactivó al usuario '.$usuarioDesactivado->usuario]);
		else
			return \Redirect::to('usuarios')->withErrors('No se puso desactivar al usuario '.$usuarioDesactivado->usuario);


	}


	public function activar($id)
	{
		$usuario = Usuario::find($id);

		$usuario->estado = 1;

		if($usuario->save())
			return \Redirect::to('usuarios')->with(['ok' => 'Se activó al usuario '.$usuario->usuario]);
		else
			return \Redirect::to('usuarios')->withErrors('No se puso activar al usuario '.$usuario->usuario);

		
	}


	public function logout()
	{
		\Auth::logout();

		return \Redirect::to('auth.login');
	}

}