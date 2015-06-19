<?php namespace App\Http\Controllers\productos;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Producto;
use Illuminate\Contracts\Filesystem\Filesystem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\ProductoRequest;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Storage;

/**
 * @property mixed producto
 */
class ProductoController extends Controller {

    public function __construct()
    {
        $this->beforeFilter('@findProduct',['only'=>['edit','update']]);
    }


    public function findProduct(Route $route)
    {
        $this->producto = Producto::findOrFail($route->getParameter('id'));
    }

    public function validarFoto($archivo,$producto = null){
        if(\Request::hasFile('foto')){
            if($archivo->isValid()){

                $nombre = $archivo->getClientOriginalName();

                $nombre = str_replace(' ','_',$nombre);

                $nombre = date('d-m-Y').'-'.$nombre;

                $archivo->move('img/productos/', $nombre );

                return $nombre;
            }else{
                return Redirect::back()->with('estado',['no' => 'El archivo tiene que ser una foto']);
            }

        }else{
            return $nombre = 'default.jpg';
        }

    }


    /**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */

	public function index()
	{
        $productos = DB::table('productos')
            ->join('usuarios','usuarios.id','=','productos.fkUsuario')
            ->select('productos.id as idProducto','producto','descripcion','precio','foto','fkUsuario','productos.created_at','estadoProducto','usuarios.usuario')
            ->orderBy('idProducto','desc')
            ->paginate(10);

        return view('productos/listadoProductos',compact('productos'));
	}


    public function formAlta(){
        return view('productos/altaProducto');
    }


	public function create(productoRequest $request)
	{
        $datos = $request->all();

        $datos['foto'] = $this->validarFoto($request->file('foto'));

        Producto::create($datos);

        return Redirect::to('productos');

	}



	public function edit()
	{
        $producto = $this->producto;

        return view('productos/editarProducto',compact('producto'));
	}


	public function update(productoRequest $request, Producto $producto)
	{
        if($request->hasFile('foto')){
            $datos = $request->all();

            $datos['foto'] = $this->validarFoto($request->file('foto'),$producto);

            if($this->producto->foto != $producto->getFotoDefault()){
                Storage::delete($this->producto->foto);
            }

            $this->producto->fill($datos);

        }else{
            $this->producto->fill($request->except('foto'));
        }

        //dd($this->producto);
        $this->producto->save();

        return Redirect::to('productos');

	}

    public function desactivar($id)
    {
        $productoDesactivado = Producto::find($id);

        $productoDesactivado->estadoProducto = false;

        if($productoDesactivado->save())
        {
            return \Redirect::back()->with('estado', ['ok' => 'Se desactivó el producto <b>'.$productoDesactivado->producto.'</b>']);
        }else
        {
            return \Redirect::back()->with('estado', ['no' => 'No se pudo desactivar el producto <b>'.$productoDesactivado->producto.'</b>']);
        }

    }


    public function activar($id)
    {
        $productoActivado = Producto::find($id);

        $productoActivado->estadoProducto = 1;

        if($productoActivado->save())
        {
            return \Redirect::back()->with('estado', ['ok' => 'Se activo el producto <b>'.$productoActivado->producto.'</b>']);
        }else
        {
            return \Redirect::back()->with('estado', ['no' => 'No se pudo activar el producto <b>'.$productoActivado->producto.'</b>']);
        }

    }


	public function destroy($id)
	{
		//
	}

}
