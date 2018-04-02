<?php

namespace Prueba;

use Illuminate\Database\Eloquent\Model;

class Profesione extends Model
{
    //
    //protected $table='Profesiones';  cuando el nombre de modelo no este relacionado especificamos de que tabla es
    //$timestamps=false;   en caso de que la tabla no tenga timestamps, el seeder debe saber que no los debe agregar
   
    protected $fillable = ['titulo'];
    /**
     * Profesione has many Users.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function users()
    {
    	// hasMany(RelatedModel, foreignKeyOnRelatedModel = profesione_id, localKey = id)
    	return $this->hasMany(User::class,'id_profesion');//many pertenece a muchos, uno a muchos
    }
}
