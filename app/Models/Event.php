<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Event extends Model
{
    use SoftDeletes;

    protected $guarded = ['id'];
    protected $fillable = [];

    protected $casts = [
        'start_datetime' => 'datetime',
        'end_datetime' => 'datetime',
        'registration_deadline' => 'datetime',
        'is_online' => 'boolean',
    ];

    public function organizer()
    {
        return $this->belongsTo(User::class, 'organizer_id')->where('role', 'organizer');
    }
}
