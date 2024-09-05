<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'name',
        'country',
        'phone',
        'email',
        'password',
    ];

    public function properties()
    {
        return $this->hasMany(Property::class);
    }
}
