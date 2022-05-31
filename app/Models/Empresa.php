<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Area;

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
}
