<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'product';

    protected $fillable = [
        'jenis',
        'merek',
        'foto',
        'keunggulan',
    ];

    protected $casts = [
        'foto' => 'array',
        'keunggulan' => 'array',
    ];

    public function getFotoAttribute($value)
    {
        return json_decode($value, true);
    }

    public function setFotoAttribute($value)
    {
        $this->attributes['foto'] = json_encode($value);
    }
    public function getKeunggulanAttribute($value)
    {
        return json_decode($value, true);
    }
    public function setKeunggulanAttribute($value)
    {
        $this->attributes['keunggulan'] = json_encode($value);
    }
}
