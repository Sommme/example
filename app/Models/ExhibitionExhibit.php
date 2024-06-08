<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExhibitionExhibit extends Model
{
    use HasFactory;

    protected $fillable = [
        'exhibition_id',
        'exhibit_id',
    ];

    public function exhibition()
    {
        return $this->belongsTo(Exhibition::class);
    }

    public function exhibit()
    {
        return $this->belongsTo(Exhibit::class);
    }

    public static function saveData($data)
    {
        return self::create([
            'exhibition_id' => $data['exhibition_id'],
            'exhibit_id' => $data['exhibit_id'],
        ]);
    }
}
