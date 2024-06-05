<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExhibitionStatus extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    public function schedules()
    {
        return $this->hasMany(Schedule::class, 'status_id');
    }
}
