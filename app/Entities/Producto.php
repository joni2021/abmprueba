<?php namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Producto extends Entity
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

    public function scopeProducto($qry,$busqueda){
        if(trim($busqueda)!= '')
            $qry->orWhere('producto','like',"%$busqueda%");
    }

    public function usuario(){
        return $this->belongsTo(Usuario::getClass(), 'fkUsuario', 'id');
    }
}