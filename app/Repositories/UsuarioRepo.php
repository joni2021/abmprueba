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

    public function ListAndPaginate($search = null, $paginate = 50) {
        $qry = $this->model->orderBy('id', 'desc')
            ->nombre($search)
            ->apellido($search)
            ->paginate($paginate);

        return $qry;
    }

} 