<?php namespace App\Http\Requests;

use App\Http\Requests\Request;
use Illuminate\Routing\Route;

class EditUserRequest extends Request{

    public function __construct(Route $route)
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
            'nombre' => 'required|string|min:3',
            'apellido' => 'string|min:3',
            'email' => 'email|min:8',
            'fkSexo' => 'required|exists:sexos,idSexo',
            'usuario' => 'required|string|min:3|max:20|unique:usuarios,usuario,' . $this->route->getParameter('id'),
            'password' => 'alpha_num'
        ];
    }
}
