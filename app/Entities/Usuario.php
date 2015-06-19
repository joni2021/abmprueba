<?php namespace App\Entities;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Hash;
use Illuminate\Contracts\Hashing\Hasher;

class Usuario extends Model implements AuthenticatableContract, CanResetPasswordContract {

	

	use Authenticatable, CanResetPassword;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'usuarios';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['nombre', 'apellido', 'fkSexo','fkNivel', 'email', 'usuario', 'password','estado'];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = ['password', 'remember_token'];

    // Relaciones
    public function sexo() {
        return $this->belongsTo('App\Entities\Sexo', 'fkSexo', 'idSexo');
    }

    public function nivel() {
        return $this->belongsTo('App\Entities\Nivel', 'fkNivel', 'idNivel');
    }

    // Scopes
    public function scopeNombre($query, $nombre) {
        if (trim($nombre) != '')
            $query->orWhere('nombre', 'LIKE', "%$nombre%");
    }

    public function scopeApellido($query, $apellido) {
        if (trim($apellido) != '')
            $query->orWhere('apellido', 'LIKE', "$apellido%");
    }

    // Mutators
    public function setPasswordAttribute($value) {
        $this->attributes['password'] = bcrypt($value);
    }


}
