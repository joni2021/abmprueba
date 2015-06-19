<?php
/**
 * Created by PhpStorm.
 * User: jjonatan
 * Date: 19/06/15
 * Time: 13:39
 */

namespace App\Repositories;


abstract class BaseRepo {

    protected $model;

    public function __construct() {
        $this->model = $this->getModel();
    }

    abstract public function getModel();

    public function find($id) {
        $qry = $this->model->findOrFail($id);
        return $qry;
    }

    public function create(Array $datos) {
        $registro = $this->model->create($datos);
        return $registro;
    }

    public function edit($model, $datos) {
        $model->fill($datos);
        $model->save();

        return $model;
    }

} 