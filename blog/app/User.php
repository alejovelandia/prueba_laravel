<?php

namespace Prueba;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    //protected $casts=
    //['is_admin'=>'boolean'];  //que booleano no se muestre como numero sino como boleano



    public static function findByEmail($email){

        return static::where(compact('email'))->first();//static es el equivalente a usar user

    }

        public function profession()
        {
            // belongsTo(RelatedModel, foreignKey = profesion_id, keyOnRelatedModel = id)
            return $this->belongsTo(Profesione::class,'id'); //relaciona el id de profesion con tabla profesion debo especificar a que columna de la tabla profesion esta relacionada
            //belong es pertenece, uno a uno
        }

    

    public function isAdmin(){
        return $this->is_admin;
    }
}
