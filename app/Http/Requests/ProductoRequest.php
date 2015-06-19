<?php namespace App\Http\Requests;

use App\Http\Requests\Request;
use Illuminate\Routing\Route;

class ProductoRequest extends Request
{

    public function  __construct(Route $route)
    {
        $this->route = $route;
    }

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'producto' => 'required|string|min:2',
            'descripcion' => 'string|min:5',
            'precio' => 'numeric',
            'fkUsuario' => 'required|exists:usuarios,id'
        ];
    }
}
