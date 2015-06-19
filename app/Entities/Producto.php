<?php namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $fotoDefault = 'default.jpg';

    protected $fotoDirectory = 'img/productos/';

    protected $table = 'productos';

    protected $fillable = ['producto', 'descripcion', 'precio','foto', 'fkUsuario', 'estadoProducto'];

    public function getFotoDefault(){
        return $this->fotoDefault;
    }

    public function getFotoDirectory(){
        return $this->fotoDirectory;
    }
}