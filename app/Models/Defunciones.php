<?php

namespace App\Models;
use App\Models\Estado;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;

class Defunciones extends Model
{
    use HasFactory;
    protected $table = 'upload_defunciones_20230919201302';
    protected $primaryKey = 'estado_id';
    public $incrementing = 'false';
    public $timestamps = false;
    protected $attributes = ['fecha', 'casos'];

    public function estado(): BelongsTo
    {
       return $this->belongsTo(Estado::class);
    }
}
