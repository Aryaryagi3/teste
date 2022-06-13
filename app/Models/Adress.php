<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Adress extends Model
{
    use HasFactory;

    protected $fillable = [
        'package_id',
        'cep',
        'street',
        'number',
        'neighbourhood',
        'state',
        'city'
    ];

    public function package() {
        return $this->belongsTo(Package::class, 'package_id');
    }
}
