<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Registro
 *
 * @property $id
 * @property $nombre
 * @property $correo
 * @property $contrasena
 * @property $edad
 * @property $created_at
 * @property $updated_at
 *
 * @property Conversacione[] $conversaciones
 * @property Conversacione[] $conversaciones
 * @property Publicacione[] $publicaciones
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Registro extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['nombre', 'correo', 'contrasena', 'edad'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function conversaciones()
    {
        return $this->hasMany(\App\Models\Conversacione::class, 'id', 'registro_id_emisor');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function conversaciones()
    {
        return $this->hasMany(\App\Models\Conversacione::class, 'id', 'registro_id_receptor');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function publicaciones()
    {
        return $this->hasMany(\App\Models\Publicacione::class, 'id', 'registro_id');
    }
    
}
