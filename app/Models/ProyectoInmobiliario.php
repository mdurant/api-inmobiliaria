<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProyectoInmobiliario extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $fillable = [
        'nombre_proyecto',
        'descripcion',
        'ubicacion',
        'fecha_inicio',
        'fecha_fin',
        'estado'
    ];

    protected static function  boot(){
        parent::boot();
        static::creating(function ($model) {
            $model->{$model->getKeyName()} = (string) \Str::uuid();
        });
    }

    public function scopeBuscar($query, $filtros){
        $criterios = [
            'nombre_proyecto' => function($query, $nombre){
                $query->where('nombre_proyecto', 'LIKE', "%$nombre%");
            },
            'ubicacion' => function($query, $ubicacion){
                $query->where('ubicacion', 'LIKE', "%$ubicacion%");
            },
            'estado' => function($query, $estado){
                $query->where('estado', 'LIKE', "%$estado%");
            },
        ];

        foreach ($criterios as $filtro =>$accion){
            if (isset($filtros[$filtro])) {
                $accion($query, $filtros[$filtro]);
            }
        }

        return $query;
    }

    public function unidades()
    {
      return $this->hasMany(Unidad::class);
    }
}
