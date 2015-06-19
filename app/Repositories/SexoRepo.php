<?php
/**
 * Created by PhpStorm.
 * User: jjonatan
 * Date: 19/06/15
 * Time: 15:58
 */

namespace App\Repositories;


use App\Entities\Sexo;

class SexoRepo extends BaseRepo {

    public function getModel() {
        return new Sexo;
    }

    public function Listing() {
        $qry = $this->model->orderBy('sexo')
            ->lists('sexo', 'idSexo');

        return $qry;
    }
} 