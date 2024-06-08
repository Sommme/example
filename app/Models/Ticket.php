<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

    protected $fillable = [
        'exhibition_datetime',
        'quantity',
        'user_id',
        'exhibition_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function exhibition()
    {
        return $this->belongsTo(Exhibition::class);
    }

    public static function saveData($data)
    {
        return self::create([
                'user_id' => $data['user_id'], 'exhibition_id' => $data['exhibition_id'],
                    'quantity' => $data['quantity'], 'exhibition_datetime' => $data['exhibition_datetime']
            ]
        );
    }
}
