<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Confirmado;
use App\Models\Defunciones;


class Estado extends Model
{
    use HasFactory;
    protected $table = 'upload_estados_20230919201321';
    protected $primaryKey = 'id';
    public $incrementing = 'false';
    public $timestamps = false;
    protected $attributes = ['poblacion', 'nombre', 'State'];

    public function confirmados(): HasMany
    {
        return $this->hasMany(Confirmado::class);
    }

    public function defunciones(): HasMany
    {
        return $this->hasMany(Defunciones::class);
    }

}
