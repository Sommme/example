<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;

    protected $fillable = [
        'start_datetime',
        'end_datetime',
        'exhibition_id',
        'status_id',
    ];

    public function exhibition()
    {
        return $this->belongsTo(Exhibition::class);
    }

    public function status()
    {
        return $this->belongsTo(ExhibitionStatus::class, 'status_id');
    }

    public function updateStatus()
    {
        $now = Carbon::now();

        if ($now->lt($this->start_datetime)) {
            $this->status_id = 1; // замените на id соответствующего статуса
        } elseif ($now->between($this->start_datetime, $this->end_datetime)) {
            $this->status_id = 2; // замените на id соответствующего статуса
        } else {
            $this->status_id = 3; // замените на id соответствующего статуса
        }

        $this->save();
    }

    public static function saveData($data)
    {
        return self::create([
            'start_datetime' => $data['start_datetime'][0],
            'end_datetime' => $data['end_datetime'][0],
            'exhibition_id' => $data['exhibition_id'],
            'status_id' => 1
        ]);
    }
}
