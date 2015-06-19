<?php
/**
 * Created by PhpStorm.
 * User: jjonatan
 * Date: 19/06/15
 * Time: 13:39
 */

namespace App\Repositories;


use App\Entities\Usuario;

class UsuarioRepo extends BaseRepo {

    public function getModel() {
        return new Usuario;
    }

} 