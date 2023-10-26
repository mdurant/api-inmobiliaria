<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';

    public $incrementing = false;
    protected $keyType = 'string';
    protected $fillable = [
        'rut',
        'nombre',
        'apellido',
        'correoelectronico',
        'telefonocontacto',
        'fechacreacion'
    ];

    protected static function boot(){
        parent::boot();
        static::creating(function ($model) {
            $model->{$model->getKeyName()} = (string) \Str::uuid();
        });
    }
}
