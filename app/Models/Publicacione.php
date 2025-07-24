<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Publicacione
 *
 * @property $id
 * @property $registro_id
 * @property $titulo
 * @property $contenido
 * @property $conversacion_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Conversacione $conversacione
 * @property Registro $registro
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Publicacione extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['registro_id', 'titulo', 'contenido', 'conversacion_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function conversacione()
    {
        return $this->belongsTo(\App\Models\Conversacione::class, 'conversacion_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function registro()
    {
        return $this->belongsTo(\App\Models\Registro::class, 'registro_id', 'id');
    }
    
}
