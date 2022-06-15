<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'name',
        'description',
        'status',
        'cep',
        'street',
        'number',
        'neighbourhood',
        'state',
        'city'
    ];

    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }
}
