<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'email',
        'ruc_number',
        'address',
        'state',
        'country',
        'phone',
    ];

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
