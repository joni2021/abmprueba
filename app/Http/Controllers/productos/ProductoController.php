<?php namespace App\Http\Controllers\productos;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Repositories\ProductoRepo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\ProductoRequest;
use Illuminate\Support\Facades\Storage;

/**
 * @property mixed producto
 */
class ProductoController extends Controller {

    protected $productoRepo;

    public function __construct(ProductoRepo $productoRepo)
    {
        $this->productoRepo = $productoRepo;
    }


    public function validarFoto($archivo){
        if(\Request::hasFile('foto')){
            if($archivo->isValid()){

                $nombre = $archivo->getClientOriginalName();

                $nombre = str_replace(' ','_',$nombre);

                $nombre = date('d-m-Y').'-'.$nombre;

                $archivo->move('img/productos/', $nombre );

                return $nombre;
            }else{
                return Redirect::back()->withErrors('El archivo tiene que ser una foto');
            }

        }else{
            return $nombre = 'default.jpg';
        }

    }


	public function index(Request $request)
	{
        $productos = $this->productoRepo->ListAndPaginate(
            $request->get('search'),
            10
        );

        return view('productos.listadoProductos',compact('productos'));
	}


    public function formAlta(){
        return view('productos.altaProducto');
    }


	public function create(productoRequest $request)
	{
        $datos = $request->only('producto','descripcion','precio','foto','fkUsuario');

        $datos['foto'] = $this->validarFoto($request->file('foto'));

        $this->productoRepo->create($datos);

        return Redirect::to('productos');

	}


	public function edit($id)
	{
        $producto = $this->productoRepo->getModel()->find($id);

        return view('productos.editarProducto',compact('producto'));
	}


	public function update(productoRequest $request, $id)
	{
        $producto = $this->productoRepo->getModel()->find($id);

        if($request->hasFile('foto')){
            $datos = $request->all();

            $datos['foto'] = $this->validarFoto($request->file('foto'));

            if($producto->foto != $this->productoRepo->getModel()->getFotoDefault()){
                Storage::delete($producto->foto);
            }

            $producto->fill($datos);

        }else{
            $producto->fill($request->except('foto'));

        }

        $producto->save();

        return Redirect::to('productos')->with('ok','Se modificó el producto '.$producto->producto);

	}

    public function desactivar($id)
    {
        $productoDesactivado = $this->productoRepo->find($id);

        $productoDesactivado->estadoProducto = 0;

        if($productoDesactivado->save())
        {
            return \Redirect::back()->with('ok', 'Se desactivó el producto '.$productoDesactivado->producto);
        }else
        {
            return \Redirect::back()->withErrors('No se pudo desactivar el producto '.$productoDesactivado->producto);
        }

    }


    public function activar($id)
    {
        $productoActivado = $this->productoRepo->find($id);

        $productoActivado->estadoProducto = 1;

        if($productoActivado->save())
        {
            return \Redirect::back()->with('ok', 'Se activo el producto '.$productoActivado->producto);
        }else
        {
            return \Redirect::back()->withErrors('No se pudo activar el producto '.$productoActivado->producto);
        }

    }

}
