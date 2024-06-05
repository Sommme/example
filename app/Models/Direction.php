<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Direction extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    public function exhibitions()
    {
        return $this->hasMany(Exhibition::class);
    }
}
