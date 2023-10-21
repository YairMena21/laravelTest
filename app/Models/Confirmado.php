<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Estado;


class Confirmado extends Model
{
    use HasFactory;
    protected $table = 'upload_confirmados_20230919201140';
    protected $primaryKey = 'estado_id';
    public $incrementing = 'false';
    public $timestamps = false;
    protected $attributes = ['fecha', 'casos'];

    public function estado(): BelongsTo
    {
       return $this->belongsTo(Estado::class);
    }
}
