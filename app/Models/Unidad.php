<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unidad extends Model
{
    use HasFactory;

    protected $table = 'unidades';

    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'numero',
        'tipo_unidad',
        'metraje',
        'precio',
        'estado',
        'proyecto_inmobiliario_id',
    ];

    protected static function  boot(){
        parent::boot();
        static::creating(function ($model) {
            $model->{$model->getKeyName()} = (string) \Str::uuid();
        });
    }

    public function proyectoInmobiliario()
    {
      return $this->belongsTo(ProyectoInmobiliario::class);
    }

    public function cliente(){
      return $this->belongsTo(Cliente::class);
    }
}


