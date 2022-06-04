<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Area;
use App\Models\Empresa;
use App\Models\Segmento;

class Empresa extends Model
{
    use HasFactory;
    protected $table = 'empresa';
    public $timestamps = false;
    //protected $casts = ['data'=>'datetime:d/m/Y'];

    public function area()
    {
        return $this->belongsTo(Area::class);
    }
    public function cidade()
    {
        return $this->belongsTo(Cidade::class);
    }
    public function segmento()
    {
        return $this->belongsTo(Segmento::class);
    }
}
