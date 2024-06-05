<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exhibition extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'address',
        'ticket_price',
        'max_tickets',
        'photo',
        'user_id',
        'direction_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function direction()
    {
        return $this->belongsTo(Direction::class);
    }

    public function exhibits()
    {
        return $this->belongsToMany(Exhibit::class, 'exhibition_exhibits');
    }

    public function tickets()
    {
        return $this->hasMany(Ticket::class);
    }

    public function schedules()
    {
        return $this->hasMany(Schedule::class);
    }
}
