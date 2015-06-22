<?php
/**
 * Created by PhpStorm.
 * User: jjonatan
 * Date: 22/06/15
 * Time: 11:43
 */

namespace App\Repositories;


use App\Entities\Producto;

class ProductoRepo extends BaseRepo {

    public function getModel(){
        return new Producto;
    }

    public function ListAndPaginate($search = null, $paginate = 50) {
        $qry = $this->model->orderBy('id', 'desc')
            ->producto($search)
            ->paginate($paginate);

        return $qry;
    }
} 