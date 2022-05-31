<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Categoria;

class Noticia extends Model
{
    use HasFactory;
    protected $table = 'noticia';
    public $timestamps = false;
    protected $casts = ['data'=>'datetime:d/m/Y'];

    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }
}
