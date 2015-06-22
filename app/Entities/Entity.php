<?php
/**
 * Created by PhpStorm.
 * User: jjonatan
 * Date: 22/06/15
 * Time: 11:29
 */

namespace App\Entities;


use Illuminate\Database\Eloquent\Model;

class Entity extends Model {

    public static function getClass()
    {
        return get_class(new static);
    }

} 