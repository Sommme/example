<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exhibit extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'author',
        'description',
        'creation_date',
        'photo',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function exhibitions()
    {
        return $this->belongsToMany(Exhibition::class, 'exhibition_exhibits');
    }
}
