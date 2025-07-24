<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Conversacione
 *
 * @property $id
 * @property $registro_id_emisor
 * @property $registro_id_receptor
 * @property $mensaje
 * @property $enviado_en
 *
 * @property Registro $registro
 * @property Registro $registro
 * @property Publicacione[] $publicaciones
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Conversacione extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['registro_id_emisor', 'registro_id_receptor', 'mensaje', 'enviado_en'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function registro()
    {
        return $this->belongsTo(\App\Models\Registro::class, 'registro_id_emisor', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function registro()
    {
        return $this->belongsTo(\App\Models\Registro::class, 'registro_id_receptor', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function publicaciones()
    {
        return $this->hasMany(\App\Models\Publicacione::class, 'id', 'conversacion_id');
    }
    
}
